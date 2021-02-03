<?php

namespace App\Helpers;

class OrderDataHelper
{
    public static function getOrderData(&$dataArray, &$requestObj, &$authUser, $courseTitle, $transactionId)
    {
        $dataArray["user_id"] = $authUser->id;
        $dataArray["customer_name"] = $requestObj->first_name . " " . $requestObj->last_name;
        $dataArray["user_email"] = $authUser->email;
        $dataArray["price"] = $requestObj->total;
        $dataArray["purchased_course_id"] = $requestObj->course;
        $dataArray["purchased_course_title"] = $courseTitle;
        $dataArray["transaction_id"] = $transactionId;
        $dataArray["customer_street"] = $requestObj->street;
        $dataArray["customer_city"] = $requestObj->city;
        $dataArray["customer_zip"] = $requestObj->zip;
        $dataArray["customer_country"] = $requestObj->country;
        $dataArray["customer_apartment"] = $requestObj->apartment;
        $dataArray["customer_state"] = $requestObj->state;
        $dataArray["customer_phone"] = $requestObj->phone;
    }
}
