<?php
namespace App\Http\Controllers\Manager;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Customer;
use App\Entitie;

class corporateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $customers=Customer::all();
        return view('manager/corporate.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($entitie_id= null)
    {
        //

        $entities=null;
        if(!$entitie_id){
            $entities=Entitie::all();
        }
        

         return view('manager/corporate/create',['entitie_id'=>$entitie_id, 'entities'=>$entities]);
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
        $customer = new Customer([
            'firstName' => $request->get('firstName'),
            'lastName' => $request->get('lastName'),
            'gender' =>$request->get('gender'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'entitie_id' => $request->get('entitie_id'),
            'dob' => $request->get('dob'),
            // 'entity_representative' => $request->get('entity_representative')
          ]);
  
          $customer->save();
          return redirect('/manager/corporate')->with('succes', 'Data has been successfully save!');
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
    public function edit($id,$entitie_id=null)
    {
        //
        $entities=null;
        if(!$entitie_id){
            $entities=Entitie::all();
        }
        $customer = Customer::find($id);
        return view('manager.corporate.edit', compact('customer','id'),['entitie_id'=>$entitie_id,'entities'=>$entities]);

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
        $customer = Customer::find($request->input('id'));
        $customer->firstName = $request->get('firstName');
        $customer->lastName = $request->get('lastName');
        $customer->gender= $request->get('gender');
        $customer->phone = $request->get('phone');
        $customer->email = $request->get('email');
        $customer->entitie_id = $request->get('entitie_id');
        $customer->dob = $request->get('dob');
        //$customer->entity_representative=$request->get('entity_representative');
        $customer->save();
        return redirect('/manager/corporate');
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
        return redirect()->route('corporate.index');
    }
}
