<?php

namespace App\Helpers;

use App\Models\Setting\Setting;
use App\Models\Checkout\Currency;

class CurrencyHelper
{
    public static function getSetPriceFormat($priceWithTwoDecimals)
    {
        $settings = Setting::first();
        $isCommaTheDecimalSeparator = $settings->comma_is_decimal_separator;
        $isIntegerPriceUsed = $settings->use_integer_prices;

        $priceStringToReturn = $priceWithTwoDecimals;
        if( ($isIntegerPriceUsed) && ($priceWithTwoDecimals < 1000) )
        {
            return intval($priceStringToReturn);
        }

        if( (!$isIntegerPriceUsed) && ($priceWithTwoDecimals < 1000) )
        {
            $priceString = strval($priceWithTwoDecimals);
            if($isCommaTheDecimalSeparator)
            {
                return str_replace('.', ',', $priceString);
            }
            else
            {
                return $priceStringToReturn;
            }
        }

        if( ($isIntegerPriceUsed) && ($priceWithTwoDecimals >= 1000) )
        {
            $priceString = strval(intval($priceStringToReturn));
            if($isCommaTheDecimalSeparator)
            {
                return number_format($priceString, null, null, '.');
            }
            else
            {
                return number_format($priceString, null, null, ',');
            }
        }

        if( (!$isIntegerPriceUsed) && ($priceWithTwoDecimals >= 1000) )
        {
            $priceStringWithTwoDecimals = strval($priceWithTwoDecimals);
            $positionOfPeriod = strpos($priceStringWithTwoDecimals, '.');
            $priceStringInt = substr($priceStringWithTwoDecimals, 0, $positionOfPeriod);
            $decimalsString = substr($priceStringWithTwoDecimals, $positionOfPeriod + 1);

            if($isCommaTheDecimalSeparator)
            {
                $separatedPriceInt = number_format($priceStringInt, null, null, '.');
                return $separatedPriceInt . ',' . $decimalsString;
            }
            else
            {
                $separatedPriceInt = number_format($priceStringInt, null, null, ',');
                return $separatedPriceInt . '.' . $decimalsString;
            }
        }

        return $priceStringToReturn;
    }

    public static function getCurrencyString()
    {
        $settings = Setting::first();
        $currencyText = $settings->currency;
        $adjustedCurrencyText = $currencyText . ' ';
        if( $settings->use_currency_symbol == 1 )
        {
            if( $currencyText == 'USD' || $currencyText == 'EUR' || $currencyText == 'GBP'  )
            {
                $currencyData = Currency::where('name', $currencyText)->first();
                if( !is_null($currencyData) )
                {
                    $adjustedCurrencyText = $currencyData->symbol;
                }
            }
        }

        return $adjustedCurrencyText;
    }
}
