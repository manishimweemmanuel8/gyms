<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Receptionist;
use App\Customer;
use Illuminate\Http\Request;
use App\Categorie;
use App\Sport;
use App\Membership;
use App\Price;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::with('categorie')->get();
        // return $payments;
         return view('receptionist/payment.index', compact('payments'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( $receptionist_id = null, $customer_id=null, $category_id=null,$sport_id=null, $membership_id=null, $price_id=null)
    {
        $receptionists= null;

        if(!$receptionist_id){
            $receptionists = Receptionist::all();
        }

        $customers=null;
        if(!$customer_id){
            $customers=Customer::all();
        }

        $categories=null;
        if(!$category_id){
            $categories=Categorie::all();
        }

        $sports=null;
        if(!$sport_id){
            $sports=Sport::all();
        }

        $memberships=null;
        if(!$membership_id){
            $memberships=Membership::all();
        }

        $prices=null;
        if(!$price_id){
            $prices=Price::all();
        }

        return view('receptionist/payment/create',['receptionist_id'=>$receptionist_id, 'receptionists'=>$receptionists, 'customer_id'=>$customer_id, 'customers'=>$customers , 'category_id'=>$category_id, 'categories'=>$categories, 'sport_id'=>$sport_id, 'sports'=>$sports, 'membership_id'=>$membership_id, 'memberships'=>$memberships,'price_id'=>$price_id,'prices'=>$prices]);

        // $customers=null;
        // if(!$customers){
        //     $customers=Customer::all();
        // }

        
        // return view('receptionist/payment/create',['customer_id'=>$customer_id, 'customers'=>$customer_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $payment = new Payment([
            'customer_id' => $request->get('customer_id'),
            'receptionist_id' => $request->get('receptionist_id'),
            'category_id' => $request->get('category_id'),
            'sport_id' => $request->get('sport_id'),
            'membership_id' => $request->get('membership_id'),
            'price_id' => $request->get('price_id'),
            
          ]);
  
          $payment->save();
          return redirect('/receptionist/payment')->with('succes', 'Data has been successfully save!');; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show()
    { 
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //  $receptionists= null;
        //  $receptionist_id=null;

        // if(!$receptionist_id){
        //     $receptionists = Receptionist::all();
        // }
        // return view('receptionist/payment/edit',['receptionist_id'=>$receptionist_id, 'receptionists'=>$receptionists]);

        $payment = Payment::find($id);
        return view('receptionist.payment.edit', compact('payment','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $payment = Payment::find($id);
        $payment->customer_id = $request->get('customer_id');
        $payment->receptionist_id = $request->get('receptionist_id');
        $payment->amount = $request->get('amount');
        $payment->update();
        return redirect('/receptionist/payment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        payment::destroy($id);
        return redirect('/receptionist/payment');
    }
}
