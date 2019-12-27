<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Attendance;
use App\Price;
use App\Membership;


class Sport extends Model
{
    // use selfDeletes;

    public function attendance(){
    	return $this->hasMany(Attendance::class);
    }
    public function price(){
    	return $this->hasMany(Price::class);
    }
    public function membership(){
    	return $this->hasOne(Membership::class);
    }

}
