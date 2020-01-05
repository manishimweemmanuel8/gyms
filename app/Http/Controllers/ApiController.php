<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function checkPayment(){
    	$todayDate = date("Y-m-d");
    	$payment  = DB::table('payments')->where('customer_id',$request->input('customer_id'))->where('expiry_date','>=',$todayDate)
            ->get();
    	$response["payments"] = $payment;
        $response["success"] = 1;
    	return response()->json($response);
    }

    public function makeAttendance(){

    }
}
