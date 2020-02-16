<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Payment;

class commited extends Model
{
    //
     protected $fillable = ['id','firstName','lastName','gender','phone','email','discount','dob'];
    use SoftDeletes;

    public function payment(){
    	return $this->hasOne(Payment::class);
    } 

}
