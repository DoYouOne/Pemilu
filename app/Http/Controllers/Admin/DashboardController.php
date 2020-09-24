<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $data = array(
            'user'      => DB::table('users')->count(),
            'jmlh'      => DB::table('users_vote')->sum('jumlah'),
            'golput'    => DB::select('SELECT COUNT(*) as jumlah FROM `users` as a where not EXISTS (select id_users from users_data as b WHERE a.id = b.id_users)')

        );
        return view('dashboard.index', $data);
    }
}
