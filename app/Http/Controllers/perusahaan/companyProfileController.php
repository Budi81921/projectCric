<?php

namespace App\Http\Controllers\perusahaan;

use App\Http\Controllers\Controller;
use App\Models\detailAlamatCompany;
use App\Models\User;
use App\Models\userCompanyModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class companyProfileController extends Controller
{
    public function index(){
        $id = Auth::user();
        $user=User::find($id->id);
        $companyProfile = $id->company;
        $usercompany=userCompanyModels::find($companyProfile->id);
        $detailAlamat=$usercompany->detailalamat();
        return view('perusahaan.company-profil', compact('id','companyProfile','detailAlamat'));
    }
    public function updateProfileCompany(Request $request){
        $id = Auth::user();
        $user=User::find($id->id);
        $companyProfile = $id->company;
        $usercompany=userCompanyModels::find($companyProfile->id);
        $detailalamat=$usercompany->detailalamat();
        $detailAlamatPerusahaan=detailAlamatCompany::find($detailalamat->id);
        

        $user->update([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
        ]);

        $usercompany->update([
            'deskripsi_perusahaan',
            'nomor_telepon',
            'tahun_berdiri',
            'url'
        ]);

        $detailAlamatPerusahaan->update([
            'Alamat_detail',
            'provinsi',
            'kota_kabupaten',
            'kecamatan',
            'kelurahan',
            'kode_pos'
        ]);
        return view('perusahaan.company-profil');
    }
    public function logOutCompany(){
        Auth::logout();
        Log::info("log out Berhasil");
        return redirect('/');
    }
}
