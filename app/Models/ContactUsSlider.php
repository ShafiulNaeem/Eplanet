<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ContactUsSlider extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * @param $query
     * @return mixed
     */

    public function scopeSliderWithAdminOwner($query)
    {
        return $query->where('admin_id', Auth::guard('admin')->user()->id);
    }


    public function scopeSliderWithOutAdminOwner($query)
    {
        return $query->where('admin_id', '!=',Auth::guard('admin')->user()->id);
    }

    public function scopeGetActive($query)
    {
        return $query->where('status', 1);
    }
}
