<?php

namespace App\Http\Controllers\perusahaan;

use App\Http\Controllers\Controller;
use App\Models\detail_lowongan;
use App\Models\kategoriPekeerjaanmodels;
use App\Models\Lowongan;
use App\Models\User;
use App\Models\userCompanyModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

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
        $kategoriPekerjaan = kategoriPekeerjaanmodels::all();
        
        if ($companyProfile) {
            $jobs = Lowongan::where('fkusercompany', $companyProfile->id)
                        ->with(['detailLowongan','company','kategoripekerjaan'])
                        ->get();
        } else {
            $jobs = collect(); // Jika tidak ada kandidat, set jobs sebagai koleksi kosong
        }
        return view('perusahaan.profileLowonganCompany.create_company_lowongan',[
            'jobs'=>$jobs,
            'kategoriPekerjaan'=>$kategoriPekerjaan
        ]);
    }

    public function createLowonganProses(Request $request){
        $id = Auth::user();
        $companyProfile = $id->company;
        $company1= userCompanyModels::find($companyProfile->id);
        $kategoriPekerjaan = kategoriPekeerjaanmodels::all();

        $validator=Validator::make(request()->all(),[
            'title_lowongan'=>'required|string',
            'deskripsiPekerjaan'=>'required|string',
            // 'fkKategoriPekerjaan' => 'required|exists:kategoripekerjaan,id',
            'tipePekerjaan' => 'required|in:Full_Time,Freelance,Parti_Time,Internship',
            'kualifikasi'=>'required|string',
            'gaji_minimal'=>'required|numeric',
            'gaji_maximal'=>'required|numeric',
            'lokasi' => 'required|in:Hybrid,WFO,WFH',
            'pendidikan'=>'required|string',
            'pengalaman'=>'required|string'
            
        ]);

        $validator->after(function ($validator) use ($request) {
            if ($request->gaji_minimal >= $request->gaji_maximal) {
                $validator->errors()->add('gaji_minimal', 'Minimal Gaji harus kurang dari Maksimal Gaji');
                $validator->errors()->add('gaji_maximal', 'Maksimal Gaji harus lebih dari Minimal Gaji');
            }
        });

        if($validator->fails()){
            Log::info('creating job failed due to validation errors.', ['errors' => $validator->errors()]);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try{
            $lowongan =  new Lowongan();
            $lowongan->title_lowongan = $request->title_lowongan;
            $lowongan->deskripsiPekerjaan = $request->deskripsiPekerjaan;
            $lowongan->fkKategoriPekerjaan = $request->fkKategoriPekerjaan;
            $lowongan->tipePekerjaan = $request->tipePekerjaan;
            $lowongan->kualifikasi = $request->kualifikasi;
            $lowongan->gaji_minimal = $request->gaji_minimal;
            $lowongan->gaji_maximal = $request->gaji_maximal;
            $lowongan->lokasi = $request->lokasi;
            $lowongan->pendidikan = $request->pendidikan;
            $lowongan->pengalaman = $request->pengalaman;
            $lowongan->fkusercompany = $company1->id;
            $lowongan->save();

            Log::info('Job  created successfully.', ['user_id' => $id->id]);
            return redirect('/company/profile/lowongan')->with('success', 'Job created successfully!');

        } catch (\Exception $e) {
            Log::error('Error updating profile: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to create lowongan');
        }
    }

    public function editLowonganIndex($id){
        try {
            $decryptedId = Crypt::decrypt($id);
            $jobs = Lowongan::with(['company', 'kategoripekerjaan'])->findOrFail($decryptedId);
            $kategoriPekerjaan = kategoriPekeerjaanmodels::all();
           
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            abort(404, 'Invalid ID');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            abort(404, 'lowongan not found');
        }
    
        return view('perusahaan.profileLowonganCompany.edit_company_lowongan',[
            'jobs' => $jobs,
            'kategoriPekerjaan'=>$kategoriPekerjaan
            
        ]);
    }

    public function editLowonganProses(Request $request){
        $validator=Validator::make(request()->all(),[
            'title_lowongan'=>'required|string',
            'deskripsiPekerjaan'=>'required|string',
            // 'fkKategoriPekerjaan' => 'required|exists:kategoripekerjaan,id',
            'tipePekerjaan' => 'required|in:Full_Time,Freelance,Parti_Time,Internship',
            'kualifikasi'=>'required|string',
            'gaji_minimal'=>'required|numeric',
            'gaji_maximal'=>'required|numeric',
            'lokasi' => 'required|in:Hybrid,WFO,WFH',
            'pendidikan'=>'required|string',
            'pengalaman'=>'required|string'
            
        ]);

        $validator->after(function ($validator) use ($request) {
            if ($request->gaji_minimal >= $request->gaji_maximal) {
                $validator->errors()->add('gaji_minimal', 'Minimal Gaji harus kurang dari Maksimal Gaji');
                $validator->errors()->add('gaji_maximal', 'Maksimal Gaji harus lebih dari Minimal Gaji');
            }
        });

        if($validator->fails()){
            Log::info('creating job failed due to validation errors.', ['errors' => $validator->errors()]);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $lowongan = Lowongan::find(Crypt::decrypt($request->id));
            $lowongan->update([
                'title_lowongan'=>$request->title_lowongan,
                'deskripsiPekerjaan'=>$request->deskripsiPekrjaan,
                'fkKategoriPekerjaan' => $request->fkKategoriPekerjaan,
                'tipePekerjaan' => $request->tipePekerjaan,
                'kualifikasi'=>$request->kualifikasi,
                'gaji_minimal'=>$request->gaji_minimal,
                'gaji_maximal'=>$request->gaji_maximal,
                'lokasi' => $request->lokasi,
                'pendidikan'=>$request->pendidikan,
                'pengalaman'=>$request->pengalaman

            ]);

            Log::info("Job listing ID: {$request->id} successfully updated.");
            return redirect()->route('company.lowongan.edit', ['id' => Crypt::encrypt($lowongan->id)])
                ->with('success', 'Job updated successfully.');
        } catch (\Exception $e) {
            Log::error("Error updating job  ID: {$request->id}", ['exception' => $e]);
            return redirect()->back()->withErrors('Failed to update job listing. Please try again.');
        }
    }

    public function deleteLowongan($id){
        try {
            $decryptedId = Crypt::decrypt($id);
            Lowongan::findOrFail($decryptedId)->delete();
            Log::info("Job deleted successfully", ['id' => $decryptedId]);
            return redirect()->back()->with('successDelteJob', 'Job deleted successfully!');

        } catch (\Exception $e) {
            Log::error("Failed to delete job listing", ['id' => $decryptedId, 'error' => $e->getMessage()]);
            return redirect()->back()->withErrors('error', 'Failed to delete job listing.');
        }
    }
}
