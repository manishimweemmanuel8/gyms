<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Price;
use App\Customer;
use App\Sport;
use App\Payment;

class Membership extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['id','name','sport_id','duration'];

    public function price(){
    	return $this->hasOne(Price::class);
    }

    public function customer(){
    	return $this->hasOne(Customer::class);
    }
    public function sport(){
    	return $this->belongsTo(Sport::class);
    }
    public function payment(){
    	return $this->hasOne(Payment::class);
    } 

}
