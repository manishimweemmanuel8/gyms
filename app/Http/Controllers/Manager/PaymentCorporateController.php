<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\PaymentCorporate;
use Illuminate\Http\Request;
use DB;
use App\Corporate;

class PaymentCorporateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
           $payments = PaymentCorporate::all();
         return view('manager/payment.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($corporate_id=null)
        {
            $corporates=null;
        if(!$corporate_id){
            $corporates=DB::table('corporates')->get();
        }
       

            return view('manager/payment.create',[ 'corporate_id'=>$corporate_id, 'corporates'=>$corporates
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
            'corporate_id'=>'required',
            'month'=>'required',
            'expirydate'=>'required',
            'amount'=>'required',
        ]);
        $payment = new PaymentCorporate();
  
        $payment->corporate_id= $request->input('corporate_id');
        $payment->month= $request->input('month');
        $payment->expirydate= $request->input('expirydate');
        $payment->amount= $request->input('amount');
        $payment->save(); 
        return redirect()->route('payment.index')->with('info','corporate payment saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PaymentCorporate  $paymentCorporate
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentCorporate $paymentCorporate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaymentCorporate  $paymentCorporate
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$corporate_id=null)
    {
         $corporates=null;
        if(!$corporate_id){
            $corporates=Corporate::all();
        }
        $payment = PaymentCorporate::find($id);

        return view('manager.payment.edit', compact('payment','id'),['corporate_id'=>$corporate_id,'corporates'=>$corporates]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaymentCorporate  $paymentCorporate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentCorporate $paymentCorporate)
    {
        //

        $request->validate([
             'corporate_id'=>'required',
            'month'=>'required',
            'expirydate'=>'required',
            'amount'=>'required',
        ]);

        $payment = PaymentCorporate::find($request->input('id'));
        $payment->corporate_id= $request->input('corporate_id');
        $payment->month= $request->input('month');
        $payment->expirydate= $request->input('expirydate');
        $payment->amount= $request->input('amount');
        $payment->update(); 
        return redirect()->route('payment.index')->with('info','payment Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaymentCorporate  $paymentCorporate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $payment = PaymentCorporate::find($id);
        //delete
        $payment->delete();
        return redirect()->route('payment.index');
    }
}
