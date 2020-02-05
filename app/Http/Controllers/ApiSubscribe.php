<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;
use App\Customer;
use App\Payment; 
use App\Control;
use App\Receptionist;
use App\Http\Resources\PaymentResource;
use DB;
use Illuminate\Support\Facades\Input; 
use App\Http\Requests\RegisterAuthRequest;
use Response;
class ApiSubscribe extends Controller
{
    //
    public function getCustomer(){
   $payment=Input::get('payment');
   $post=Input::get('sport_id');

       $entitie_id=DB::table('customers')->where('id', $payment)
                    ->value("entitie_id");

                    if ($entitie_id==1) {
                        # code...
              $todayDate = date("Y-m-d");
            $client = Payment::
            		where('customer_id', $payment)
                    ->where('expiry_date', '>=', $todayDate)
                    ->where('location',$post)
                   ->value("id");

                    if($client){

                    $attend = DB::table('attendances')
                    ->where('created_at', $todayDate)
                    ->where('payment_id', $client)
                    ->value("payment_id");

                if ($attend) {
                    $data['customer_id']="client attend";
                    return response()->json([$data]);
                } else {
                    Attendance::create([
                        'customer_id' => $payment,
                        'controller_id' => 1,
                        'sport_id' => DB::table('payments')->where('customer_id', $payment)
                            ->where('expiry_date', '>=', $todayDate)
                            ->where('location', $post)
                            ->value('sport_id'),
                        'membership_id' => DB::table('payments')->where('customer_id', $payment)
                            ->where('expiry_date', '>=', $todayDate)
                            ->where('location', $post)
                            ->value('membership_id'),

                        'category_id' => DB::table('payments')->where('customer_id', $payment)
                            ->where('expiry_date', '>=', $todayDate)
                            ->where('location', $post)
                            ->value('categorie_id'),
                        'payment_id' => DB::table('payments')->where('customer_id', $payment)
                            ->where('expiry_date', '>=', $todayDate)
                            ->where('location', $post)
                            ->value('id'),
                    ]);
                   
                   

               $data['customer_id']="client pass";
                    return response()->json([$data]);
                                            
                }
            }
            else{
               
                 $data['customer_id']="client not allowed";
                    return response()->json([$data]);

                }

                    }else{

            $todayDate = date("Y-m-d");
            $client = DB::table('payments')->where('customer_id', $entitie_id)
                    ->where('expiry_date', '>=', $todayDate)
                    ->where('location', $post)->value("id");

                    if($client){

                    $attend = DB::table('attendances')
                    ->where('created_at', $todayDate)
                    ->where('customer_id', $payment)
                    ->value("id");

                if ($attend) {
                    $data['customer_id']="client attend";
                    return response()->json([$data]);
                } else{
                    Attendance::create([
                        'customer_id' => $payment,
                        'controller_id' => 1,
                        'sport_id' => DB::table('payments')->where('customer_id', $entitie_id)
                            ->where('expiry_date', '>=', $todayDate)
                            ->where('location', $post)
                            ->value('sport_id'),
                        'membership_id' => DB::table('payments')->where('customer_id', $entitie_id)
                            ->where('expiry_date', '>=', $todayDate)
                            ->where('location', $post)
                            ->value('membership_id'),

                        'category_id' => DB::table('payments')->where('customer_id', $entitie_id)
                            ->where('expiry_date', '>=', $todayDate)
                            ->where('location', $post)
                            ->value('categorie_id'),
                        'payment_id' => DB::table('payments')->where('customer_id', $entitie_id)
                           ->where('expiry_date', '>=', $todayDate)
                            ->where('location', $post)
                            ->value('id'),
                    ]);
                   
                   

               $data['customer_id']="client pass";
                return response()->json([$data]);
                                            
                }
            }
            else{
            
                 $data['customer_id']="client not allow";
                    return response()->json([$data]);


                }

                    }
                


}
}