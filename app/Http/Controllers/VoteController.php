<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoteController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('vote.index');
    }

    public function insert_vote(Request $request){
        $vo =$request->vote;
        if(($vo >=0) && ($vo < 50)){
            $v = 1;
        } elseif(($vo >50) && ($vo <=100)){
            $v = 2;
        }
        \App\Users_data::create([
            'id_users'   => $request->id_users,
            'nim'       => $request->nim,
            'nama'      => $request->nama,
            'vote'      => $v
        ]);
        return redirect('/');
    }
}
