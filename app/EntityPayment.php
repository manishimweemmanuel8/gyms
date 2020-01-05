<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EntityPayment extends Model
{
    //
        protected $fillable = ['id','entity_id','receptionist_id','sport_id','membership_id','customer_list_id'];
        use SoftDeletes;

}
