<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
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
}
