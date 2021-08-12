<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use App\User;
use Hash;

class LoginController extends Controller{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request, User $user){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->intended();
        }
        
    }

    public function logout(){
        Auth::logout();
       return  redirect('/');
    }



}