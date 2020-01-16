<?php

namespace App\Http\Controllers\Manager;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Entitie;
use Illuminate\Http\Request;
use DB;

class EntitiesController extends Controller
{
    //

    public function index()
    {
        $entities = Entitie::all();
        return view('manager/Entity.index', compact('entities'));
    }

    public function create()
    {
        return view('manager/Entity.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required'
        ]);
        $entity = new Entitie([
            'name' => $request->get('name'),
            'email' => $request->get('email'),

        ]);

        $entity->save();
        return redirect('/manager/Entity')->with('succes', 'Data has been successfully save!');
    }
    public function edit($id,$customer_id=null)
    {
        $customers=null;
        if(!$customer_id){
            $customers=DB::table("customers")->where('entitie_id',$id)->get();
        }
        $entity = Entitie::find($id);
        return view('manager.Entity.edit', compact('entity','id'),['customer_id'=>$customer_id,'customers'=>$customers]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required'
        ]);

        $entity = Entitie::find($id);
        $entity->name = $request->get('name');
        $entity->email = $request->get('email');
        $entity->customer_id = $request->get('customer_id');

        $entity->save();
        return redirect('/manager/Entity');
    }

    public function destroy($id)
    {
        entitie::destroy($id);
        return redirect('/manager/Entity');
    }
}
