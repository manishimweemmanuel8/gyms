<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Payment;

class Categorie extends Model
{
    //
    protected $fillable = ['name'];

    public function payment(){
    	return $this->hasOne(Payment::class);
    }
}
