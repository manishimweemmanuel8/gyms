<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/management/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('management.auth:management');
    }

    /**
     * Show the Management dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('management.home');
    }

}