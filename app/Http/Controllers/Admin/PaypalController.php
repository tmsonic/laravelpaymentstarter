<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use DB;
use App\Models\PaymentGateway\PayPalSetting;

class PaypalController extends Controller
{
    public function index()
    {
        $meta_title = "PayPal Settings";
        $paypalSettings = DB::table('pay_pal_settings')->first();
        if(is_null($paypalSettings))
        {
            abort(403, 'PayPal settings not found!');
        }
        return view('admin.payments.paypal', compact('meta_title', 'paypalSettings'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'paypal_smart_environment' => ['required', Rule::in(['sandbox', 'production'])],
            'paypal_smart_sandbox_client' => ['nullable', 'string'],
            'paypal_smart_production_client' => ['nullable', 'string'],
            'paypal_smart_sandbox_secret' => ['nullable', 'string'],
            'paypal_smart_production_secret' => ['nullable', 'string'],
        ]);

        if( $validator->fails() )
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $paypalSettings = PayPalSetting::first();
        if(is_null($paypalSettings))
        {
            abort(403, 'PayPal Settings not found!');
        }

        $paypalSettings->fill($request->all());
        $paypalSettings->save();

        return redirect()->back()->with('successMsg', 'The PayPal Settings have been successfully updated!');
    }
}
