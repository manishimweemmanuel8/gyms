<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Payment extends Model
{
    //
     protected $fillable = ['customer_id','receptionist_id','subscription_id','expirydate','amount'];

    use SoftDeletes; 
}
