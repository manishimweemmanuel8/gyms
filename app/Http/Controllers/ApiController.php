<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Customer;
use App\Payment; 
use App\Control;
use App\Receptionist;
use App\Http\Resources\PaymentResource;
use DB;
use Illuminate\Support\Facades\Input; 
use App\Http\Requests\RegisterAuthRequest;
use App\User;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Response;


class ApiController extends Controller
{
    //

    public function sports(){
        $category_id=Input::get('id');
        return $sport=DB::table('sports')->where('category_id',$category_id)->get();
    }

      public function memberships(){
        $sport_id=Input::get('id');
        return DB::table('memberships')->where('sport_id',$sport_id)->get();
    }

public function loginReceptionist(){
         // $email = Input::get('email');
        // $password = Input::get('password');
        // $receptionist = Receptionist::where('email', $email)->first();
    
        // $data=DB::table('receptionists')
        //     ->where('email',$email)
        //     ->first();
        // if ($receptionist && \Hash::check($password, $receptionist->password)) {
        //     return response()
        //         ->json(
        //            $data
        //         );
        // }



        $card_code=Input::get('id');
        $receptionist=Receptionist::where('card_code', $card_code)->first();
        if($receptionist){

            return response()
                ->json(
                   $receptionist
                );


        } 


         else{
        return response()
            ->json(['status' => 2, 'message' => 'Ntitubashije kubamenya!']);
    }
}

     public function loginController(){
       
         $email = Input::get('email');
        $password = Input::get('password');
        $controller = Control::where('email', $email)->first();
            DB::table('controls')
            ->where('email', $email)
            ->update(['post_id' => Input::get('sport')]);
             $data=DB::table('controls')
            ->where('email',$email)
            ->first();
        if ($controller && \Hash::check($password, $controller->password)) {
            // TODO : check if deployment is full to sector level
            return response()
                ->json(
                   $data
                );
        }else{
        return response()
            ->json(['status' => 2, 'message' => 'Ntitubashije kubamenya!']);
    }
}

 
}


