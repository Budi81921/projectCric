<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class loginController extends Controller
{
    public function index(){

    }
    public function authentication(Request $request){
        $validator=Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $loginInfo=[
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if($validator->passes()){
            if(Auth::attempt($loginInfo)){
                return redirect('/homecandidate');
            }else {
                return redirect()->back()->withErrors('email or password invalid');
            }
        }else {
            return redirect()->back()->withErrors('email or password invalid');
        }
    }
    public function logOutCandidate(){
        Auth::logout();
        return redirect('/');
    }

}
