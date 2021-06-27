<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\Pengguna;
use App\Models\Penduduk;
use App\Models\AnggotaBPD;

class PenggunaController extends Controller
{
    public function __construct() {
        $this->pengguna = new Pengguna();
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
        $data = [
            'pengguna'      => $this->pengguna->getAllData(),
        ];

        return view('admin.pengguna.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = [
            'penduduk'      => $this->penduduk->getAllData(),
            'angbpd'        => $this->angbpd->getAllData(),
        ];
        return view('admin.pengguna.create', $data);
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
        //
        $data = [
            'pengguna'      => $this->pengguna->getData($id),
        ];

        return view('admin.pengguna.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = [
            'pengguna'      => $this->pengguna->getData($id),
            'penduduk'      => $this->penduduk->getAllData(),
            'angbpd'        => $this->angbpd->getAllData(),
        ];

        return view('admin.pengguna.edit', $data);
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
            'updated_at'            => $current_time
        ];
        // var_dump($data);die;
        $this->pengguna->ubahData($data, $id);

        return redirect('/pengguna')->with('status', 'Data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $this->pengguna->hapusData($id);

        return redirect('/pengguna')->with('status', 'Data berhasil dihapus.');
    }
}
