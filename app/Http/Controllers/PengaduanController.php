<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Menampilkan halaman pengaduan untuk Admin
        return view('admin.pengaduan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.pengaduan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $current_time = Carbon::now()->toDateTimeString();

        $validated = $request->validate([
            // 'nik'           => 'required',
            // 'nip'           => 'required',
            'email'         => 'required',
            'password'      => 'required|min:8|max:12',
            'akses'         => 'required',
        ],[
            'nik.required'              => 'NIK harus diisi.',
            'nip.required'              => 'NIP harus diisi.',
            'password.required'         => 'Password harus diisi.',
            'password.required'         => 'Password harus diisi.',
            'password.max'              => 'Password maksimal 12 huruf.',
            'password.min'              => 'Password minimal 8 huruf.',
            'akses.required'            => 'Akses harus diisi.',
        ]);

        $data = [
            'id_penduduk'           => $request->nik,
            'id_angbpd'             => $request->nip,
            'email'                 => $request->email,
            'password'              => Hash::make($request->password),
            'akses'                 => $request->akses,
            'created_at'            => $current_time
        ];

        $this->pengguna->tambahData($data);

        return redirect('/pengguna')->with('status', 'Data berhasil ditambahkan.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Menampilkan form detail pengaduan untuk Admin
        return view('admin.pengaduan.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Menampilkan form ubah pengaduan untuk Admin
        return view('admin.pengaduan.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Mengirimkan perubahan pengaduan ke database oleh Admin
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Menghapus pengaduan dari database oleh Admin
    }
}
