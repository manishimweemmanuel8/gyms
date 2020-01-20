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
use App\Attendance;
use Carbon\Carbon;

class SessionController extends Controller
{
    //

     public function index()
    {
    	// $session=DB::table()
        $current_date_time = Carbon::now()->toDateTimeString();
        $payments = Payment::with('categorie')->where('created_at',$current_date_time)->get();

         return view('receptionist/session.index', compact('payments'));
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
            return view('receptionist/session.create',compact('categories'),[ 'customer_id'=>$customer_id, 'customers'=>$customers,'receptionist_id'=>$receptionist_id, 'receptionists'=>$receptionists
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
     	$customer=$request->phone;
       

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
                'entity_representative	'=>'0',
            ]);

            Payment::create([
            'customer_id'       =>DB::table('customers')->where('phone',$customer)
                ->value('id') ,
            'receptionist_id'     => Auth::guard('receptionist')->user()->id ,
            'sport_id'          => $request->input('sport_id'),
            'membership_id'     =>$request->input('membership_id'),
            'categorie_id'       =>$request->input('categorie_id'),
            'amount'        => DB::table("prices")
                ->where("sport_id",$request->input('sport_id'))
                ->where("membership_id",$request->input('membership_id'))
                ->where("categorie_id",$request->input('categorie_id'))->value("amount"),
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
            'category_id'       =>$request->input('categorie_id'),
            'payment_id'        =>DB::table('payments')
                                ->where('customer_id',DB::table('customers')->where('phone',$customer)
                                ->value('id'))
                                 ->where('created_at',$mytime)
                                ->value('id'),
        ]);
        return redirect('/receptionist/session')->with('succes', 'Data has been successfully save!'); 


        }

        Payment::create([
            'customer_id'       =>DB::table('customers')->where('phone',$customer)
                ->value('id') ,
            'receptionist_id'     => Auth::guard('receptionist')->user()->id ,
            'sport_id'          => $request->input('sport_id'),
            'membership_id'     =>$request->input('membership_id'),
            'categorie_id'       =>$request->input('categorie_id'),
            'amount'        => DB::table("prices")
                ->where("sport_id",$request->input('sport_id'))
                ->where("membership_id",$request->input('membership_id'))
                ->where("categorie_id",$request->input('categorie_id'))->value("amount"),
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
            'category_id'       =>$request->input('categorie_id'),
            'payment_id'        =>DB::table('payments')
                                ->where('customer_id',DB::table('customers')->where('phone',$customer)
                                ->value('id'))
                                 ->where('created_at',$mytime)
                                ->value('id'),
        ]);


    
            return redirect('/receptionist/session')->with('succes', 'Data has been successfully save!'); 
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

        
   

}
