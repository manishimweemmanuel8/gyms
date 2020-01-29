<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Customer;
use App\Payment; 
use App\Controller;
use App\Http\Resources\PaymentResource;
use DB;
use Illuminate\Support\Facades\Input; 
use App\Http\Requests\RegisterAuthRequest;
use App\User;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;


class ApiController extends Controller
{
    //
    public $loginAfterSignUp = true;


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




    public function login(Request $request){

        $email=$request->input('email');
        $password=$request->input('password');
        $hash_password=bcrypt($request->input('hash'));
        $data=DB::table('receptionists')
            ->where('email',$email)
            ->where('password',$password)->get();
        if($data){
            $dat['status']="pass sub";
            return $dat;
        }else{
            $dat['status']="not pass sub";
            return $dat;
        }
    }

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



     
 
    public function register(RegisterAuthRequest $request)
    {
        $controller = new Controller();
        $controller->name = $request->name;
        $controller->email = $request->email;
        $controller->post_id = $request->post_id;
        $controller->password = bcrypt($request->password);
        $controller->save();
 
        if ($this->loginAfterSignUp) {
            return $this->login($request);
        }
 
        return response()->json([
            'success' => true,
            'data' => $controller
        ], 200);
    }
 
    public function login(Request $request)
    {
        $input = $request->only('email', 'password');
        // $input=$request->input('email','password');
        $jwt_token = null;
 
        if (!$jwt_token = JWTAuth::attempt($input)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid Email or Password',
                'data' => $input,

            ], 401);
        }
 
        return response()->json([
            'success' => true,
            'token' => $jwt_token,
        ]);
    }
 
    public function logout(Request $request)
    {
        $this->validate($request, [
            'token' => 'required'
        ]);
 
        try {
            JWTAuth::invalidate($request->token);
 
            return response()->json([
                'success' => true,
                'message' => 'Controller logged out successfully'
            ]);
        } catch (JWTException $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, the controller cannot be logged out'
            ], 500);
        }
    }
 
    public function getAuthUser(Request $request)
    {
        $this->validate($request, [
            'token' => 'required'
        ]);
 
        $user = JWTAuth::authenticate($request->token);
 
        return response()->json(['controller' => $controller]);
    }


}
