<?php

namespace App\Http\Controllers\Receptionist;

use App\Http\Controllers\Controller;

use App\Payment;
use App\Subscription;
use Illuminate\Http\Request;
use DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $payments = Payment::all();
         return view('receptionist/payment.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$subscription_id=null)
    {
         $subscriptions=null;
        if(!$subscription_id){
            $subscriptions=Subscription::all();
        }
         $payment = Payment::find($id);

        return view('receptionist.payment.edit', compact('payment','id'),['subscription_id'=>$subscription_id,'subscriptions'=>$subscriptions]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
        $request->validate([
             'subscription_id'=>'required',
            'expirydate'=>'required',
        ]);

        $payment = Payment::find($request->input('id'));
        $payment->subscription_id= $request->input('subscription_id');
        $payment->expirydate= $request->input('expirydate');
        $payment->amount= DB::table('subscriptions')->where('id',$request->input('subscription_id'))->value('amount');
        $payment->update(); 
        return redirect()->route('payments.index')->with('info','payment Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $payment = Payment::find($id);
        //delete
        $payment->delete();
        return redirect()->route('payments.index');
    }
}
