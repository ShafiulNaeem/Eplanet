<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductCertification;
use App\Models\ProductQuality;
use App\Models\ProductTradeCapacity;

class VendorProductsController extends Controller
{
    public function topSale()
    {
        $productSales = Admin::with('productsWithSold')->where('role', 2)->get();
        $productTops = Admin::with('productsWithTop')->where('role', 2)->get();

        //dd($productTops);
        return view('pages.vendor_home',compact('productSales','productTops'));
    }

    public function overview()
    {
        $ProductTradeCapacity = ProductTradeCapacity::orderBy('id','desc')->get();
        $ProductQualitys = ProductQuality::orderBy('id','desc')->get();
        $productcertifications = ProductCertification::orderBy('id','desc')->get();
        return view('pages.shop',compact('productcertifications','ProductQualitys','ProductTradeCapacity'));
    }
}
