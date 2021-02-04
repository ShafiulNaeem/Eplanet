<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\ContactUsSlider;
use App\Models\Designation;
use App\Models\Employee;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function employeeContact(){
        $employees = Designation::with('employeeWithStatus')->get();
        $sliders = ContactUsSlider::GetActive()->where('for', 0)->get();
        //dd($employees);
        return view('pages.contact2',compact('employees', 'sliders'));
    }

    public function brandShow()
    {
        $brands = Brand::orderBy('created_at','desc')->where('status',1)->get();
        //dd($brands);
        return view('pages.brand',compact('brands'));
    }
}
