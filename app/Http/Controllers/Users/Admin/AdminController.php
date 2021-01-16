<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\ExpressWish;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use function PHPUnit\Framework\exactly;
use App\Helper\DeleteFile;

class AdminController extends Controller
{
    use DeleteFile;
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


    public function expressWish()
    {
        $expresswishes = ExpressWish::with(['user','product'])->get();
        //dd($expresswishes);
        return view('admin.expressWish.express',compact('expresswishes'));
    }

    public function destroy(ExpressWish $expressWish)
    {
        $expressWish->delete();
        return redirect()->back();
    }

    public function allVendor(){
        $vendors = Admin::with('orders')->get();
      // dd($vendors);
        return view('admin.vendor.manage',compact('vendors'));
    }

    // Vendor status
    public function change(Request $request)
    {
        if( self::changeStatus($request->status, 'App\Models\Admin', $request->id) )
            return redirect()->back()->with('success', 'Status Changes');
        return  redirect()->back()->with('error', 'Something went wrong');
    }

    // salesReport
//    public function sales()
//    {
//        return view('admin.sales.sales');
//    }
//
//    public function salesReport(Request $request)
//    {
//        //dd($request->all());
//        $request->to_date = date('Y-m-d');
//        $request->from_date = date('Y-m-d');
//        $allOrders = Order::with('products')->whereBetween('created_at', [$request->to_date, $request->from_date])
//            //->where('created_at', 'LIKE','%'.$request->to_date.'%')
//            ->count();
//
//        dd($allOrders);
//    }
}
