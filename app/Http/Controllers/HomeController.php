<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;

class HomeController extends Controller
{
    public function regis(){
        $lowongan = Lowongan::all();
        return view('main.r_home', compact('lowongan'));
    }

    public function nonregis(){

        $lowongan = Lowongan::all();
        return view('main.n_home', compact('lowongan'));


    }
}
