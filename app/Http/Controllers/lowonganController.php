<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;

class lowonganController extends Controller
{
    public function index(Request $request){
        $lowongan = Lowongan::all();
        $selectedLowongan = null;

        if ($request->has('id')) {
            $selectedLowongan = Lowongan::find($request->id);
        }

        return view('main.lowongan-fix', compact('lowongan', 'selectedLowongan'));
    }


    public function search(Request $request){

        $query = Lowongan::query();

        if ($request->has('search')) {
            $query->where('title_lowongan', 'like', '%'.$request->search.'%');
        }

        if ($request->has('tipe_pekerjaan')) {
            $query->whereIn('tipePekerjaan', $request->tipePekerjaan);
        }

        if ($request->has('Lokasi')) {
            $query->whereIn('lokasi', $request->lokasi);
        }

        $products = $query->get();
        $categories = Lowongan::select('tipePekerjaan')->distinct()->get();

        return view('hasil', compact('search'));
    }
}
