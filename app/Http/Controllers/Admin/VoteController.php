<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index(){
        $data['candidate'] = \App\Users_vote::all();
        return view('vote.vote_all',$data);
    }
}
