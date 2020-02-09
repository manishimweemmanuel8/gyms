<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class commited extends Model
{
    //
     protected $fillable = ['id','firstName','lastName','gender','phone','email','discount','dob'];
    use SoftDeletes;
}
