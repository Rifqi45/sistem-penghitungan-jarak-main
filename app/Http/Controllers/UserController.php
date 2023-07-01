<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;

class UserController extends Controller
{
    public function home(Request $request)
    {
        $data = Sekolah::all();

        return view('home', compact('data'));
    }

    public function login(Request $request)
    {
        return redirect()->route('home');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt($credentials))
        {
            return redirect()->route('home');
        }

        return back()->withErrors([
            'password' => 'username atau password salah'
        ]);
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
