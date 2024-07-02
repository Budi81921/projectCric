<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homecandidateController extends Controller
{
    public function index(){
        return view('home.homecandidate');
    }
}
