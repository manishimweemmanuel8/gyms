<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Attendance;
use App\Price;
use App\Membership;
use App\Payment;


class Sport extends Model
{
//    use selfDeletes;
    protected $fillable = ['id','name','category_id'];


    public function attendance(){
    	return $this->hasMany(Attendance::class);
    }
    public function price(){
    	return $this->hasMany(Price::class);
    }
    public function membership(){
    	return $this->hasOne(Membership::class);
    }

    public function payment(){
    	return $this->hasOne(Payment::class);
    }

}
