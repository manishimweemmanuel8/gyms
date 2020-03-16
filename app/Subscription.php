<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends Model
{
    //
    protected $fillable = ['name','amount','representative'];

    use SoftDeletes;
}
