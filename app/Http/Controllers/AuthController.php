<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function register() {
        return view('register');
    }

    function createUser(Request $request) {
        return $request->all();
    }
}
