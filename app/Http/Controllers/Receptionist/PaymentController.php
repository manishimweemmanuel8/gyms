<?php

namespace App\Http\Controllers\Receptionist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthManager;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use App\Customer;
use App\Receptionist;
use App\Payment;
use App\Membership;

class PaymentController extends Controller
{
     public function index()
    {
        $payments = Payment::all();
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
                'receptionist_id' => Auth::guard('receptionist')->user()->id ,
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

              ]);

              $payment->save();
              return redirect('/receptionist/payment')->with('succes', 'Data has been successfully save!'); 
          }
            public function show(Payment $payment)
    {
        //
    }

    public function edit($id,$customer_id=null)
    {
         $customers=null;
        if(!$customer_id){
            $customers=Customer::all();
        }
        $payment = Payment::find($id);

        $categories = DB::table("categories")->pluck("name","id");

        return view('receptionist.payment.edit', compact('payment','id','categories'),['customer_id'=>$customer_id,'customers'=>$customers]);
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
        $payment->save();
        return redirect('/receptionist/payment');
    }
     public function destroy($id)
    {
        payment::destroy($id);
        return redirect('/receptionist/payment');
    }
}

