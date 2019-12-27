<?php

namespace App\Http\Controllers;

use App\Attendance;
use Illuminate\Http\Request;
use App\Controller;
use App\Customer;
use App\Payment;
use DB;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $attendances = Attendance::all();
        
         return view('controller/attendance.index', compact('attendances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

 
    
    public function create($customer_id =null, $controller_id=null, $payment_id=null)
    {
        //
         $controllers= null;
        if(!$controller_id){
            $controllers = Controller::all();
        }

        $customers=null;
        if(!$customer_id){
            $customers=Customer::all();
        }

        $payments=null;
        if(!$payment_id){
            $payments=Payment::all();
        }

       

        return view('controller/attendance/create',['customer_id'=>$customer_id, 'customers'=>$customers,'controller_id'=>$controller_id,'controllers'=>$controllers,'payment_id'=>$payment_id, 'payments'=>$payments]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $attendance = new Attendance([
            'customer_id' => $request->get('customer_id'),
            'controller_id' => $request->get('controller_id'),
            'sport_id' => $request->get('sport_id'),
            'membership_id' => $request->get('membership_id'),
            'category_id' => $request->get('category_id'),
          ]);
  
          $attendance->save();
          return redirect('/controller/attendance')->with('succes', 'Data has been successfully save!');; 
    }

    


   

}
