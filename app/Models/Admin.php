<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Admin extends Authenticatable
{
    use Notifiable;
    use HasFactory;

    protected $guard = 'admin';

    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    public function scopeThisAdmin($query)
    {
        return $query->where('id', Auth::guard('admin')->user()->id);
    }


    public function scopeExceptThisAdmin($query)
    {
        return $query->where('id', '!=',Auth::guard('admin')->user()->id);
    }
}
