<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $data['candidate'] = \App\Users_vote::all();
        $user = Auth::user()->id;
        $cek = DB::select("select * from users_data where id_users = '$user'",[1]);
        foreach($cek as $c){
        }
        if(isset($c->vote) != null){
            return view('vote.done', $data);
        }
        return view('vote.index', $data);
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
