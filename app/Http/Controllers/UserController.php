<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login() {
        return view('auth.login', [
            'title' => 'Login Page',
        ]);
    }
}