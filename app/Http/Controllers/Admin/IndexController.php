<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index() {
        $users = DB::table('users')->get();
        
        return view('Admin/index', [
            'users'=>$users
        ]);
    }
}
