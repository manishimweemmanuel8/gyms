<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Payment;


class Entitie extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','customer_id','email','expiry_date','
    payment_type','oraganization'];
    
	public function customer(){
		return $this->belongsTo(Customer::class);
	}
	public function customers(){
		return $this->hasMany(Customer::class);
	
	}
	// public function payment(){
 //    	return $this->hasOne(Payment::class);
 //    }
    public function payment(){
    	return $this->hasOne(Payment::class,'id','customer_id');
    } 
    
}
