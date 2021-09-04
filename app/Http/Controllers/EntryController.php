<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntryController extends Controller
{
    public function register(Request $request){
    }
    public function login(Request $request){
        $credentials = $request->only('username', 'password');
        if(Auth::attempt($credentials)){
        return redirect()->route('index');
        }
        else{
            return back()->with('error-login','Invalid account and/or password. Please check and try again.');
        }

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}
