<?php

namespace App\Http\Controllers\Manager;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Entitie;
use App\Receptionist;
use App\Sport;
use Illuminate\Http\Request;
use DB;

class SportController extends Controller
{
    //

    public function index()
    {
        $sports = Sport::with('category')->get();
        return view('manager/sport.index', compact('sports'));
        

    }

    public function create( )
    {

        $categories = DB::table("categories")->pluck("name","id");
        return view('manager/sport.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'category_id'=>'required'
        ]);
        $sport = new Sport([
            'name' => $request->get('name'),
            'category_id' => $request->get('category_id'),

        ]);

        $sport->save();
        return redirect('/manager/sport')->with('succes', 'Data has been successfully save!');
    }
//    public function edit($id,$category_id=null)
//    {
//        $categories=null;
//        if(!$category_id){
//            $categories = DB::table("categories")->pluck("name","id");
//        }
//        $entity = Entitie::find($id);
//        return view('manager.Entity.edit', compact('entity','id'),['customer_id'=>$customer_id,'customers'=>$customers]);
//    }

//    public function update(Request $request, $id)
//    {
//        $request->validate([
//            'name'=>'required',
//            'email'=>'required'
//        ]);
//
//        $entity = Entitie::find($id);
//        $entity->name = $request->get('name');
//        $entity->email = $request->get('email');
//        $entity->customer_id = $request->get('customer_id');
//
//        $entity->save();
//        return redirect('/manager/Entity');
//    }

    public function destroy($id)
    {
        sport::destroy($id);
        return redirect('/manager/sport');
    }
}
