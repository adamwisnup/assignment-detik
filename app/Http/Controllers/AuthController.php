<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role_id === 1) {
                $request->session()->put('user', $user->id);
                return redirect()->route('admin.dashboard');
            } else {
                $request->session()->put('user', $user->id);
                return redirect()->route('user.dashboard');
            }
        }

        return redirect()->route('login')->with('error', 'Login gagal');
    }
    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
