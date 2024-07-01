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


        return view('profile.editbiodata',compact('id','candidateProfile','usercandidate'));
    }
    public function updateProfileCandidate(Request $request){

        $this->validate($request,[
            'tanggal_lahir'=> 'required|date',
            'alamat'=>'required|string',
            'gender'=>'required',
            'universitas'=>'required'
        ]);
        $usercandidate = userCandidateModel::find('id');
        $usercandidate->update([

        ]);

    }
}
