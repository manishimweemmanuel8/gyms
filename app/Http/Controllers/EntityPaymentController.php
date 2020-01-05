<?php

namespace App\Http\Controllers;

use App\EntityPayment;
use Illuminate\Http\Request;
use App\Entitie;
use App\Receptionist;
use App\Sport;
use App\Membership;
use DB;


class EntityPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $entityPayments = EntityPayment::all();
        return view('manager/entity.index', compact('entityPayments'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($entity_id=null,$receptionist_id=null)
    {
        //
         $entities=null;
        if(!$entity_id){
            $entities=Entitie::all();
        }
        $receptionists= null;

        if(!$receptionist_id){
            $receptionists = Receptionist::all();
        }
            $sports = DB::table("sports")
            ->where("category_id",3)
            ->pluck("name","id");
            return view('manager/entity.create',compact('sports'),[ 'entity_id'=>$entity_id, 'entities'=>$entities,'receptionist_id'=>$receptionist_id, 'receptionists'=>$receptionists]);
    }

        public function getMembershipList(Request $request)
        {
            $memberships = DB::table("memberships")
            ->where("sport_id",$request->sport_id)
            ->where('name','!=','Session')
            ->pluck("name","id");
            return response()->json($memberships);
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
        $entityPayment = new EntityPayment([
            'entity_id' => $request->get('entity_id'),
            'receptionist_id' => $request->get('receptionist_id'),
            'sport_id' => $request->get('sport_id'),
            'membership_id' => $request->get('membership_id'),
            'customer_list_id'=> $request->get('customer_list_id'),
            
          ]);
  
          $entityPayment->save();
          return redirect('/manager/entity')->with('succes', 'Data has been successfully save!');; 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EntityPayment  $entityPayment
     * @return \Illuminate\Http\Response
     */
    public function show(EntityPayment $entityPayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EntityPayment  $entityPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(EntityPayment $entityPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EntityPayment  $entityPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EntityPayment $entityPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EntityPayment  $entityPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntityPayment $entityPayment)
    {
        //
    }
}
