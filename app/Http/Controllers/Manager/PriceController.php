<?php

namespace App\Http\Controllers\Manager;
use App\Customer;
use App\Http\Controllers\Controller;
use App\Payment;
use App\Receptionist;
use Illuminate\Http\Request;
use App\Price;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Categorie;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        //
        $prices = Price::with('categorie')->get();
        return view('manager/price.index', compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( )
    {
        $categories = DB::table("categories")->pluck("name","id");
        return view('manager/price.create',compact('categories'));
    }

    public function getSportList(Request $request)
    {
        $sports = DB::table("sports")
            ->where("categorie_id",$request->category_id)
            ->pluck("name","id");
        return response()->json($sports);
    }

    public function getMembershipList(Request $request)
    {
        $memberships = DB::table("memberships")
            ->where("sport_id",$request->sport_id)
            ->pluck("name","id");
        return response()->json($memberships);
    }

    public function store(Request $request)
    {


        $price = new Price([
            'categorie_id' => $request->get('categorie_id'),
            'sport_id' => $request->get('sport_id'),
            'membership_id' => $request->get('membership_id'),
            'amount'=>$request->get('amount')


        ]);

        $price->save();
        return redirect('/manager/price')->with('succes', 'Data has been successfully save!');;
    }

    public function edit($id)
    {

        return view('manager.price.edit');
    }

    public function update(Request $request, $id)
    {
//        $payment = Payment::find($id);
//        $payment->customer_id = $request->get('customer_id');
//        $payment->lastName = $request->get('lastName');
//        $c->gender= $request->get('gender');
//        $customer->phone = $request->get('phone');
//        $customer->email = $request->get('email');
//        $customer->entitie_id = $request->get('entitie_id');
//        $customer->dob = $request->get('dob');
//        //$customer->entity_representative=$request->get('entity_representative');
//        $customer->update();
//        return redirect('/receptionist/payment');
    }

    public function destroy($id)
    {
        price::destroy($id);
        return redirect('/manager/price');
    }
}
