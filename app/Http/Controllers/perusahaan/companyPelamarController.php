<?php

namespace App\Http\Controllers\perusahaan;

use App\Http\Controllers\Controller;
use App\Models\detail_lowongan;
use App\Models\Lowongan;
use App\Models\userCompanyModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class companyPelamarController extends Controller
{
    public function index(){
        $id = Auth::user();
        $companyProfile = $id->company;
        $company1= userCompanyModels::find($companyProfile->id);
        $lowongans = $company1->lowongan;
    
        $detailLowongansByLowongan = [];
    
        if ($lowongans) {
            foreach ($lowongans as $lowongan) {
                $details = detail_lowongan::where('fklowongankerja', $lowongan->id)
                            ->with(['lowongan', 'userCandidate', 'userCandidate.users'])
                            ->get();
                $detailLowongansByLowongan[$lowongan->id] = $details;
            }
        }
    
        return view('perusahaan.profilePelamarCompany.companyPelamar', [
            'lowongans' => $lowongans,
            'detailLowongansByLowongan' => $detailLowongansByLowongan
        ]);
    }

    public function changestatus(Request $request){
        $detailLowongan = detail_lowongan::find($request->id);
        $detailLowongan->status = $request->status;
        $detailLowongan->update();

        return response()->json(['success' => true]);
    }
}
