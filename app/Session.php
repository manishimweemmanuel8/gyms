<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Payment;


class Session extends Model
{
    //
       protected $fillable = ['id','phone'];
    use SoftDeletes;

     public function payment(){
    	return $this->hasOne(Payment::class);
    } 
}
