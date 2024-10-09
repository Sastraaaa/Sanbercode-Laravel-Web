<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'nationality' => 'required',
            'bio' => 'required'
        ]);

        return redirect('/welcome')->with([
            'firstname' => $validatedData['firstname'],
            'lastname' => $validatedData['lastname']
        ]);
    }

    public function welcome()
    {
        return view('welcome')->with([
            'firstname' => session('firstname'),
            'lastname' => session('lastname')
        ]);
    }
}