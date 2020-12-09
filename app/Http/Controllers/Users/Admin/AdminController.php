<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use function PHPUnit\Framework\exactly;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $from = date('Y-m-d', strtotime('-7 days'));
        $pastMonth = date('Y-m-d', strtotime('-30 days'));
        $today = date('Y-m-d');
        $allOrders = Order::with('products')->whereBetween('created_at', [$from, $today])->get();

        $totalSale = 0;
        foreach ($allOrders as $allOrder){
            $totalSale += $allOrder->quantity * $allOrder->products[0]->product_price;
        }

        $data = [
            'allUsers' => User::all(),
            'allVendors' => Admin::all(),
            'totalWeekSale' => $totalSale,
            'usersThisMonth' => User::whereBetween('created_at', [$pastMonth, $today])->get()
        ];
        return view('admin.admin', $data);
    }
}
