<?php

namespace App\Helpers;

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Core\ProductionEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
use DB;

class PayPalSdkHelper
{
    public static function client()
    {
        return new PayPalHttpClient(self::environment());
    }

    public static function environment()
    {
        $payPalSettings = DB::table('pay_pal_settings')->first();
        if(is_null($payPalSettings))
        {
            return null;
        }

        $clientId = '';
        $clientSecret = '';
        if($payPalSettings->paypal_smart_environment == 'sandbox')
        {
            $clientId = $payPalSettings->paypal_smart_sandbox_client;
            $clientSecret = $payPalSettings->paypal_smart_sandbox_secret;
            return new SandboxEnvironment($clientId, $clientSecret);
        }
        else
        {
            $clientId = $payPalSettings->paypal_smart_production_client;
            $clientSecret = $payPalSettings->paypal_smart_production_secret;
            return new ProductionEnvironment($clientId, $clientSecret);
        }
    }

    public static function createOrder($setCurrency, $total)
    {
        $request = new OrdersCreateRequest();
        $request->prefer('return=representation');
        $request->body = self::buildRequestBody($setCurrency, $total);

        $client = self::client();
        $response = $client->execute($request);

        return response()->json([$response]);
    }

    private static function buildRequestBody($setCurrency, $total)
    {
        $adjustedTotal = self::adjustPaypalAmount($setCurrency, $total);
        return array(
            'intent' => 'CAPTURE',
            'application_context' =>
                array(
                    'shipping_preference' => 'NO_SHIPPING'
                ),
            'purchase_units' =>
                array(
                    0 =>
                        array(
                            'amount' =>
                                array(
                                    'currency_code' => $setCurrency,
                                    'value' => $adjustedTotal
                                )
                        )
                )
        );
    }

    public static function captureOrder($orderId)
    {
        $request = new OrdersCaptureRequest($orderId);
        $client = self::client();
        $response = $client->execute($request);

        return response()->json([$response]);
    }

    public static function adjustPaypalAmount($paypalCurrency, $amountForPaypal)
    {
        if( ($paypalCurrency == "HUF") || ($paypalCurrency == "JPY") || ($paypalCurrency == "TWD") )
        {
            return intval($amountForPaypal);
        }

        return $amountForPaypal;
    }
}
