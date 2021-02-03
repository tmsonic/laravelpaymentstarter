<?php

namespace App\Helpers;

use DB;

class AmountConverterHelper
{
    public static function getStripeAmountBasedOnCurrency($currency, $amount)
    {
        // https://stripe.com/docs/currencies#:~:text=Stripe%20supports%20processing%20payments%20in,native%20currency%20can%20increase%20sales.
        $zeroDecimalCurrencies = array('BIF' => 1, 'CLP' => 1, 'DJF' => 1, 'GNF' => 1, 'JPY' => 1,
                                       'KMF' => 1, 'KRW' => 1, 'MGA' => 1, 'PYG' => 1, 'RWF' => 1,
                                       'VND' => 1, 'VUV' => 1, 'XAF' => 1, 'XOF' => 1, 'XPF' => 1);

        if( array_key_exists($currency, $zeroDecimalCurrencies) )
        {
            return intval($amount);
        }
        else
        {
            return ($amount * 100);
        }
    }

    public static function getBraintreeAmountBasedOnCurrency($amount)
    {
        $settings = DB::table('settings')->first();

        $currency = $settings->currency;
        // https://developers.braintreepayments.com/reference/general/currencies
        $zeroDecimalCurrencies = array('BIF' => 1, 'CLP' => 1, 'DJF' => 1, 'GNF' => 1, 'JPY' => 1,
                                       'KMF' => 1, 'KRW' => 1, 'LAO' => 1, 'PYG' => 1, 'RWF' => 1,
                                       'UGX' => 1, 'VND' => 1, 'VUV' => 1, 'XAF' => 1, 'XOF' => 1,
                                       'XPF' => 1);

        if( array_key_exists($currency, $zeroDecimalCurrencies) )
        {
            return intval($amount);
        }
        else
        {
            return $amount;
        }
    }
}
