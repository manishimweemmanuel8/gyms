<?php

namespace App\Http\Controllers\Receptionist;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/receptionist/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('receptionist.auth:receptionist');
    }

    /**
     * Show the Receptionist dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('receptionist.home');
    }

}