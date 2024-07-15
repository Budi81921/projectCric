<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class listPerusahaanController extends Controller
{
    public function index(){
        
        return view('main.perusahaan.listPerusahaan');
    }

    public function showListCompany(){

    }
}
