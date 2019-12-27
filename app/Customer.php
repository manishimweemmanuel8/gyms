<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Entitie;
use App\Payment;
use App\Membership;


class Customer extends Model
{
    protected $fillable = ['id','firstName','lastName','phone','email','entitie_id','membership_id','dob','entity_representative'];
    use SoftDeletes;

    // public function entity(){
    // 	return $this->hasOne(Entity::class);
    // }
    public function entitie(){
    	return $this->belongsTo(Entitie::class);
    }
    
    public function payment(){
    	return $this->hasOne(Payment::class);
    }

    public function membership(){
        return $this->belongsTo(Membership::class);
    }

}
