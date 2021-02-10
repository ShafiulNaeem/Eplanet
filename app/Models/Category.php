<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Category extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subcategory()
    {
        return $this->hasMany('App\Models\SubCategory');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }


    /**
     * @param $query
     * @return mixed
     */
    public function scopeCategoryWithAdminOwner($query)
    {
        return $query->where('admin_id', Auth::guard('admin')->user()->id);
    }


    /**
     * @param $query
     * @return mixed
     */
    public function scopeCategoryWithOutAdminOwner($query)
    {
        return $query->where('admin_id', '!=',Auth::guard('admin')->user()->id);
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeGetActive($query)
    {
        return $query->where('status', 1);
    }
}
