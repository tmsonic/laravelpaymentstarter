<?php

namespace App\Helpers;

use DB;

class PaymentGatewayBladeCreationHelper
{
    public static function createBraintreeBladeFile($isPayPalEnabled)
    {
        $paymentGatewayPath = 'resources/views/js-for-views/payment-gateway-js/';
        $brainTreeTemplate = file_get_contents($paymentGatewayPath . 'templates/braintree-js-template.blade.php');
        if($isPayPalEnabled)
        {
            $brainTreeTemplate = str_replace("|paypal-placeholder|", "paypal: { flow: 'vault' }", $brainTreeTemplate);
        }
        else
        {
            $brainTreeTemplate = str_replace("|paypal-placeholder|", "", $brainTreeTemplate);
        }

        $braintreeBlade = fopen(base_path($paymentGatewayPath . 'braintree-js.blade.php' ), 'w');
        fwrite($braintreeBlade, $brainTreeTemplate);
        fclose($braintreeBlade);
    }
    public static function createPaypalSmartBladeFile()
    {
        $settings = DB::table('settings')->first();
        if(is_null($settings))
        {
            return;
        }

        $payPalSettings = DB::table('pay_pal_settings')->first();

        if($payPalSettings->paypal_smart_environment == 'sandbox')
        {
            $payPalClientId = $payPalSettings->paypal_smart_sandbox_client;
        }
        elseif($payPalSettings->paypal_smart_environment == 'production')
        {
            $payPalClientId = $payPalSettings->paypal_smart_production_client;
        }
        else
        {
            return;
        }

        $disabledOptionsString = self::getDisabledOptionsString($settings);

        $payPalPath = 'resources/views/js-for-views/payment-gateway-js/';

        $payPalTemplate = file_get_contents($payPalPath . 'templates/paypal-smart-js-template.blade.php');
        $payPalTemplate = str_replace("|paypal-client-id|", $payPalClientId, $payPalTemplate);
        $payPalTemplate = str_replace("|currency|", $settings->currency, $payPalTemplate);
        $payPalTemplate = str_replace("|paypal-disabled-options|", $disabledOptionsString, $payPalTemplate);

        $paypalBlade = fopen(base_path($payPalPath . 'paypal-smart-js.blade.php' ), 'w');
        fwrite($paypalBlade, $payPalTemplate);
        fclose($paypalBlade);
    }

    public static function getDisabledOptionsString($settings)
    {
        $disabledOptionsArray = array('card' => $settings->enable_pp_smart_card,
                                      'credit' => $settings->enable_pp_smart_credit,
                                      'bancontact' => $settings->enable_pp_smart_bancontact,
                                      'blik' => $settings->enable_pp_smart_blik,
                                      'eps' => $settings->enable_pp_smart_eps,
                                      'giropay' => $settings->enable_pp_smart_giropay,
                                      'ideal' => $settings->enable_pp_smart_ideal,
                                      'mercadopago' => $settings->enable_pp_smart_mercadopago,
                                      'mybank' => $settings->enable_pp_smart_mybank,
                                      'p24' => $settings->enable_pp_smart_p24,
                                      'sepa' => $settings->enable_pp_smart_sepa,
                                      'sofort' => $settings->enable_pp_smart_sofort,
                                      'venmo' => $settings->enable_pp_smart_venmo
                                    );

        $isAnythingDisabled = false;
        foreach($disabledOptionsArray as $key => $value)
        {
            if($value == 0)
            {
                $isAnythingDisabled = true;
                break;
            }
        }

        $returnString = "";
        if($isAnythingDisabled)
        {
            $returnString .= "&disable-funding=";
            foreach($disabledOptionsArray as $key => $value)
            {
                if($value == 0)
                {
                    $returnString .= $key . ",";
                }
            }
            $returnString = substr($returnString, 0, -1);
        }

        return $returnString;
    }
}
