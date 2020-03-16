<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CorporateAttendance extends Model
{
    //
     //
     protected $fillable = ['paymentcorporate_id','customer_id'];

    use SoftDeletes;
}
