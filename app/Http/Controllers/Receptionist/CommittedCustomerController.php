<?php

namespace App\Http\Controllers\Receptionist;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Customer;
use App\Payment;
use DB;
use Auth;
class CommittedCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        //
        $clients = Customer::where('type','!=','corporate')->get();
        return view('receptionist/client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($subscription_id=null)
        {
            $subscriptions=null;
        if(!$subscription_id){
            $subscriptions=DB::table('subscriptions')->where('name','!=','day')->get();
        }
       

            return view('receptionist/client.create',[ 'subscription_id'=>$subscription_id, 'subscriptions'=>$subscriptions
            ]);
    

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
        $request->validate([
            'names'=>'required',
            'phone'=>'required',
            'cardCode'=>'required',
            'subscription_id'=>'required',
            'expirydate'=>'required',
        ]);
        
        $client=Customer::where('phone',$request->input('phone'))->value('phone');
        if(!$client){

            $customer = new Customer();
  
            $customer->corporate_id= DB::table('corporates')->where('names','self')->value('id');
            $customer->names= $request->input('names');
            $customer->phone= $request->input('phone');
            $customer->cardCode= $request->input('cardCode');
            $customer->type= 'committed';
            $customer->save(); 

            $payment = new Payment();
  
            $payment->customer_id= DB::table('customers')->latest()->value('id');
            $payment->receptionist_id= Auth::guard('receptionist')->user()->name;
            $payment->subscription_id= $request->input('subscription_id');
            $payment->expirydate= $request->input('expirydate');
            $payment->amount= DB::table('subscriptions')->where('id',$request->input('subscription_id'))->value('amount');
            $payment->save(); 

                 
             }else{
                $payment = new Payment();

                $payment->customer_id= DB::table('customers')->where('phone',$request->input('phone'))->value('id');
                $payment->receptionist_id= Auth::guard('receptionist')->user()->name;
                $payment->subscription_id= $request->input('subscription_id');
                $payment->expirydate= $request->input('expirydate');
                $payment->amount= DB::table('subscriptions')->where('id',$request->input('subscription_id'))->value('amount');
                $payment->save(); 

             }

        return redirect()->route('client.index')->with('info','customer  saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
        $client = Customer::find($id);

        return view('receptionist.client.edit', compact('client','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
         $request->validate([
            'names'=>'required',
            'phone'=>'required',
            'cardCode'=>'required',
        ]);

        $customer = Customer::find($request->input('id'));
        $customer->names= $request->input('names');
        $customer->phone= $request->input('phone');
        $customer->cardCode= $request->input('cardCode');
        $customer->update(); 
        return redirect()->route('client.index')->with('info','customer Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $customer = Customer::find($id);
        //delete
        $customer->delete();
        return redirect()->route('client.index');
    }
}
