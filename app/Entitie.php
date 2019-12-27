<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;


class Entitie extends Model
{
	protected $fillable = ['name'];
	public function customer(){
		return $this->belongsTo(Customer::class);
	}
	public function customers(){
		return $this->hasMany(Customer::class);
	
	}
    
}
