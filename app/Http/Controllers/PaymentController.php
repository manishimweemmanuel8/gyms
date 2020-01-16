<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use DB;
use App\Customer;
use App\Receptionist;
use App\Payment;
use App\Membership;

use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthManager;

class PaymentController extends Controller
{
     public function index()
    {
        $payments = Payment::with('customer')->get();
         return view('receptionist/payment.index', compact('payments'));

 
    }


 
    
     public function create( $customer_id=null,$receptionist_id=null, $membership_id=null)
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
            return view('receptionist/payment.create',compact('categories'),[ 'customer_id'=>$customer_id, 'customers'=>$customers,'receptionist_id'=>$receptionist_id, 'receptionists'=>$receptionists
            // ,'membership_id'=>$membership_id,'memberships'=>$memberships
            ]);
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
            'receptionist_id' => Auth::guard('receptionist')->user()->id,
            'categorie_id' => $request->get('categorie_id'),
            'sport_id' => $request->get('sport_id'),
            'membership_id' => $request->get('membership_id'),
            // if($request->get('membership_id')==30){
            'duration' =>DB::table("memberships")
            ->where("id",$request->get('membership_id'))->value("duration"),
            // }
            'expiry_date' =>$request->get('expiry_date'),
            'amount'=>DB::table("prices")
            ->where("category_id",$request->get('categorie_id'))
            ->where("sport_id",$request->get('sport_id'))
            ->where("membership_id",$request->get('membership_id'))
            ->value("amount"),
            
          ]);
  
          $payment->save();
          return redirect('/receptionist/payment')->with('succes', 'Data has been successfully save!');; 
    }

    public function edit($id)
    {

        return view('receptionist.payment.edit');
    }

    public function update(Request $request, $id)
    {
//        $payment = Payment::find($id);
//        $payment->customer_id = $request->get('customer_id');
//        $payment->lastName = $request->get('lastName');
//        $c->gender= $request->get('gender');
//        $customer->phone = $request->get('phone');
//        $customer->email = $request->get('email');
//        $customer->entitie_id = $request->get('entitie_id');
//        $customer->dob = $request->get('dob');
//        //$customer->entity_representative=$request->get('entity_representative');
//        $customer->update();
//        return redirect('/receptionist/payment');
    }

    public function destroy($id)
    {
        payment::destroy($id);
        return redirect('/receptionist/payment');
    }
    
}
