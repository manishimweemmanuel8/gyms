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
            $customers=DB::table('customers')->where('entitie_id',1)->get();
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
            ->where("category_id",$request->get('categorie_id'))
            ->pluck("name","id");
            return response()->json($sports);
        }

        public function getMembershipList(Request $request)
        {
            $memberships = DB::table("memberships")
            ->where("sport_id",$request->sport_id)
            ->pluck("duration","id");
            return response()->json($memberships);
        }



        public function store(Request $request)
    {


        $payment = new Payment([
            'customer_id' => $request->get('customer_id'),
            'receptionist_id' => 1,
            'categorie_id' => $request->get('categorie_id'),
            'sport_id' => $request->get('sport_id'),
            'membership_id' => $request->get('membership_id'),
            'duration' =>DB::table("memberships")
            ->where("id",$request->get('membership_id'))->value("duration"),
            'expiry_date' =>$request->get('expiry_date'),
            'amount'=>DB::table("prices")
            ->where("categorie_id",$request->get('categorie_id'))
            ->where("sport_id",$request->get('sport_id'))
            ->where("membership_id",$request->get('membership_id'))
            ->value("amount"),
            'location' => $request->get('location'), 

          ]);

          $payment->save();
          return redirect('/receptionist/payment')->with('succes', 'Data has been successfully save!');
    }

    public function edit($id)
    {
        return view('receptionist.payment.edit');
    }
    public function update(Request $request, $id)
    {
        $payment = Payment::find($id);
        $payment->customer_id = $request->get('customer_id');
        $payment->categorie_id =$request->get('categorie_id');
        $payment->sport_id= $request->get('sport_id');
        $payment->membership_id = $request->get('membership_id');
        $payment->expiry_date = $request->get('expiry_date');
        $payment->duration=DB::table("memberships")
        ->where("id",$request->get('membership_id'))->value("duration");
        $payment->amount=DB::table("prices")
        ->where("categorie_id",$request->get('categorie_id'))
        ->where("sport_id",$request->get('sport_id'))
        ->where("membership_id",$request->get('membership_id'))
        ->value("amount");
        $payment->update();
        return redirect('/receptionist/payment');
    }

    public function destroy($id)
    {
        payment::destroy($id);
        return redirect('/receptionist/payment');
    }
    
}
