<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Payment;
use App\Sport;
use App\Membership;


class Price extends Model
{
    //
    use SoftDeletes;
    public function payment(){
    	return $this->belongsTo(Payment::class);
    }

    public function sport(){
    	return $this->belongsTo(Sport::class);
    }
    public function membership(){
    	return $this->belongsTo(Membership::class);
    }

}
