<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Entitie;
use App\Payment;
use App\Membership;
use Illuminate\Support\Facades\DB;


class Customer extends Model
{
    protected $fillable = ['id','firstName','lastName','gender','phone','email','entitie_id','dob','entity_representative'];
    use SoftDeletes;

    // public function entity(){
    // 	return $this->hasOne(Entity::class);
    // }
    public function entitie(){
    	return $this->belongsTo(Entitie::class);
    }
    
    public function payment(){
    	return $this->hasOne(Payment::class);
    } 


    public function membership(){
        return $this->belongsTo(Membership::class);
    }

      public function attendance(){
        return $this->hasOne(Attendance::class);
    }

     public static function insertData($data){

      $value=DB::table('customers')->where('phone', $data['phone'])->get();
      if($value->count() == 0){
         DB::table('customers')->insert($data);
      }
   }

}
