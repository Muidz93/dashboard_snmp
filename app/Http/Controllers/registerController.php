<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required'
        ]);

        $user = new User;
        $user -> name = $request -> name;
        $user -> username = $request -> username;
        $user -> email = $request -> email;
        $user -> password = bcrypt($request -> password);
        $user -> save($validatedData);

        $request -> session() -> flash('success', 'Registration successfull! Please login');
        return redirect('/login');
    }
}
