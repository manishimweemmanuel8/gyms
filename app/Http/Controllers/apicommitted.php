<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 
use DB;
use App\Attendance;

class apicommitted extends Controller
{

    public function sport(){
    	$id=Input::get('id');
    	$sport_id=DB::table('payments')->where('customer_id',$id)->value('sport_id');
    	return $sport=DB::table('sports')->where('id',$sport_id)->get();
    }

   public function committedCustomer(){
   $card_code=Input::get('card_code');
   $payment=DB::table('commiteds')->where('card_code',$card_code)->value('id');
   if ($payment) {
       # code...
    $sport_id = DB::table('payments')->where('customer_id', $payment)->value("sport_id");

       // $entitie_id=DB::table('customers')->where('id', $payment)
       //              ->value("entitie_id");


            $todayDate = date("Y-m-d");
            $payment_id = DB::table('payments')->where('customer_id', $payment)
                    ->where('expiry_date', '>=', $todayDate)->value('id');
                    

                    if($payment_id){


                    $attend = DB::table('attendances')
                    ->where('created_at', $todayDate)
                    ->where('payment_id', $payment_id)
                    ->value("id");

                if ($attend) {
                    return response()
                ->json(
                    [
                      
                      
                            // 'category' => $payment->categorie->name,
                            'sport' => DB::table('sports')->where('id',$sport_id)->value('name'),
                         //    'membership' => $payment->membership->name,
                            'name' => DB::table('commiteds')->where('id',$payment)->value('firstName'),
                            'expiration date' =>DB::table('payments')->where('customer_id',$payment)->value('expiry_date'),
                            'message'=> 'you are already attended'
                  
                        
                    ]
                );
                } else{
                    Attendance::create([
                        'customer_id' => $payment,
                        'controller_id' => 1,
                        'sport_id' => DB::table('payments')->where('customer_id', $payment)
                            ->where('expiry_date', '>=', $todayDate)
                            ->value('sport_id'),
                        'membership_id' => DB::table('payments')->where('customer_id', $payment)
                            ->where('expiry_date', '>=', $todayDate)
                            ->value('membership_id'),

                        'category_id' => DB::table('payments')->where('customer_id', $payment)
                            ->where('expiry_date', '>=', $todayDate)
                            ->value('categorie_id'),
                        'payment_id' => DB::table('payments')->where('customer_id', $payment)
                           ->where('expiry_date', '>=', $todayDate)
                            ->value('id'),
                    ]);
                   

               // $data['customer_id']="client pass";
               

            
                  return response()
                ->json(
                    [
                      
                      
                            // 'category' => $payment->categorie->name,
                            'sport' => DB::table('sports')->where('id',$sport_id)->value('name'),
                         //    'membership' => $payment->membership->name,
                            'name' => DB::table('commiteds')->where('id',$payment)->value('firstName'),
                            'expiration date' =>DB::table('payments')->where('customer_id',$payment)->value('expiry_date'),
                            'message'=> 'you allow to attend'
                  
                        
                    ]
                );
                                            
                }
            }
            else{
            
                 $data['customer_id']="client not allow";
                    return response()->json([$data]);


                }

                    
   }else{
      $data['customer_id']="Invalid card_code on committed";
      return response()->json([$data]);
    
   }

   
}
}


