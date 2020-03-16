<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Attendance extends Model
{
    //
     protected $fillable = ['payment_id','customer_id'];

    use SoftDeletes; 
}
