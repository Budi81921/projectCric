<?php

namespace App\Http\Controllers\perusahaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class loginPerusahaanController extends Controller
{
    public function index(){
        return view('perusahaan.register_perusahaan');
    }
    public function loginCompany(Request $request){
        $validator=Validator::make($request->all(),[
            'email2'=>'required|email',
            'password2'=>'required'
        ]);

        if ($validator->fails()) {
            Log::error('Login failed due to validation errors.', ['errors' => $validator->errors()]);
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $loginInfo=[
            'email'=>$request->email2,
            'password'=>$request->password2
        ];
        if($validator->passes()){
            if(Auth::attempt($loginInfo)){
                $user = Auth::user();
                if ($user->role === 'company') {
                    Log::info('Company login successful.', ['user_id' => $user->id]);
                    return redirect()->route('company.index');
                } else {
                    Auth::logout(false);
                    Log::error('Login failed, user is not a company.', ['user_id' => $user->id]);
                    return redirect()->back()->withErrors('email or password invalid');
                }
        }else {
            Log::error('Login failed, invalid credentials.', ['email' => $request->email2]);
            return redirect()->back()->withErrors('email or password invalid');
        }
        }
    
    }
}
