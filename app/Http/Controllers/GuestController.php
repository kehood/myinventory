<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function signUp(Request $request)
    {
        $user = $request->email ?? false;
        return view('auth.register', compact('user'));
    }
}
