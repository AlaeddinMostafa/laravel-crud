<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
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
        $users = User::query()->orderBy('id','DESC')->get();
        $countUsers = User::query()->count();
        $email_verified_at = User::query()->where('email_verified_at','!=' ,Null)->count();
        $remember_token = User::query()->where('remember_token','!=' ,Null)->count();
        return view('admin.index',compact('users','countUsers','email_verified_at','remember_token'));
    }
}
