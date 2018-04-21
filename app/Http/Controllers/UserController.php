<?php

namespace App\Http\Controllers;

use App\models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::where('status', 10)->get();
    }

    public function login()
    {
        return view('user.login');
    }
}
