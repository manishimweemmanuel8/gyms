<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Customer;
use Illuminate\Http\Request;
use App\Payment; 
use App\Http\Resources\PaymentResource;
use Illuminate\Pagination\Paginator;
use DB;
use Illuminate\Support\Facades\Input;

class ApiController extends Controller
{
    //


    public function getCustomer(){
        $payment=Input::get('payment');
        // $ticket=DB::table('payments')->where('customer_id',$payment)
        //     ->where('sport_id',3)
        //     ->where('duration','>',0)
        //     ->whereIn('membership_id',[30,31,32,33])
        //     ->value("id");
            // if($ticket){
            
        
            $todayDate = date("Y-m-d");
            $client = DB::table('payments')->where('customer_id', $payment)
                    ->where('expiry_date', '>=', $todayDate)
                    ->where('sport_id', 3)->value("id");

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
                            ->where('sport_id', 3)
                            ->value('sport_id'),
                        'membership_id' => DB::table('payments')->where('customer_id', $payment)
                            ->where('expiry_date', '>=', $todayDate)
                            ->where('sport_id', 3)
                            ->value('membership_id'),

                        'category_id' => DB::table('payments')->where('customer_id', $payment)
                            ->where('expiry_date', '>=', $todayDate)
                            ->where('sport_id', 3)
                            ->value('categorie_id'),
                        'payment_id' => DB::table('payments')->where('customer_id', $payment)
                            ->where('expiry_date', '>=', $todayDate)
                            ->where('sport_id', 3)
                            ->value('id'),
                    ]);
                   
                   

               $data['customer_id']="client pass";
                    return response()->json([$data]);
                                            
                }
            }
            else{
                //       Attendance::create([
                //     'customer_id' => $payment,
                //     'controller_id' => 1,
                //     'sport_id' => DB::table('payments')->where('customer_id', $payment)
                //         ->where('sport_id', 3)
                //         ->value('sport_id'),
                //     'membership_id' => DB::table('payments')->where('customer_id', $payment)
                //         ->where('sport_id', 3)
                //         ->value('membership_id'),

                //     'category_id' => DB::table('payments')->where('customer_id', $payment)
                //         ->where('sport_id', 3)
                //         ->value('categorie_id'),
                //     'payment_id' => DB::table('payments')->where('customer_id', $payment)
                //         ->where('sport_id', 3)
                //         ->value('id'),
                // ]);
                // DB::table('payments')->where('id',$ticket)
                //     ->decrement('duration');
                //     $data['customer_id']="ticket pass";
                //     return response()->json([$data]);

                 $data['customer_id']="client not allowed";
                    return response()->json([$data]);

                }

                    

                
            

 
    }

    // public function show(Request $request){
    //     $payment=$request->input('customer_id');
    //     $ticket=DB::table('payments')->where('customer_id',$payment)
    //         ->where('sport_id',3)
    //         ->whereIn('membership_id',[30,31,32,33])
    //         ->value('id');

    //     if($ticket){
    //         $duration= DB::table('payments')->where('id', $ticket)
    //             ->value('duration');
    //         if($duration > 0) {

    //             Attendance::create([
    //                 'customer_id' => $payment,
    //                 'controller_id' => 1,
    //                 'sport_id' => DB::table('payments')->where('customer_id', $payment)
    //                     ->where('sport_id', 3)
    //                     ->value('sport_id'),
    //                 'membership_id' => DB::table('payments')->where('customer_id', $payment)
    //                     ->where('sport_id', 3)
    //                     ->value('membership_id'),

    //                 'category_id' => DB::table('payments')->where('customer_id', $payment)
    //                     ->where('sport_id', 3)
    //                     ->value('categorie_id'),
    //                 'payment_id' => DB::table('payments')->where('customer_id', $payment)
    //                     ->where('sport_id', 3)
    //                     ->value('id'),
    //             ]);
    //             DB::table('payments')->where('id',$ticket)
    //                 ->decrement('duration');
    //             $data['status']="ticket pass";
    //             return $data;
    //         }
    //         else{
    //                 $data['status']="ticket fail";
    //                 return $data;
    //         }

    //     }
    //     else{
    //         $todayDate = date("Y-m-d");
    //         $client = DB::table('payments')->where('customer_id', $payment)
    //             ->where('expiry_date', '>=', $todayDate)
    //             ->where('sport_id', 3)->value('id');

    //         if ($client) {
    //             //check if the customer attend multiple time in same date
    //             $attend = DB::table('attendances')
    //                 ->where('created_at', $todayDate)
    //                 ->where('payment_id', $client)
    //                 ->get();
    //             if ($attend) {
    //                 $data['status']="done to attend";
    //                 return $data;

    //             } else {
    //                 Attendance::create([
    //                     'customer_id' => $payment,
    //                     'controller_id' => 1,
    //                     'sport_id' => DB::table('payments')->where('customer_id', $payment)
    //                         ->where('expiry_date', '>=', $todayDate)
    //                         ->where('sport_id', 3)
    //                         ->value('sport_id'),
    //                     'membership_id' => DB::table('payments')->where('customer_id', $payment)
    //                         ->where('expiry_date', '>=', $todayDate)
    //                         ->where('sport_id', 3)
    //                         ->value('membership_id'),

    //                     'category_id' => DB::table('payments')->where('customer_id', $payment)
    //                         ->where('expiry_date', '>=', $todayDate)
    //                         ->where('sport_id', 3)
    //                         ->value('categorie_id'),
    //                     'payment_id' => DB::table('payments')->where('customer_id', $payment)
    //                         ->where('expiry_date', '>=', $todayDate)
    //                         ->where('sport_id', 3)
    //                         ->value('id'),
    //                 ]);

    //             }
    //             $data['status']="pass sub";

    //                 return $data;
    //         } else {
    //             $data['status']="fail sub";

    //                 return $data;
    //         }
    //     }

    // }




    // public function login(Request $request){

    //     $email=$request->input('email');
    //     $password=$request->input('password');
    //     $data=DB::table('controllers')
    //         ->where('email',$email)
    //         ->where('password',$password)->get();
    //     if($data){
    //         return $data;
    //     }else{
    //         return 0;
    //     }
    // }

    // public function session($customer,Request $request){
    //     $todayDate = date("Y-m-d");
    //     $client=DB::table('customers')->where('phone',$customer)->value('phone');
    //     if(!$client){
    //         Customer::create([
    //             'firstName'       => 'client',
    //             'lastName'     => 'client',
    //             'phone'          =>$customer,
    //             'email'     =>'email',
    //             'entitie_id'       =>9,
    //             'dob'        =>'1994-06-28',
    //             'gender'  =>'any',
    //             'entity_representative	'=>'0',
    //         ]);
    //     }

    //     Payment::create([
    //         'customer_id'       =>DB::table('customers')->where('phone',$customer)
    //             ->value('id') ,
    //         'receptionist_id'     => $request->input('receptionist_id'),
    //         'sport_id'          => $request->input('sport_id'),
    //         'membership_id'     =>$request->input('membership_id'),
    //         'categorie_id'       =>$request->input('category_id'),
    //         'amount'        => DB::table("prices")
    //             ->where("sport_id",$request->input('sport_id'))
    //             ->where("membership_id",$request->input('membership_id'))
    //             ->where("categorie_id",$request->input('category_id'))->value("amount"),
    //         'duration'      =>1,
    //         'expiry_date'   =>$todayDate = date("Y-m-d"),
    //     ]);
    //     $mytime = date('Y-m-d H:i:s');
    //     Attendance::create([
    //         'customer_id'       =>DB::table('customers')->where('phone',$customer)
    //                                  ->value('id') ,
    //         'controller_id'     => 1,
    //         'sport_id'          =>$request->input('sport_id') ,
    //         'membership_id'     =>$request->input('membership_id'),
    //         'category_id'       =>$request->input('category_id'),
    //         'payment_id'        =>DB::table('payments')
    //                             ->where('customer_id',DB::table('customers')->where('phone',$customer)
    //                             ->value('id'))
    //                              ->where('created_at',$mytime)
    //                             ->value('id'),
    //     ]);


    //     return response()->json($client);

    // }


}
