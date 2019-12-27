<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Sport;
use App\Controller;
use App\Payment;


class Attendance extends Model
{
	protected $fillable = ['id','customer_id','controller_id','sport_id','membership_id','category_id'];   
    public function sport(){
    	return $this->belongsTo(Sport::class);
    }

    public function controller(){
    	return $this->belongsTo(Controller::class);
    }

    public function payment(){
    	return $this->belongsTo(Payment::class);
    }

}
