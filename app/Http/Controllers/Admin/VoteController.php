<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoteController extends Controller
{
    public function index(){
        $data['user']= DB::select('SELECT * FROM `users` left join users_data on users.id = users_data.id_users');
        return view('vote.vote_all',$data);
    }

    function delete_data($id){
            \App\Users_data::where('id', $id)->delete();
        return redirect('/vote/admin');
    }
}
