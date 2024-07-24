<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class loginController extends Controller
{
    public function index(){

    }
    public function authentication(Request $request){
        $validator=Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if ($validator->fails()) {
            Log::info('Validation errors during login attempt.', ['errors' => $validator->errors()]);
            return redirect()->back()->withErrors($validator)->withInput();
        } 
        
        $loginInfo=[
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if($validator->passes()){
            if(Auth::attempt($loginInfo)){
                $user = Auth::user();
                if ($user->role === 'candidate') {
                    Log::info('Login successful.', ['user_id' => $user->id]);
                    return redirect('/home');
                } else {
                    Auth::logout(false);
                    Log::error('Login attempt not a candidate user.', ['user_id' => $user->id]);
                    return redirect()->back()->withErrors('email or password invalid');
                }
        }else {
            Log::error('Invalid login credentials.', ['email' => $request->email]);
            return redirect()->back()->withErrors('email or password invalid');
        }
    }
}
    public function logOutCandidate(){
        $user=Auth::user();
        Auth::logout();
        Log::info('User logged out successfully.', ['user_id' => $user->id]);
        return redirect('/');
    }

}
