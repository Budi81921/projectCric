<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\detailAlamatCompany;
use App\Models\Lowongan;
use App\Models\userCompanyModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class listPerusahaanController extends Controller
{
    public function index(){
        $perusahaan = userCompanyModels::with(['user', 'detailalamat','lowongan'])
                        ->paginate(5);
        $kotaKabupaten = detailAlamatCompany::select('kota_kabupaten')->distinct()->get();
        return view('main.perusahaan.listPerusahaan',[
            'perusahaan'=>$perusahaan,
            'kotaKabupaten'=>$kotaKabupaten
        ]);
    }

    public function searchCompany(Request $request){
        $kotaKabupaten = detailAlamatCompany::select('kota_kabupaten')->distinct()->get();
    
        $query = userCompanyModels::query();

        // Apply filters based on the request
        if ($request->has('search') && !empty($request->search) && $request->has('area_kota') && !empty($request->area_kota)) {
            // Both search and area_kota are provided
            $query->whereHas('user', function($query) use ($request) {
                $query->where('nama_lengkap', 'LIKE', '%' . $request->search . '%');
            })->whereHas('detailalamat', function($query) use ($request) {
                $query->where('kota_kabupaten', $request->area_kota);
            });
        } elseif ($request->has('search') && !empty($request->search)) {
            // Only search is provided
            $query->whereHas('user', function($query) use ($request) {
                $query->where('nama_lengkap', 'LIKE', '%' . $request->search . '%');
            });
        } elseif ($request->has('area_kota') && !empty($request->area_kota)) {
            // Only area_kota is provided
            $query->whereHas('detailalamat', function($query) use ($request) {
                $query->where('kota_kabupaten', $request->area_kota);
            });
        }
        // Fetch results with pagination
        $perusahaan = $query->with(['user', 'detailalamat', 'lowongan'])->paginate(5);

        
        return view('main.perusahaan.listPerusahaan', [
            'perusahaan' => $perusahaan,
            'kotaKabupaten' => $kotaKabupaten // Kirim data kota/kabupaten ke view
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
        $kotaKabupaten = detailAlamatCompany::select('kota_kabupaten')->distinct()->get();
        return view('main.perusahaanNonLogin.listPerusahaanNonLogin',[
            'perusahaan'=>$perusahaan,
            'kotaKabupaten'=>$kotaKabupaten
        ]);
    }

    public function searchCompanyNonLogin(Request $request){
        $kotaKabupaten = detailAlamatCompany::select('kota_kabupaten')->distinct()->get();
    
        $query = userCompanyModels::query();

        // Apply filters based on the request
        if ($request->has('search') && !empty($request->search) && $request->has('area_kota') && !empty($request->area_kota)) {
            // Both search and area_kota are provided
            $query->whereHas('user', function($query) use ($request) {
                $query->where('nama_lengkap', 'LIKE', '%' . $request->search . '%');
            })->whereHas('detailalamat', function($query) use ($request) {
                $query->where('kota_kabupaten', $request->area_kota);
            });
        } elseif ($request->has('search') && !empty($request->search)) {
            // Only search is provided
            $query->whereHas('user', function($query) use ($request) {
                $query->where('nama_lengkap', 'LIKE', '%' . $request->search . '%');
            });
        } elseif ($request->has('area_kota') && !empty($request->area_kota)) {
            // Only area_kota is provided
            $query->whereHas('detailalamat', function($query) use ($request) {
                $query->where('kota_kabupaten', $request->area_kota);
            });
        }
        // Fetch results with pagination
        $perusahaan = $query->with(['user', 'detailalamat', 'lowongan'])->paginate(5);

        
        return view('main.perusahaanNonLogin.listPerusahaanNonLogin', [
            'perusahaan' => $perusahaan,
            'kotaKabupaten' => $kotaKabupaten // Kirim data kota/kabupaten ke view
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
