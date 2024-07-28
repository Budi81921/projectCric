<?php

namespace App\Http\Controllers\perusahaan;

use App\Http\Controllers\Controller;
use App\Models\detailAlamatCompany;
use App\Models\User;
use App\Models\userCompanyModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class companyProfileController extends Controller
{
    public function index(){
        $id = Auth::user();
        $user=User::find($id->id);
        $companyProfile = $id->company;
        $usercompany = userCompanyModels::with('detailalamat')->find($companyProfile->id); // Load the 'detailalamat' relation
        $detailAlamat = $usercompany->detailalamat;
        return view('perusahaan.company-profil', compact('id','companyProfile','detailAlamat','user'));
    }
    public function updateProfileCompany(Request $request){
        $id = Auth::user();
        $user=User::find($id->id);
        $companyProfile = $id->company;
        $usercompany=userCompanyModels::find($companyProfile->id);
        $detailalamat=$usercompany->detailalamat();
        // $detailAlamatPerusahaan=detailAlamatCompany::find($detailalamat->id);
        // $detailAlamatPerusahaan= detailAlamatCompany::where('fkusercompany',$detailalamat->id)
        //                             ->with('company');
        
        $validator = Validator::make($request->all(),[
            'nama_perusahaan'=>'required',
            'email'=>'required|email|unique:users,email,' . $id->id,
            'deskripsi_perusahaan'=>'required|string',
            'nomor_telepon'=>'required|string|min:10|max:12',
            'tahun_berdiri' => 'required|integer|min:1900|max:' . date('Y'),
            'url_perusahaan'=>'required',
            'Alamat_detail'=>'required',
            'foto_profil_company'=>'mimes:jpg,png',
            'background_profil_company'=>'mimes:jpg,png,jpeg'
            // 'provinsi'=>'required',
            // 'kota_kabupaten'=>'required',
            // 'kecamatan'=>'required',
            // 'kelurahan'=>'required',
            // 'kode_pos'=>'required|min:1|max:5'
        ]);

        if($validator->fails()){
            Log::error('profile update failed due to validation errors.', ['errors' => $validator->errors()]);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try{

            if ($request->hasFile('foto_profil_company')) {
                $fotoProfileCompany = $request->file('foto_profil_company');
                $fotoProfileCompanyName = $fotoProfileCompany->getClientOriginalName();
                Storage::delete("public/userCompany/{$usercompany->id}/fotoProfileCompany/" . $companyProfile->foto_profil_company);
                $fotoProfileCompany->storeAs("public/userCompany/{$usercompany->id}/fotoProfileCompany", $fotoProfileCompanyName);
                Log::info("File uploaded: " . $fotoProfileCompanyName);
                $usercompany->foto_profil_company = $fotoProfileCompanyName;
            }

            if ($request->hasFile('background_profil_company')) {
                $backgroundProfileCompany = $request->file('background_profil_company');
                $backgroundProfileCompanyName = $backgroundProfileCompany->getClientOriginalName();
                Storage::delete("public/userCompany/{$usercompany->id}/fotoProfileCompany/" . $companyProfile->background_profil_company);
                $backgroundProfileCompany->storeAs("public/userCompany/{$usercompany->id}/fotoProfileCompany", $backgroundProfileCompanyName);
                Log::info("File uploaded: " . $backgroundProfileCompanyName);
                $usercompany->background_profil_company = $backgroundProfileCompanyName;
            }

            $user->update([
                'nama_lengkap' => $request->nama_perusahaan,
                'email' => $request->email,
            ]);
    
            $usercompany->update([
                'deskripsi_perusahaan'=> $request->deskripsi_perusahaan,
                'nomor_telepon'=> $request->nomor_telepon,
                'tahun_berdiri'=> $request->tahun_berdiri,
                'url'=> $request->url_perusahaan
            ]);
    
            $detailalamat->update([
                'Alamat_detail'=> $request->Alamat_detail,
                'provinsi'=> $request->provinsi,
                'kota_kabupaten'=> $request->kabupaten_kota,
                'kecamatan'=> $request->kecamatan,
                'kelurahan'=> $request->kelurahan,
                'kode_pos'=> $request->kode_pos,
                
            ]);

            Log::info('Candidate profile updated successfully.', [
                'user_id' => $id->id,
                'updated_attributes1' => $user->getDirty(),
                'updated_attributes2' => $usercompany->getDirty(),
                // 'updated_attributes3' => $detailalamat->getDirty(),
            ]); 
            return redirect()->back()->with('success', 'company profile updated successfully');

        } catch (\Exception $e) {
            Log::error('Error updating profile: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update profile');
        }
        
    }
    public function logOutCompany(){
        Auth::logout();
        Log::info("log out Berhasil");
        return redirect('/');
    }
}
