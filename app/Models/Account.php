<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    use HasFactory;
    public function role(){
        return $this->belongsTo(Role::class, 'role_id');
    }
    public function gender(){
        return $this->belongsTo(Gender::class, 'gender_id');
    }
    public function order(){
    	return $this->hasMany(Order::class, 'account_id');
    }
}
