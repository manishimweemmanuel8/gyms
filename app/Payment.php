<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Customer;
use App\Price;
use App\Categorie;
use App\Attendance;


class Payment extends Model
{
    protected $fillable = ['customer_id','receptionist_id','category_id','sport_id','membership_id','price_id'];
    use SoftDeletes; 
    public function customer(){
    	return $this->belongsTo(Customer::class);
    }
    public function receptionist(){
    	return $this->belongsTo(Receptionist::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    public function price(){
    	return $this->hasMany(Price::class);
    }

    public function attendance(){
        return $this->hasOne(Attendance::class);
    }
}
