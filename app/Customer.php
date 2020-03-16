<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;


class Customer extends Model
{
    //
     protected $fillable = ['names','cardCode','phone','corporate_id','type'];

    use SoftDeletes; 

    public static function insertData($data){

      $value=DB::table('customers')->where('phone', $data['phone'])->get();
      if($value->count() == 0){
         DB::table('customers')->insert($data);
      }
   }
}
