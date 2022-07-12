<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class loginController extends Controller
{
    public function index()
    {
        $login = new User;
        $login = DB::table('users')->get();
        return view('login.index', compact('login'), [
            'title' => 'Login'
        ]);

        // return $login;
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);

        // return $credentials;
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Alert::success('Login successful', 'Thank You');
            return redirect()->intended('/');
            // return $credentials;
        }else{
            return back() -> with('loginError', 'Login Failed!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        Alert::success('Logout successful', 'Thank You');
        return redirect('/login');
    }

}
