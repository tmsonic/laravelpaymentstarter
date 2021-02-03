<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout\Currency;
use App\Models\Setting\Setting;
use Illuminate\Support\Facades\Validator;
use App\Helpers\PaymentGatewayBladeCreationHelper;

class SettingsController extends Controller
{
    public function index()
    {
        $meta_title = "Payment Settings";
        $settings = Setting::first();
        $currencies = Currency::orderBy('name', 'ASC')->get();
        return view('admin.settings', compact('meta_title', 'settings', 'currencies'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'currency' => ['required', 'string', 'exists:currencies,name'],
            'use_integer_prices' => ['required', 'boolean'],
            'use_currency_symbol' => ['required', 'boolean'],
            'comma_is_decimal_separator' => ['required', 'boolean'],
            'enable_braintree' => ['required', 'boolean'],
            'enable_paypal_in_bt' => ['required', 'boolean'],
            'enable_stripe' => ['required', 'boolean'],
            'enable_paypal_smart' => ['required', 'boolean'],
            'enable_pp_smart_card' => ['required', 'boolean'],
            'enable_pp_smart_credit' => ['required', 'boolean'],
            'enable_pp_smart_bancontact' => ['required', 'boolean'],
            'enable_pp_smart_blik' => ['required', 'boolean'],
            'enable_pp_smart_eps' => ['required', 'boolean'],
            'enable_pp_smart_giropay' => ['required', 'boolean'],
            'enable_pp_smart_ideal' => ['required', 'boolean'],
            'enable_pp_smart_mercadopago' => ['required', 'boolean'],
            'enable_pp_smart_mybank' => ['required', 'boolean'],
            'enable_pp_smart_p24' => ['required', 'boolean'],
            'enable_pp_smart_sepa' => ['required', 'boolean'],
            'enable_pp_smart_sofort' => ['required', 'boolean'],
            'enable_pp_smart_venmo' => ['required', 'boolean'],
        ]);

        if( $validator->fails() )
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if( ($request->enable_braintree) && ($request->enable_paypal_in_bt) && ($request->enable_paypal_smart) )
        {
            return redirect()->back()->withInput()->with('failureMsg', 'The PayPal Smart Buttons cannot be enabled if PayPal is also enabled within Braintree!');
        }

        if( (!$request->enable_braintree) && (!$request->enable_stripe) && (!$request->enable_paypal_smart) )
        {
            return redirect()->back()->withInput()->with('failureMsg', 'At least one payment gateway must be enabled!');
        }

        $settings = Setting::first();
        if(is_null($settings))
        {
            abort(403, 'Settings not found!');
        }

        $settings->fill($request->all());
        $settings->save();

        if($request->enable_braintree)
        {
            PaymentGatewayBladeCreationHelper::createBraintreeBladeFile($request->enable_paypal_in_bt);
        }

        if($request->enable_paypal_smart)
        {
            PaymentGatewayBladeCreationHelper::createPaypalSmartBladeFile();
        }

        return redirect()->back()->with('successMsg', 'The Payment Management Settings have been successfully updated!');
    }
}
