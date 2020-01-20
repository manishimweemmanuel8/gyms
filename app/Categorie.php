<?php

namespace App;

use App\Payment;
use App\Sport;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //
    protected $fillable = ['name'];

    public function payment(){
    	return $this->hasOne(Payment::class);
    }

    public function sport(){
        return $this->hasOne(Sport::class);

    }

    public function price(){
        return $this->hasOne(Price::class);

    }
}
