<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use DB;
use App\Models\PaymentGateway\StripeSetting;
use App\Helpers\AmountConverterHelper;
use \Stripe\Stripe;
use \Stripe\PaymentIntent;

class StripeController extends Controller
{
    public function index()
    {
        $meta_title = "Stripe Settings";
        $stripeSettings = DB::table('stripe_settings')->first();
        if(is_null($stripeSettings))
        {
            abort(403, 'Stripe settings not found!');
        }
        return view('admin.payments.stripe', compact('meta_title', 'stripeSettings'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'stripe_environment' => ['required', Rule::in(['test', 'live'])],
            'stripe_test_publishable_key' => ['nullable', 'string'],
            'stripe_test_secret_key' => ['nullable', 'string'],
            'stripe_live_publishable_key' => ['nullable', 'string'],
            'stripe_live_secret_key' => ['nullable', 'string'],
        ]);

        if( $validator->fails() )
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $stripeSettings = StripeSetting::first();
        if(is_null($stripeSettings))
        {
            abort(403, 'Stripe Settings not found!');
        }

        $stripeSettings->fill($request->all());
        $stripeSettings->save();

        return redirect()->back()->with('successMsg', 'The Stripe Settings have been successfully updated!');
    }

    public function getStripePaymentIntent(Request $request, $paymentIntentId = null)
    {
        $stripeSettings = DB::table('stripe_settings')->first();
        if(is_null($stripeSettings))
        {
            return null;
        }

        if($stripeSettings->stripe_environment == "test")
        {
            Stripe::setApiKey($stripeSettings->stripe_test_secret_key);
        }
        else
        {
            Stripe::setApiKey($stripeSettings->stripe_live_secret_key);
        }

        $intent = null;
        $currencyLowerCase = strtolower($request->currency);
        $adjustedAmount = AmountConverterHelper::getStripeAmountBasedOnCurrency($request->currency, $request->amount);

        if( ($paymentIntentId == "0") || ($paymentIntentId == "") || ($paymentIntentId == null) )
        {
            $intent = PaymentIntent::create([
                'amount' => $adjustedAmount,
                'currency' => $currencyLowerCase,
                'payment_method_types' => ['card'],
            ]);
        }
        else
        {
            $intent = PaymentIntent::retrieve($paymentIntentId);
            PaymentIntent::update($paymentIntentId,
            [
                'amount' => $adjustedAmount,
            ]);
        }

        return $intent;
    }
}
