<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function post_login(Request $request){
        // dd($request->all());
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::attempt($request->only('email','password'))){
            $role = DB::table('users')->where('email', $request->email)->first();
            // dd($role);
            if($role->status == '0'){
                return redirect('/dashboard');
            } else if($role->status == '1'){
                return redirect('/home');
            } else if($role->status == '2'){
                return redirect('/home');
            }
        } else{
            return redirect('/login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
