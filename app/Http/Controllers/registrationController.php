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
        return view('main.register');
    }

    //show process registration
    public function registrationCandidate(Request $request){
        $validator= Validator::make($request->all(),[
            'fullName'=>'required|string',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:8|max:20|same:confirmPassword|string',
            'confirmPassword'=>'required|string'
        ]);

        if($validator->fails()){
            Log::info('Registration failed due to validation errors.', ['errors' => $validator->errors()]);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try{
            $users =  new User();
            $users->nama_lengkap = $request->fullName;
            $users->email = $request->email;
            $users->password = Hash::make($request->password);
            $users->role='candidate';
            $users->save();
            $usercandidate= new userCandidateModel();
            $usercandidate->fkidusercandidate= $users->id;
            $usercandidate->save();
            Log::info('candidate registration successful.', ['user_id' => $users->id]);
            return redirect('/')->with('success', 'Registration successful!');
        } catch (\Exception $e){
            Log::error('Registration failed due to server error.', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Registration failed. Please try again later.');
        
        }
    }

}
