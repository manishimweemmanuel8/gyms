<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Attendance;

class Controller extends Model
{
    //
    public function attendance(){
    	return $this->hasMany(Attendance::class);
    }

}
