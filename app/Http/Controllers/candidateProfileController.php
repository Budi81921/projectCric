<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\userCandidateModel;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class candidateProfileController extends Controller
{
    public function index(){
        $id  = Auth::user();
        $candidateProfile= $id->candidate;
        $usercandidate = userCandidateModel::find('id');


        return view('profile.editbiodata',compact('id','candidateProfile','usercandidate'));
    }
    public function updateProfileCandidate(Request $request){
        $id = Auth::user();

        $this->validate($request, [
            'nama_lengkap' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'checkbox' => 'required',
            'universitas' => 'required|string',
            'email' => 'required|email|unique:users,email,'.$id->id.'',
            'nomor_handphone' => 'required|string',
            'gelar' => 'required|string',
        ]);
        $user=User::find($id->id);
       
        $candidateProfile = $id->candidate;
        $usercandidate = userCandidateModel::find($candidateProfile->id); 

        $user->update([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
        ]);

        $usercandidate->update([
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'gender' => $request->checkbox,
            'universitas' => $request->universitas,
            'nomor_handphone' => $request->nomor_handphone,
            'gelar' => $request->gelar,
        ]);

        return redirect()->back()->with('success', 'Profile updated successfully');
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
        $usercandidate = userCandidateModel::find($candidateProfile->id);

        $this->validate($request, [
            'deskripsi' => 'required|string',
            'cv' => 'required|file|mimes:pdf',
            'portofolio' => 'required|file'
        ]);

        

        if (!$candidateProfile) {
            return redirect()->back()->with('error', 'Candidate profile not found.');
        }
    
        
    
        // Handle file uploads
        if ($request->hasFile('cv') && $request->file('cv')->isValid()) {
            $cv = $request->file('cv');
            $cvName = $cv->getClientOriginalName();
            Storage::delete("public/userCandidate/{$usercandidate->id}/cv/" . $usercandidate->cv);
            
            $cv->storeAs("public/userCandidate/{$usercandidate->id}/cv", $cvName);

        } else {
            return redirect()->back()->with('error', 'Invalid CV file.');
        }
    
        if ($request->hasFile('portofolio') && $request->file('portofolio')->isValid()) {
            $portofolio = $request->file('portofolio');
            $portofolioName = $portofolio->getClientOriginalName();
            Storage::delete("public/userCandidate/{$usercandidate->id}/portofolio/" . $usercandidate->portofolio);

            $portofolio->storeAs("public/userCandidate/{$usercandidate->id}/portofolio", $portofolioName);
        } else {
            return redirect()->back()->with('error', 'Invalid portofolio file.');
        }
       
        // Update the candidate profile with the new information
        $usercandidate->update([
            'deskripsi' => $request->deskripsi,
            'cv' => $cvName,
            'portofolio' => $portofolioName
        ]);

    
        return redirect()->back()->with('success', 'Profile updated successfully');
    }
    public function indexJobList(){
        return view('profile.joblist');
    }
}
