<?php

namespace App\Http\Controllers\Control;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/control/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('control.auth:control');
    }

    /**
     * Show the Control dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('control.home');
    }

}