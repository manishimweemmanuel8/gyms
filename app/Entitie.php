<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;
use Illuminate\Database\Eloquent\SoftDeletes;


class Entitie extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','customer_id','email'];
	public function customer(){
		return $this->belongsTo(Customer::class);
	}
	public function customers(){
		return $this->hasMany(Customer::class);
	
	}
    
}
