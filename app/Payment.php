<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Customer;
use App\Price;
use App\Categorie;
use App\Attendance;
use App\Sport;
use App\Membership;


class Payment extends Model
{
    protected $fillable = ['customer_id','receptionist_id','categorie_id','sport_id','membership_id','duration','expiry_date','amount'];
    use SoftDeletes; 
    public function customer(){
    	return $this->belongsTo(Customer::class);
    }

    public function sport(){
    	return $this->belongsTo(Sport::class);
    }

    public function membership(){
    	return $this->belongsTo(Membership::class);
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
