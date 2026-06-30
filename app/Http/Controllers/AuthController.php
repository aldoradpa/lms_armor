<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Username harus diisi',
            'password.required' => 'Password harus diisi',
        ]);

        $dummyUsername = 'admin';
        $dummyPassword = 'password123';

        if ($request->username === $dummyUsername && $request->password === $dummyPassword) {
            $user = User::firstOrCreate(
                ['email' => 'admin@arto-moro.test'],
                [
                    'name' => 'Andi Pratama',
                    'password' => Hash::make($dummyPassword),
                ]
            );

            Auth::login($user);

            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'username' => 'Username atau Password salah!'
        ])->withInput($request->only('username'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
