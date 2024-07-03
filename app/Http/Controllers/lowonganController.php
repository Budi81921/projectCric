<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;

class lowonganController extends Controller
{
    public function index(){
        $lowongan = Lowongan::all();
        return view('main.n_lowongan', compact('lowongan'));


    }
}
