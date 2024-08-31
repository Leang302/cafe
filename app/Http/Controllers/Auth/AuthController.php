<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        if(Auth::check()){
            $user= Auth::user();
            if($user->role==1){
                return redirect()->route('home');
            }else{
                return view('enduser.enduser');
            }

        }
        return view('auth.login');

    }
    public function login(Request $request){
        $validation = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            if(Auth::check()){
                $user= Auth::user();
                if($user->role==1){
                    return redirect()->route('home');
                }else{
                    return view('enduser.enduser');
                }

            }
            // return redirect()->route('home');
        }else{
            return redirect()->route('auth.login');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
