<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Brand extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }


    public function scopeBrandWithAdminOwner($query)
    {
        return $query->where('admin_id', Auth::guard('admin')->user()->id);
    }


    public function scopeBrandWithOutAdminOwner($query)
    {
        return $query->where('admin_id', '!=',Auth::guard('admin')->user()->id);
    }
}
