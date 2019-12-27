<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Customer;
use App\Receptionist;
use App\Payment;

class PaymentController extends Controller
{
     public function index()
    {
        $payments = Payment::with('categorie')->get();
        // return $payments;
         return view('receptionist/payment.index', compact('payments'));
    }
    
     public function create( $customer_id=null,$receptionist_id=null)
        {
            $customers=null;
        if(!$customer_id){
            $customers=Customer::all();
        }
        $receptionists= null;

        if(!$receptionist_id){
            $receptionists = Receptionist::all();
        }
            $categories = DB::table("categories")->pluck("name","id");
            return view('receptionist/payment.create',compact('categories'),[ 'customer_id'=>$customer_id, 'customers'=>$customers,'receptionist_id'=>$receptionist_id, 'receptionists'=>$receptionists]);
        }

        public function getSportList(Request $request)
        {
            $sports = DB::table("sports")
            ->where("category_id",$request->category_id)
            ->pluck("name","id");
            return response()->json($sports);
        }

        public function getMembershipList(Request $request)
        {
            $memberships = DB::table("memberships")
            ->where("sport_id",$request->sport_id)
            ->pluck("name","id");
            return response()->json($memberships);
        }

        public function store(Request $request)
    {
       

        $payment = new Payment([
            'customer_id' => $request->get('customer_id'),
            'receptionist_id' => $request->get('receptionist_id'),
            'category_id' => $request->get('category_id'),
            'sport_id' => $request->get('sport_id'),
            'membership_id' => $request->get('membership_id'),
            
          ]);
  
          $payment->save();
          return redirect('/receptionist/payment')->with('succes', 'Data has been successfully save!');; 
    }
    
}
