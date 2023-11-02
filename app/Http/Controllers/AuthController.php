<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba melakukan login
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Jika berhasil login, redirect ke halaman dashboard atau halaman yang sesuai
            return redirect('/dashboard');
        }

        // Jika login gagal, kembali ke halaman login dengan pesan error
        return redirect()->route('login')->withErrors(['Login failed.']);
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Buat pengguna baru
        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect ke halaman login setelah registrasi berhasil
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        return redirect('/');
    }
}
