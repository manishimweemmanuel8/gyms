<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input; 
use DB;
use App\Attendance;

use Illuminate\Http\Request;

class apicorporate extends Controller
{
    //
    public function customer(){

    	$id=Input::get('id');
    	return $customers=DB::table('customers')->where('entitie_id',$id)->get();

    }

    public function sport(){
    	$id=Input::get('id');
    	$sport_id=DB::table('payments')->where('customer_id',$id)->value('sport_id');
    	return $sport=DB::table('sports')->where('id',$sport_id)->get();
    }

   public function corporateCustomer(){
   $payment=Input::get('payment');

       $entitie_id=DB::table('customers')->where('id', $payment)
                    ->value("entitie_id");


            $todayDate = date("Y-m-d");
            $client = DB::table('payments')->where('customer_id', $entitie_id)
                    ->where('expiry_date', '>=', $todayDate)
                    ;

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
                            ->value('sport_id'),
                        'membership_id' => DB::table('payments')->where('customer_id', $entitie_id)
                            ->where('expiry_date', '>=', $todayDate)
                            ->value('membership_id'),

                        'category_id' => DB::table('payments')->where('customer_id', $entitie_id)
                            ->where('expiry_date', '>=', $todayDate)
                            ->value('categorie_id'),
                        'payment_id' => DB::table('payments')->where('customer_id', $entitie_id)
                           ->where('expiry_date', '>=', $todayDate)
                            ->value('id'),
                    ]);
                   

               // $data['customer_id']="client pass";
               $sport_id = DB::table('payments')->where('customer_id', $entitie_id)->value("sport_id");

            
                  return response()
                ->json(
                    [
                      
                      
                        	// 'category' => $payment->categorie->name,
                            'sport' => DB::table('sports')->where('id',$sport_id)->value('name'),
                         //    'membership' => $payment->membership->name,
                            'name' => DB::table('customers')->where('id',$payment)->value('firstName'),
                            'expiration date' =>DB::table('payments')->where('customer_id',$entitie_id)->value('expiry_date')
                  
                        
                    ]
                );
                                            
                }
            }
            else{
            
                 $data['customer_id']="client not allow";
                    return response()->json([$data]);


                }

                    
                


}
}
