<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use App\Models\Login;
use App\Models\Penduduk;
use App\Models\AnggotaBPD;

class LoginController extends Controller
{
    public function __construct() {
        $this->login = new Login();
        $this->penduduk = new Penduduk();
        $this->angbpd = new AnggotaBPD();
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

    public function login(Request $request)
    {
        $validate = $request->validate([
            'email'                 => 'required|email',
            'password'              => 'required',
        ],[
            'email.required'        => 'Email harus diisi.',
            'email.email'           => 'Email tidak valid.',
            'password.required'     => 'Password harus diisi.',
        ]);

        $data = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];

        $info_pengguna = $this->login->getData($data);

        if(!$info_pengguna) {
            return back()->withErrors([
                'email'  => 'Email yang Anda masukkan salah.',
            ]);
        } else {
            // Mengecek password
            if(Hash::check($request->password, $info_pengguna->password)) {
                $request->session()->put('sid_login', $info_pengguna->id_login);
                $request->session()->put('sid_penduduk', $info_pengguna->id_penduduk);
                $request->session()->put('sid_angbpd', $info_pengguna->id_angbpd);
                $request->session()->put('spenduduk', $info_pengguna->penduduk);
                $request->session()->put('sangbpd', $info_pengguna->angbpd);
                $request->session()->put('sakses', $info_pengguna->akses);

                if($info_pengguna->akses == 'adm') {
                    return redirect()->intended('/dashboard');
                } elseif($info_pengguna->akses == 'opr') {
                    return redirect()->intended('/operator/dashboard');
                } else {
                    return redirect()->intended('/pengaduan/create');
                }
            } else {
                return back()->withErrors([
                    'password'  => 'Kata sandi yang Anda masukkan salah.',
                ]);
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('status', 'Anda berhasil keluar.');
    }
}
