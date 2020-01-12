<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Customer;
use Illuminate\Http\Request;
use App\Payment; 
use App\Http\Resources\PaymentResource;
use DB;

class ApiController extends Controller
{
    //

    public function show($payment){

        $ticket=DB::table('payments')->where('customer_id',$payment)
            ->where('sport_id',1)
            ->whereIn('membership_id',[30,31,32,33])
            ->value('id');

        if($ticket){

            $duration= DB::table('payments')->where('id', $ticket)
                ->value('duration');
            if($duration > 0) {
                DB::table('payments')->where('id',$ticket)
                    ->decrement('duration');

                Attendance::create([
                    'customer_id' => $payment,
                    'controller_id' => 1,
                    'sport_id' => DB::table('payments')->where('customer_id', $payment)
                        ->where('sport_id', 1)
                        ->value('sport_id'),
                    'membership_id' => DB::table('payments')->where('customer_id', $payment)
                        ->where('sport_id', 1)
                        ->value('membership_id'),

                    'category_id' => DB::table('payments')->where('customer_id', $payment)
                        ->where('sport_id', 1)
                        ->value('categorie_id'),
                    'payment_id' => DB::table('payments')->where('customer_id', $payment)
                        ->where('sport_id', 1)
                        ->value('id'),
                ]);

                return "successful";
            }
            else{
                return "fail";
            }

        }
        else {
            $todayDate = date("Y-m-d");
            $client = DB::table('payments')->where('customer_id', $payment)
                ->where('expiry_date', '>=', $todayDate)
                ->where('sport_id', 1)->value('id');

            if ($client) {
                //check if the customer attend multiple time in same date
                $attend = DB::table('attendances')
                    ->where('created_at', $todayDate)
                    ->where('payment_id', $client)
                    ->value('id');
                if ($attend) {
                    return $attendance = "you attend to day";

                } else {
                    Attendance::create([
                        'customer_id' => $payment,
                        'controller_id' => 1,
                        'sport_id' => DB::table('payments')->where('customer_id', $payment)
                            ->where('expiry_date', '>=', $todayDate)
                            ->where('sport_id', 1)
                            ->value('sport_id'),
                        'membership_id' => DB::table('payments')->where('customer_id', $payment)
                            ->where('expiry_date', '>=', $todayDate)
                            ->where('sport_id', 1)
                            ->value('membership_id'),

                        'category_id' => DB::table('payments')->where('customer_id', $payment)
                            ->where('expiry_date', '>=', $todayDate)
                            ->where('sport_id', 1)
                            ->value('categorie_id'),
                        'payment_id' => DB::table('payments')->where('customer_id', $payment)
                            ->where('expiry_date', '>=', $todayDate)
                            ->where('sport_id', 1)
                            ->value('id'),
                    ]);

                }

                return $status = 1;
            } else {
                return $status = 0;
            }
        }

    }




    public function login(Request $request){
        $email=$request->input('email');
        $password=$request->input('password');
        $data=DB::table('controllers')
            ->where('email',$email)
            ->where('password',$password)->value('post_id');
        if($data){
            return $data;
        }else{
            return 'you are not allowed';
        }
    }

    public function session($customer,Request $request){
        $todayDate = date("Y-m-d");
        $client=DB::table('customers')->where('phone',$customer)->value('phone');
        if(!$client){
            Customer::create([
                'firstName'       => 'client',
                'lastName'     => 'client',
                'phone'          =>$customer,
                'email'     =>'email',
                'entitie_id'       =>9,
                'dob'        =>'1994-06-28',
                'gender'  =>'any',
                'entity_representative	'=>'0 ',
            ]);
        }

        Payment::create([
            'customer_id'       =>DB::table('customers')->where('phone',$customer)
                ->value('id') ,
            'receptionist_id'     => 1,
            'sport_id'          => $request->input('sport_id'),
            'membership_id'     =>$request->input('membership_id'),
            'categorie_id'       =>$request->input('category_id'),
            'amount'        => DB::table("prices")
                ->where("sport_id",$request->input('sport_id'))
                ->where("membership_id",$request->input('membership_id'))
                ->where("category_id",$request->input('category_id'))->value("amount"),
            'duration'      =>1,
            'expiry_date'   =>$todayDate = date("Y-m-d"),
        ]);
        $mytime = date('Y-m-d H:i:s');
        Attendance::create([
            'customer_id'       =>DB::table('customers')->where('phone',$customer)
                                     ->value('id') ,
            'controller_id'     => 1,
            'sport_id'          =>$request->input('sport_id') ,
            'membership_id'     =>$request->input('membership_id'),
            'category_id'       =>$request->input('category_id'),
            'payment_id'        =>DB::table('payments')
                                ->where('customer_id',DB::table('customers')->where('phone',$customer)
                                ->value('id'))
                                 ->where('created_at',$mytime)
                                ->value('id') ,
        ]);


        return $client=1;

    }


}
