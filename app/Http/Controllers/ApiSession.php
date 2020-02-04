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

class ApiSession extends Controller
{
    //
    public function session(){
    $customer=Input::get('phone');
    $category=Input::get('category_id');
    $sport=Input::get('sport_id');
    $membership=Input::get('membership_id');
    $receptionist=Input::get('id');
       

        $todayDate = date("Y-m-d");
        $client=DB::table('customers')->where('phone',$customer)->value('phone');
        if(!$client){
            Customer::create([
                'firstName'       => 'client',
                'lastName'     => 'client',
                'phone'          =>$customer,
                'email'     =>'email',
                'entitie_id'       =>1,
                'dob'        =>'1994-06-28',
                'gender'  =>'any',
                'entity_representative  '=>'0',
            ]);

            Payment::create([
            'customer_id'       =>DB::table('customers')->where('phone',$customer)
                ->value('id') ,
            'receptionist_id'     => $receptionist,
            'sport_id'          => $sport,
            'membership_id'     =>$membership,
            'categorie_id'       =>$category,
            'amount'        => DB::table("prices")
                ->where("sport_id",$sport)
                ->where("membership_id",$membership)
                ->where("categorie_id",$category)->value("amount"),
            'duration'      =>1,
            'expiry_date'   =>$todayDate = date("Y-m-d"),
        ]);
        $mytime = date('Y-m-d H:i:s');

        Attendance::create([
            'customer_id'       =>DB::table('customers')->where('phone',$customer)
                                     ->value('id') ,
            'controller_id'     => $receptionist,
            'sport_id'          =>$sport ,
            'membership_id'     =>$membership,
            'category_id'       =>$category,
            'payment_id'        =>DB::table('payments')
                                ->where('customer_id',DB::table('customers')->where('phone',$customer)
                                ->value('id'))
                                 ->where('created_at',$mytime)
                                ->value('id'),
        ]);
           $data['customer_id']="client pass";
                return response()->json([$data]);


        }

        Payment::create([
            'customer_id'       =>DB::table('customers')->where('phone',$customer)
                ->value('id') ,
            'receptionist_id'     => $receptionist,
            'sport_id'          => $sport,
            'membership_id'     =>$membership,
            'categorie_id'       =>$category,
            'amount'        => DB::table("prices")
                ->where("sport_id",$sport)
                ->where("membership_id",$membership)
                ->where("categorie_id",$category)->value("amount"),
            'duration'      =>1,
            'expiry_date'   =>$todayDate = date("Y-m-d"),
        ]);
        $mytime = date('Y-m-d H:i:s');

        Attendance::create([
            'customer_id'       =>DB::table('customers')->where('phone',$customer)
                                     ->value('id') ,
            'controller_id'     => $receptionist,
            'sport_id'          =>$sport,
            'membership_id'     =>$membership,
            'category_id'       =>$category,
            'payment_id'        =>DB::table('payments')
                                ->where('customer_id',DB::table('customers')->where('phone',$customer)
                                ->value('id'))
                                 ->where('created_at',$mytime)
                                ->value('id'),
        ]);


    
               $data['customer_id']="client pass";
               $payment = Payment::where('id', DB::table('payments')
                                ->where('customer_id',DB::table('customers')->where('phone',$customer)
                                ->value('id'))
                                 ->where('created_at',$mytime)
                                ->value('id'))->first();

               // $payments=DB::table('payments')->where('id',DB::table('payments')
               //                  ->where('customer_id',DB::table('customers')->where('phone',$customer)
               //                  ->value('id'))
               //                   ->where('created_at',$mytime))
               //                  ->first();

               // $payment = Payment::where('id', $username)->first();
               $spor=DB::table('sports')->where('id',$sport)->value("name");
                // return response()->json([$spor]);
                  return response()
                ->json(
                    [
                      
                        'Payment' => [
                        	'category' => $payment->categorie->name,
                            'sport' => $payment->sport->name,
                            'membership' => $payment->membership->name,
                            'amount' => $payment->amount,
                            'telephone' => $customer
                        ]
                    ]
                );
    
}
}

