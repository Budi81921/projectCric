<?php

namespace App\Http\Controllers\perusahaan;

use App\Http\Controllers\Controller;
use App\Models\Lowongan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class companyLowonganController extends Controller
{
    public function index(){
        $id = Auth::user();
        $companyProfile = $id->company;
        if ($companyProfile) {
            $jobs = Lowongan::where('fkusercompany', $companyProfile->id)
                        ->with(['detailLowongan','company','company.detailalamat'])
                        ->get();
        } else {
            $jobs = collect(); // Jika tidak ada kandidat, set jobs sebagai koleksi kosong
        }
        return view('perusahaan.profileLowonganCompany.company_lowongan', [
            'jobs'=>$jobs
        ]);
    }

    public function createLowonganindex(){
        $id = Auth::user();
        $companyProfile = $id->company;
        if ($companyProfile) {
            $jobs = Lowongan::where('fkusercompany', $companyProfile->id)
                        ->with(['detailLowongan','company','kategoripekerjaan'])
                        ->get();
        } else {
            $jobs = collect(); // Jika tidak ada kandidat, set jobs sebagai koleksi kosong
        }
        return view('perusahaan.profileLowonganCompany.create_company_lowongan',[
            'jobs'=>$jobs
        ]);
    }

    public function createLowonganProses(){
        

    }
}
