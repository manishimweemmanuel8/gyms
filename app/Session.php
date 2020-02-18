<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Payment;
use App\Attendance;


class Session extends Model
{
    //
    protected $fillable = ['id','phone'];
    use SoftDeletes;

    public function payment(){
    	return $this->hasOne(Payment::class,'id','customer_id');
    } 
    public function attendance(){
        return $this->hasOne(Attendance::class);
    }
}
