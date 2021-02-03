<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Auth;
use App\Helpers\CurrencyHelper;
use App\Models\Order\Order;

class MemberDashboardController extends Controller
{
    public function index()
    {
        $authUser = Auth::user();
        $orders = Order::where('user_id', $authUser->id)->orderBy('id', 'DESC')->paginate(5);
        $currency = CurrencyHelper::getCurrencyString();
        return view('member.dashboard', compact('authUser', 'orders', 'currency'));
    }
}
