<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/manager/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('manager.auth:manager');
    }

    /**
     * Show the Manager dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('manager.home');
    }

}