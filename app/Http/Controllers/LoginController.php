<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use App\Models\Login;

class LoginController extends Controller
{
    public function __construct() {
        $this->login = new Login();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function autentifikasi(Request $request)
    {
        $credentials = $request->validate([
            'email'                 => ['required', 'email'],
            'password'              => ['required'],
        ],[
            'email.required'        => 'Email harus diisi.',
            'email.email'           => 'Email tidak valid.',
            'password.required'     => 'Password harus diisi.',
        ]);

        if (Auth::attempt($credentials, $this->login->getAllData())) {
            $request->session()->regenerate();
            $request->session()->passwordConfirmed();

            return redirect()->intended('/dashboard');
        } else if (!Hash::check($request->password, $this->login->getAllData())) {
            return back()->withErrors([
                'password'  => 'Kata sandi yang Anda masukkan salah.',
            ]);
        }

        return back()->withErrors([
            'email'     => 'Email yang Anda masukkan salah.',
            'password'  => 'Kata sandi yang Anda masukkan salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
