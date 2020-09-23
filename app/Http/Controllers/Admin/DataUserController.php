<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;

class DataUserController extends Controller
{

    public function index(){
        $data['user']= \App\User::all();
        return view('data_user.index',$data);
    }

    public function add_alumni(){
        return view('data_user.add_alumni');
    }

    function insert(Request $request)
    {
        return User::create([
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'status'    => "2"
        ]);

        return redirect('/DataUser');
    }
}
