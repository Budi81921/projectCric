<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\userCandidateModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class registrationController extends Controller
{

    //show registration page
    public function index(){
        return view('home.register');
    }

    //show process registration
    public function registrationCandidate(Request $request){
        $validator= Validator::make($request->all(),[
            'fullName'=>'required|string',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:8|max:20|same:confirmPassword|string',
            'confirmPassword'=>'required|string'
        ]);
        
        if($validator->passes()){
            $users =  new User();
            $users->nama_lengkap = $request->fullName;
            $users->email = $request->email;
            $users->password = Hash::make($request->password);
            $users->save();
            $usercandidate= new userCandidateModel();
            $usercandidate->fkidusercandidate= $users->id;
            $usercandidate->save();
            $message= $validator->getMessageBag();
            Log::info($message->toJson(JSON_PRETTY_PRINT));
            return redirect('/');
        } else{
            Log::info('gagal regis');
            return redirect()->back();
        }
    }
    
}
