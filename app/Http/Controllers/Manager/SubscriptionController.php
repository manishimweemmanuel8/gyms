<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;

use App\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        //
         $subscriptions=Subscription::all();
        return view('manager/subscription.index', compact('subscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('manager/subscription.create');
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
            'name'=>'required',
            'amount'=>'required',
        ]);
        $subscription = new Subscription();
  
        $subscription->name= $request->input('name');
        $subscription->amount= $request->input('amount');
        $subscription->save(); 
        return redirect()->route('subscription.index')->with('info','subscription Updated Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Corporate  $corporate
     * @return \Illuminate\Http\Response
     */
    public function show(Corporate $corporate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Corporate  $corporate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $subscription = Subscription::find($id);
        return view('manager/subscription.edit',['subscription'=> $subscription]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Corporate  $corporate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $request->validate([
             'name'=>'required',
            'amount'=>'required',
        ]);

        $subscription = Subscription::find($request->input('id'));
        $subscription->name= $request->input('name');
        $subscription->amount= $request->input('amount');
        $subscription->update(); 
        return redirect()->route('subscription.index')->with('info','subscription Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Corporate  $corporate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $subscription = Subscription::find($id);
        //delete
        $subscription->delete();
        return redirect()->route('subscription.index');
    }
}
