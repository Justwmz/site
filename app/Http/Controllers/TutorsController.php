<?php

namespace App\Http\Controllers;

use App\Tutor;
use Illuminate\Http\Request;

use App\Http\Requests;

class TutorsController extends Controller
{
    public function index()
    {
        $tutors = Tutor::all();
        
        return view('layouts.learner', compact('tutors'));
    }
}
