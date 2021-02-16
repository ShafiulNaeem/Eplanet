<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class District extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function scopeAdminDistrict($query)
    {
        return $query->where('admin_id', Auth::guard('admin')->user()->id);
    }


    /**
     * @param $query
     * @return mixed
     */
    public function scopeWithoutAdminDistrict($query)
    {
        return $query->where('admin_id', '!=',Auth::guard('admin')->user()->id);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
