<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;
use App\Models\userCompanyModels;

class HomeController extends Controller
{
    public function regis(){
        $lowongan = Lowongan::all();

        $perusahaan = userCompanyModels::get();
        return view('main.r_home', compact('lowongan','perusahaan'));
    }

    public function nonregis(){

        $lowongan = Lowongan::all();
        $perusahaan = userCompanyModels::get();
        return view('main.n_home', compact('lowongan','perusahaan'));


    }
}
