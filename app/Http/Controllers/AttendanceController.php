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
    public function index(Request $request)
    {
        //


            $attendances = Attendance::with('payment')->get();

        return $attendances;
         // return view('controller/attendance.index', compact('attendances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create($customer_id =null, $controller_id=null, $payment_id=null)
//    {
//        //
//         $controllers= null;
//        if(!$controller_id){
//            $controllers = Controller::all();
//        }
//        $customers=null;
//        if(!$customer_id){
//           $todayDate = date("Y-m-d");
//            $customers=DB::table("customers")
//           ;
//        }
//        $payments=null;
//        if(!$payment_id){
//           $todayDate = date("Y-m-d");
//            $payments=DB::table("payments")
//            ->where('expiry_date','>=',$todayDate)
//            ->where('duration', '>', 0)
//            ->get();
//        }
//        return view('controller/attendance/create',['customer_id'=>$customer_id, 'customers'=>$customers,'controller_id'=>$controller_id,'controllers'=>$controllers,'payment_id'=>$payment_id, 'payments'=>$payments]);
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        //
//        $attendance = new Attendance([
//            'payment_id' => $request->get('payment_id'),
//            'controller_id' => $request->get('controller_id'),
//            'sport_id' =>DB::table("payments")
//            ->where("id", $request->get('payment_id'))->value("sport_id"),
//            'membership_id' =>DB::table("payments")
//            ->where("id", $request->get('payment_id'))->value("membership_id"),
//            'category_id' =>DB::table("payments")
//            ->where("id", $request->get('payment_id'))->value("categorie_id"),
//            'customer_id'=>DB::table("payments")
//            ->where("id", $request->get('payment_id'))->value("customer_id"),
//
//          ]);
//
//        // if(!DB::table("attendances")
//        //   ->where("payment_id",$request->get('payment_id') ){
//            $todayDate = date("Y-m-d");
//        $result=DB::table("attendances")
//        ->where("payment_id",$request->get('payment_id'))
//        ->where("created_at",$todayDate)
//        ->value("payment_id");
//        if ($result!=$request->get('payment_id')){
//            $attendance->save();
//            DB::table('payments')->where('id',$request->get('payment_id'))
//            ->decrement('duration');
//            return redirect('/controller/attendance')->with('succes', 'Data has been successfully save!');;
//     }
//     else{
//         return "you attend";
//     }
//}

//    public function destroy($id)
//    {
//        $att = Attendance::find($id);
//        $att->delete();
//
//        return redirect('/controller/attendance');
//    }

    


   

}
