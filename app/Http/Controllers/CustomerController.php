<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('receptionist/customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('receptionist/customer/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer([
            'firstName' => $request->get('firstName'),
            'lastName' => $request->get('lastName'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'entitie_id' => $request->get('entitie_id'),
            'dob' => $request->get('dob'),
            // 'entity_representative' => $request->get('entity_representative')
          ]);
  
          $customer->save();
          return redirect('/receptionist/customer')->with('succes', 'Data has been successfully save!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('receptionist.customer.edit', compact('customer','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->firstName = $request->get('firstName');
        $customer->lastName = $request->get('lastName');
        $customer->phone = $request->get('phone');
        $customer->email = $request->get('email');
        // $customer->entitie_id = $request->get('entitie_id');
        $customer->dob = $request->get('dob');
        // $customer->entity_representative=$request->get('entity_representative');
        $customer->update();
        return redirect('/receptionist/customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        customer::destroy($id);
        return redirect('/receptionist/customer');
    }
}
