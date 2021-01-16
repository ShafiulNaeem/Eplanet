<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class SecondarySubCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * @param $query
     * @return mixed
     */
    public function scopeSecondarySubCategoryWithAdminOwner($query)
    {
        return $query->where('admin_id', Auth::guard('admin')->id());
    }


    /**
     * @param $query
     * @return mixed
     */
    public function scopeSecondarySubCategoryWithOutAdminOwner($query)
    {
        return $query->where('admin_id','!=' ,Auth::guard('admin')->id());
    }
}
