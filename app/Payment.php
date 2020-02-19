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
use App\customerSession;
use App\Session;
use App\commited;
use App\Entitie;


class Payment extends Model
{
    protected $fillable = ['customer_id','receptionist_id','categorie_id','sport_id','membership_id','duration','expiry_date','amount','location','client_type','status'];

    use SoftDeletes; 
    public function customer(){
    	return $this->belongsTo(Customer::class);
    }

     public function committed(){
        return $this->belongsTo(commited::class,'customer_id','id');
    }

     public function session(){
        return $this->belongsTo(Session::class,'customer_id','id');
    }

       public function entitie(){
        return $this->belongsTo(Entitie::class,'customer_id','id');
    }

 

    public function sport(){
    	return $this->belongsTo(Sport::class);
    }


    // public function entitie(){
    //     return $this->belongsTo(Entitie::class);
    // }

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
