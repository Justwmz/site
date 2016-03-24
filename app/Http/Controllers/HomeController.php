<?php

namespace App\Http\Controllers;

use App\Tutor;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutors = Tutor::all();
        return view('home', compact('tutors'));
    }

   /* public function test()
    {


        return view('layouts.learner', compact('tutors'));
    }*/
}
