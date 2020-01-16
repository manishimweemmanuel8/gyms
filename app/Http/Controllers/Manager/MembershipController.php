<?php


namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Membership;
use App\Sport;
use Illuminate\Http\Request;
use DB;


class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $memberships = Membership::all();
        return view('manager/membership.index', compact('memberships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sports = DB::table("sports")->pluck("name","id");
        return view('manager/membership.create',compact('sports'));
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
            'sport_id'=>'required',
            'duration'=>'required'
        ]);
        $membership = new Membership([
            'name' => $request->get('name'),
            'sport_id' => $request->get('sport_id'),
            'duration' =>$request->get('duration'),

        ]);

        $membership->save();
        return redirect('/manager/membership')->with('succes', 'Data has been successfully save!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function show(Membership $membership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function edit(Membership $membership)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Membership $membership)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        membership::destroy($id);
        return redirect('/manager/membership');
    }
}
