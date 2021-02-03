<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order\Order;
use App\Helpers\CurrencyHelper;
use App\Models\UserCourse\UserCourse;

class OrdersController extends Controller
{
    public function index()
    {
        $meta_title = "Order Management";
        $orders = Order::orderBy('id', 'DESC')->paginate(5);
        $currency = CurrencyHelper::getCurrencyString();
        return view('admin.orders', compact('meta_title', 'orders', 'currency'));
    }

    public function destroy(Request $request, $orderId)
    {
        $order = Order::find($orderId);
        if(is_null($order))
        {
            return redirect()->route('admin.orders')->with('failureMsg', 'The Order with the following id could NOT be deleted: ' . $orderId);
        }

        $userCourses = UserCourse::where('user_id', $order->user_id)->where('course_id', $order->purchased_course_id)->get();
        foreach($userCourses as $item)
        {
            $item->delete();
        }

        $order->delete();

        return redirect()->route('admin.orders')->with('successMsg', 'The Order with the following id has been successfully deleted: ' . $orderId);
    }
}
