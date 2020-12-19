<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class SubCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'sub_categories';

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'sub_categories_id');
    }

    public function scopeSubCategoryWithAdminOwner($query)
    {
        return $query->where('admin_id', Auth::guard('admin')->user()->id);
    }

    public function scopeSubCategoryWithOutAdminOwner($query)
    {
        return $query->where('admin_id', '!=',Auth::guard('admin')->user()->id);
    }

    //status check
    public function scopeGetActive($query)
    {
        return $query->where('status', 1);
    }

    public function productWithStatus()
    {
        return $this->products()->where([
            'status' => 1
        ])
            ->orderBy('created_at', 'DESC');
    }


}
