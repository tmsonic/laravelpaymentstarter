<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country\Country;
use DB;
use Auth;
use Braintree;
use App\Helpers\CurrencyHelper;
use Illuminate\Support\Facades\Validator;
use App\Rules\OnlyAsciiCharacters;
use App\Models\UserCourse\UserCourse;
use App\Helpers\OrderDataHelper;
use App\Models\Order\Order;

class CheckoutController extends Controller
{
    public function index($courseSlug)
    {
        $course = DB::table('courses')->where('slug', $courseSlug)->first();
        if(is_null($course))
        {
            abort(403, 'Invalid course!');
        }

        $authUser = Auth::user();
        $userCourse = DB::table('user_courses')->where('user_id', $authUser->id)->where('course_id', $course->id)->first();
        if( (!is_null($userCourse)) && ($authUser->role->id != 1) )
        {
            abort(403, 'You already have access to this course!');
        }

        $countries = Country::with('statesInOrder')->orderBy('name', 'ASC')->get();

        $email = $authUser->email;

        $settings = DB::table('settings')->first();
        if(is_null($settings))
        {
            abort(403, 'Settings not found!');
        }
        $currencyTextRaw = $settings->currency;
        $currency = CurrencyHelper::getCurrencyString();
        $braintreeEnabled = $settings->enable_braintree;
        $stripeEnabled = $settings->enable_stripe;
        $payPalSmartEnabled = $settings->enable_paypal_smart;

        $btToken = "";
        $brainTreeLabel = "Credit card by Braintree";
        if($braintreeEnabled)
        {
            $payPalWithinBraintreeEnabled = $settings->enable_paypal_in_bt;
            if($payPalWithinBraintreeEnabled)
            {
                $brainTreeLabel = "Credit Card and PayPal by Braintree";
            }

            $btSettings = DB::table('braintree_settings')->first();
            if(is_null($btSettings))
            {
                abort(403, 'Braintree settings not found!');
            }
            if( $btSettings->braintree_environment == 'sandbox' )
            {
                $gateway = new Braintree\Gateway([
                    'environment' => $btSettings->braintree_environment,
                    'merchantId' => $btSettings->braintree_sandbox_merchant_id,
                    'publicKey' => $btSettings->braintree_sandbox_public_key,
                    'privateKey' => $btSettings->braintree_sandbox_private_key
                ]);
            }
            else
            {
                $gateway = new Braintree\Gateway([
                    'environment' => $btSettings->braintree_environment,
                    'merchantId' => $btSettings->braintree_production_merchant_id,
                    'publicKey' => $btSettings->braintree_production_public_key,
                    'privateKey' => $btSettings->braintree_production_private_key
                ]);
            }

            $btToken = $gateway->ClientToken()->generate();
        }

        $stripePubKey = "";
        if($stripeEnabled)
        {
            $stripeSettings = DB::table('stripe_settings')->first();
            if(is_null($stripeSettings))
            {
                abort(403, 'Stripe settings not found!');
            }
            if($stripeSettings->stripe_environment == "test")
            {
                $stripePubKey = $stripeSettings->stripe_test_publishable_key;
            }
            else
            {
                $stripePubKey = $stripeSettings->stripe_live_publishable_key;
            }
        }


        return view('checkout', compact('course', 'countries', 'email', 'currency',
                                        'braintreeEnabled', 'stripeEnabled', 'payPalSmartEnabled',
                                        'brainTreeLabel', 'btToken', 'stripePubKey', 'currencyTextRaw'));
    }

    public function prePaymentValidation(Request $request, $courseId, $courseSlug)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:191', new OnlyAsciiCharacters],
            'last_name' => ['required', 'string', 'max:191', new OnlyAsciiCharacters],
            'street' => ['required', 'string', 'max:191'],
            'apartment' => ['nullable', 'string', 'max:191'],
            'phone' => ['nullable', 'string', 'max:191'],
            'city' => ['required', 'string', 'max:191'],
            'state' => ['required', 'string', 'exists:states,state_code'],
            'country' => ['required', 'string', 'exists:countries,code'],
            'zip' => ['required', 'string', 'max:150'],
        ]);

        if( $validator->fails() )
        {
            return response()->json($validator->errors());
        }

        $courseToBuy = DB::table('courses')->find($courseId);
        if(is_null($courseToBuy))
        {
            return response()->json(['error' => 'The course does not exist.']);
        }

        if($courseToBuy->slug != $courseSlug)
        {
            return response()->json(['error' => 'Discrepancy in course data.']);
        }

        if($courseToBuy->price != $request->total)
        {
            return response()->json(['error' => 'Price discrepancy.']);
        }

        return response()->json(['successful_validation' => 'success']);
    }

    public function fulfillOrder(Request $request)
    {
        $user = Auth::user();
        if( is_null($user) )
        {
          return redirect()->back()->withInput()->with('failureMsg', 'Payment received but logged-in user not found!');
        }

        $course = DB::table('courses')->find($request->course);
        if(is_null($course))
        {
            return redirect()->back()->withInput()->with('failureMsg', 'Payment received but the course has not been found!');
        }

        $transactionId = $request->transaction_id;
        $orderData = array();
        OrderDataHelper::getOrderData($orderData, $request, $user, $course->title, $transactionId);
        $order = new Order;
        foreach($orderData as $key => $orderValue)
        {
            $order->$key = $orderData[$key];
        }
        $order->save();

        $userCourse = DB::table('user_courses')->where('user_id', $user->id)->where('course_id', $course->id)->first();
        if(is_null($userCourse))
        {
            $newUserCourse = new UserCourse;
            $newUserCourse->user_id = $user->id;
            $newUserCourse->course_id = $course->id;
            $newUserCourse->save();
        }

        return redirect()->route('thanks');
    }

    public function showThanks() {
        return view('thank-you');
    }
}
