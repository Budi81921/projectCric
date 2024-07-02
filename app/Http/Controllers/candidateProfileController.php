<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\userCandidateModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class candidateProfileController extends Controller
{
    public function index(){
        $id  = Auth::user();
        $candidateProfile= $id->candidate;
        $usercandidate = userCandidateModel::find('id');
        return view('biodataKandidat.profilpelamar-editbiodata',compact('id','candidateProfile','usercandidate'));
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
}
