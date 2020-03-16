<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Corporate extends Model
{
    //
      protected $fillable = ['name','email','representative'];

    use SoftDeletes;
}

