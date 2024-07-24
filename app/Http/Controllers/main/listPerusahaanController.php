<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\Lowongan;
use App\Models\userCompanyModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class listPerusahaanController extends Controller
{
    public function index(){
        $perusahaan = userCompanyModels::with(['user', 'detailalamat','lowongan'])
                        ->paginate(5);
        return view('main.perusahaan.listPerusahaan',[
            'perusahaan'=>$perusahaan
        ]);
    }

    public function searchCompany(Request $request){
        if ($request->has('search')) {
            $perusahaan = userCompanyModels::whereHas('user', function($query) use ($request) {
                                $query->where('nama_lengkap', 'LIKE', '%' . $request->search . '%');
                            })
                            ->with(['user', 'detailalamat', 'lowongan'])
                            ->paginate(3);
        } else {
            $perusahaan = userCompanyModels::with(['user', 'detailalamat', 'lowongan'])
                            ->paginate(3);
        }
        
        return view('main.perusahaan.listPerusahaan', [
            'perusahaan' => $perusahaan
        ]);
    }

    public function detailCompany($id){
        try {
            $decryptedId = Crypt::decrypt($id);
            $perusahaan = userCompanyModels::with(['user', 'detailalamat'])->findOrFail($decryptedId);
           
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            abort(404, 'Invalid ID');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            abort(404, 'Company not found');
        }
    
        return view('main.perusahaan.listPerusahaanDetail',[
            'perusahaan' => $perusahaan
            
        ]);

    }

    public function detailCompanyLowongan($id){
        try {
            $decryptedId = Crypt::decrypt($id);
            $perusahaan = userCompanyModels::with(['user', 'detailalamat', 'lowongan'])
                            ->findOrFail($decryptedId);
            $lowongan= Lowongan::where('fkusercompany',$perusahaan->id)
                            ->with('company')->paginate(4);
            

        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            abort(404, 'Invalid ID');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            abort(404, 'Company not found');
        }
    
        return view('main.perusahaan.listPerusahaanDetailLowongan',[
            'perusahaan' => $perusahaan,
            'lowongan'=>$lowongan
        ]);

    }

    public function indexnonlogin(){
        $perusahaan = userCompanyModels::with(['user', 'detailalamat','lowongan'])
                        ->paginate(5);
        return view('main.perusahaanNonLogin.listPerusahaanNonLogin',[
            'perusahaan'=>$perusahaan
        ]);
    }

    public function searchCompanyNonLogin(Request $request){
        if ($request->has('search')) {
            $perusahaan = userCompanyModels::whereHas('user', function($query) use ($request) {
                                $query->where('nama_lengkap', 'LIKE', '%' . $request->search . '%');
                            })
                            ->with(['user', 'detailalamat', 'lowongan'])
                            ->paginate(3);
        } else {
            $perusahaan = userCompanyModels::with(['user', 'detailalamat', 'lowongan'])
                            ->paginate(3);
        }
        
        return view('main.perusahaanNonLogin.listPerusahaanNonLogin', [
            'perusahaan' => $perusahaan
        ]);
    }

    public function detailCompanyNonLogin($id){
        try {
            $decryptedId = Crypt::decrypt($id);
            $perusahaan = userCompanyModels::with(['user', 'detailalamat'])->findOrFail($decryptedId);
           
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            abort(404, 'Invalid ID');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            abort(404, 'Company not found');
        }
    
        return view('main.perusahaanNonLogin.listPerusahaanDetailNonLogin',[
            'perusahaan' => $perusahaan
            
        ]);

    }

    public function detailCompanyLowonganNonLogin($id){
        try {
            $decryptedId = Crypt::decrypt($id);
            $perusahaan = userCompanyModels::with(['user', 'detailalamat', 'lowongan'])
                            ->findOrFail($decryptedId);
            $lowongan= Lowongan::where('fkusercompany',$perusahaan->id)
                            ->with('company')->paginate(4);
            

        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            abort(404, 'Invalid ID');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            abort(404, 'Company not found');
        }
    
        return view('main.perusahaanNonLogin.listPerusahaanDetailLowonganNonLogin',[
            'perusahaan' => $perusahaan,
            'lowongan'=>$lowongan
        ]);

    }

    public function lamarKerja(Request $request){
        
    }

}
