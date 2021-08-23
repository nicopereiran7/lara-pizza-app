<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return redirect('/');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function register() {
        if(Auth::user()) {
            return redirect()->intended('/perfil');
        }

        return view('register');
    }

    public function addUser(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'repeatPassword' => 'required|same:password',
        ]);

        $user = new User($request->only('name', 'email', 'password', 'repeatPassword'));
        $user->isAdmin = 0;
        $user->save();

        Auth::login($user);

        return redirect()->intended('/perfil');
    }
}
