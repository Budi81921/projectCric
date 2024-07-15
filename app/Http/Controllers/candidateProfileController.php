<?php

namespace App\Http\Controllers;

use App\Models\detail_lowongan;
use App\Models\Lowongan;
use App\Models\User;
use App\Models\userCandidateModel;
use App\Models\userCompanyModels;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class candidateProfileController extends Controller
{
    public function index(){
        $id  = Auth::user();
        $candidateProfile= $id->candidate;
        $usercandidate = userCandidateModel::find($candidateProfile->id);
        $fotoProfileCandidateUrl = Storage::url("public/userCandidate/{$candidateProfile->id}/fotoProfileCandidate/" . $candidateProfile->fotoProfilCandidate);

        
    
        return view('profile.editbiodata',compact('id','candidateProfile','usercandidate','fotoProfileCandidateUrl'));
    }
    public function updateProfileCandidate(Request $request){
        $id = Auth::user();
        $user = User::find($id->id);
        $candidateProfile = $id->candidate;
        if (!$candidateProfile) {
            throw new \Exception('Candidate profile not found for user ' . $id->id);
        }

        $usercandidate = userCandidateModel::find($candidateProfile->id);

        if (!$usercandidate) {
            throw new \Exception('User candidate not found for user ' . $id->id);
        }

        $validator = Validator::make($request->all(),[
                'fotoProfileCandidate' => 'mimes:png,jpg,jpeg',
                'nama_lengkap' => 'required|string',
                'tanggal_lahir' => 'required|date',
                'alamat' => 'required|string',
                'checkbox' => 'required',
                'universitas' => 'required|string',
                'email' => 'required|email|unique:users,email,' . $id->id,
                'nomor_handphone' => 'required|string|min:10|max:12',
                'gelar' => 'required|string',
        ]);

        if($validator->fails()){
            Log::error('Registration failed due to validation errors.', ['errors' => $validator->errors()]);
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
    
    
            // Handle file upload if exists
            if ($request->hasFile('fotoProfileCandidate')) {
                $fotoProfileCandidate = $request->file('fotoProfileCandidate');
                $fotoProfileCandidateName = $fotoProfileCandidate->getClientOriginalName();
                Storage::delete("public/userCandidate/{$usercandidate->id}/fotoProfileCandidate/" . $candidateProfile->fotoProfilCandidate);
                $fotoProfileCandidate->storeAs("public/userCandidate/{$usercandidate->id}/fotoProfileCandidate", $fotoProfileCandidateName);
                Log::info("File uploaded: " . $fotoProfileCandidateName);
                $usercandidate->fotoProfilCandidate = $fotoProfileCandidateName;
            }
    
            // Update user and candidate profile
            $user->update([
                'nama_lengkap' => $request->nama_lengkap,
                'email' => $request->email,
            ]);
          
             // Get fields that were updated
           
            $usercandidate->update([
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
                'gender' => $request->checkbox,
                'universitas' => $request->universitas,
                'nomor_handphone' => $request->nomor_handphone,
                'gelar' => $request->gelar,
            ]);
      
            Log::info('Candidate profile updated successfully.', [
                'user_id' => $id->id,
                'updated_attributes1' => $user->getDirty(),
                'updated_attributes2' => $usercandidate->getDirty(),
            ]); 
            return redirect()->back()->with('success', 'Profile updated successfully');

        } catch (\Exception $e) {
            Log::error('Error updating profile: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update profile');
        }
    }

    public function indexResume(){
        $id  = Auth::user();
        $candidateProfile= $id->candidate;
        $usercandidate = userCandidateModel::find('id');

        return view('profile.editresume', compact('id','candidateProfile','usercandidate'));
    }
    public function updateResume(Request $request){

        $id = Auth::user();
        $candidateProfile = $id->candidate;
    
        if (!$candidateProfile) {
            throw new \Exception('Candidate profile not found for user ' . $id->id);
        }
    
        $usercandidate = userCandidateModel::find($candidateProfile->id);
    
        if (!$usercandidate) {
            throw new \Exception('User candidate not found for user ' . $id->id);
        }
    
        $validator = Validator::make($request->all(), [
            'deskripsi' => 'required|string',
            'cv' => 'file|mimes:pdf',
            'portofolio' => 'file',
        ]);

        if ($validator->fails()) {
            Log::error('Validation failed for resume update.', ['errors' => $validator->errors()]);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
    
            // Handle file uploads for CV
            if ($request->hasFile('cv') ) {
                $cv = $request->file('cv');
                $cvName = $cv->getClientOriginalName();
                Storage::delete("public/userCandidate/{$usercandidate->id}/cv/" . $usercandidate->cv);
                $cv->storeAs("public/userCandidate/{$usercandidate->id}/cv", $cvName);
                $usercandidate->cv = $cvName; 
            } 
    
            // Handle file uploads for Portofolio
            if ($request->hasFile('portofolio') ) {
                $portofolio = $request->file('portofolio');
                $portofolioName = $portofolio->getClientOriginalName();
                Storage::delete("public/userCandidate/{$usercandidate->id}/portofolio/" . $usercandidate->portofolio);
                $portofolio->storeAs("public/userCandidate/{$usercandidate->id}/portofolio", $portofolioName);
                $usercandidate->portofolio = $portofolioName;
            }
    
            // Update the candidate profile with the new information
            $usercandidate->update([
                'deskripsi' => $request->deskripsi
            ]);
    
            Log::info('Candidate resume updated successfully.', [
                'user_id' => $id->id,
                'updated_attributes' => $usercandidate->getDirty(),
            ]); 
            return redirect()->back()->with('success', 'Profile updated successfully');

        } catch (\Exception $e) {

            Log::error('Error updating resume: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update resume profile');
        }
    }
    public function indexJobList(){
       

    $user = Auth::user();

    // Mengambil kandidat dari pengguna yang login
    $candidate = $user->candidate;

    // Jika kandidat ada, ambil detail lowongan yang berhubungan
    if ($candidate) {
        $jobs = detail_lowongan::where('fkusercandidate', $candidate->id)
                    ->with(['lowongan','lowongan.company.user','lowongan.company.detailalamat'])
                    ->get();
    } else {
        $jobs = collect(); // Jika tidak ada kandidat, set jobs sebagai koleksi kosong
    }
    return view('profile.joblist', [
        'jobs' => $jobs
    ]);

    }
}
