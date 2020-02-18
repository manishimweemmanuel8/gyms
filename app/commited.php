<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Payment;
use App\Attendance;

class commited extends Model
{
    //
     protected $fillable = ['id','firstName','lastName','gender','phone','email','discount','dob','card_code'];
    use SoftDeletes;

    public function payment(){
    	return $this->hasOne(Payment::class,'id','customer_id');
    } 
    public function attendance(){
        return $this->hasOne(Attendance::class);
    }

}
