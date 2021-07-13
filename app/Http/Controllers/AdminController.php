<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $users = User::all();
        $posts = DB::table('posts')->get();
        return view('admin.index',  compact('users', 'posts'));
    }
}
