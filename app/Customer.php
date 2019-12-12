<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Customer extends Model
{
    protected $fillable = ['id','firstName','lastName','phone','email','entitie_id','dob','entity_representative'];

    use SoftDeletes;

}
