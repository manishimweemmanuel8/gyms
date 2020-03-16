<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PaymentCorporate extends Model
{
    //
    protected $fillable = ['corporate_id','month','amount','expirydate'];

    use SoftDeletes; 

}
