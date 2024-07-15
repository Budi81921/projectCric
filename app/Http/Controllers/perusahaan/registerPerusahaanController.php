<?php

namespace App\Http\Controllers\perusahaan;

use App\Http\Controllers\Controller;
use App\Models\detailAlamatCompany;
use App\Models\User;
use App\Models\userCompanyModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class registerPerusahaanController extends Controller
{
    public function index(){
        return view('perusahaan.register_perusahaan');
    }
    public function registrationPerusahaan(Request $request){
        $validator= Validator::make($request->all(),[
            'company_name'=>'required|string',
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
            $users->role= 'company';
            $users->save();

            $usercompany= new userCompanyModels();
            $usercompany->fkusercompany = $users->id;
            $usercompany->save();

            $alamatusercompany = new detailAlamatCompany();
            $alamatusercompany->fkusercompany=$usercompany->id;
            $alamatusercompany->save();
            Log::info('company registration successful.', ['user_id' => $users->id]);
            return redirect('/')->with('success', 'Registration successful!');
        } catch(\Exception $e){
            Log::error('Registration failed due to server error.', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Registration failed. Please try again later.');
        
        }
    }
}
