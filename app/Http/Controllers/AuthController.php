<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('authentication.login.index', [
            'title' => 'Login',
            'loginImage' => ['url' => './src/assets/images/login.svg', 'alt' => 'Login'],
        ]);
    }

    public function authenticate(Request $request) {
      $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'min:8'],
      ], [
        'email.required' => 'Email tidak boleh kosong',
        'email.email' => 'Email tidak valid',
        'password.required' => 'Password tidak boleh kosong',
        'password.min' => 'Password minimal 8 karakter',
      ]);

      if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/');
      }
      return back()->withErrors([
        'error' => 'Email atau password salah',
      ]);
    }

    public function logout(Request $request) {
      Auth::logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return redirect('/');
    }
}
