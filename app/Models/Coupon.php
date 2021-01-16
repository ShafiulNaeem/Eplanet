<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Coupon extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function scopeCouponWithAdminOwner($query)
    {
        return $query->where('admin_id', Auth::guard('admin')->id());
    }


    public function scopeCouponWithOutAdminOwner($query)
    {
        return $query->where('admin_id', '!=',Auth::guard('admin')->user()->id);
    }

    public function scopeGetActive($query)
    {
        return $query->where('status', 1);
    }
}
