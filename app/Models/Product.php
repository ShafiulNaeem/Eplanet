<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function admin()
    {
        return $this->belongsTo('App\Models\Admin');
    }

    public function productImages()
    {
        return $this->hasMany('App\Models\ProductImage','product_id','id');
    }
    public function productVideos()
    {
        return $this->hasMany('App\Models\ProductVideo','product_id','id');
    }
    public function subcategory()
    {
        return $this->belongsTo('App\Models\SubCategory');
    }

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }

    public function orders()
    {
        return $this->hasMany('App\Models\Order','product_id');
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeAdminProduct($query)
    {
        return $query->where('admin_id', Auth::guard('admin')->user()->id);
    }


    public function scopeWithoutAdminProduct($query)
    {
        return $query->where('admin_id', '!=',Auth::guard('admin')->user()->id);
    }


    public function scopeGetActive($query)
    {
        return $query->where('status', 1);
    }
}
