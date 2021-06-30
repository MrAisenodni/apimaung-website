<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Penduduk;

class PendudukController extends Controller
{
    public function __construct() {
        $this->penduduk = new Penduduk();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Menampilkan halaman penduduk untuk admin
        $data = [
            'penduduk' => $this->penduduk->getAllData(),
        ];
        return view('admin.penduduk.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Menampilkan form tambah penduduk
        return view('admin.penduduk.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Mengirimkan data penduduk baru ke database
        $current_time = Carbon::now()->toDateTimeString();

        $validated = $request->validate([
            'nik'           => 'required|unique:penduduk,nik|max:16|min:16',
            'nokk'          => 'required|unique:penduduk,nokk|max:16|min:16',
            'nama'          => 'required',
            'tmpt_lahir'    => 'required',
            'tgl_lahir'     => 'required',
            'jenkel'        => 'required',
            'agama'         => 'required',
            'alamat'        => 'required',
            'rt'            => 'required|max:3',
            'rw'            => 'required|max:3',
            'pendidikan'    => 'required',
            'pekerjaan'     => 'required',
            'status'        => 'required',
        ],[
            'nik.required'          => 'NIK harus diisi.',
            'nik.unique'            => 'NIK sudah terdaftar.',
            'nik.max'               => 'NIK maksimal 16 huruf.',
            'nik.min'               => 'NIK minimal 16 huruf.',
            'nokk.required'         => 'Nomor KK harus diisi.',
            'nokk.unique'           => 'Nomor KK sudah terdaftar.',
            'nokk.max'              => 'Nomor KK maksimal 16 huruf.',
            'nokk.min'              => 'Nomor KK minimal 16 huruf.',
            'nama.required'         => 'Nama harus diisi.',
            'tmpt_lahir.required'   => 'Tempat lahir harus diisi.',
            'tgl_lahir.required'    => 'Tanggal lahir harus diisi.',
            'jenkel.required'       => 'Jenis kelamin harus diisi.',
            'agama.required'        => 'Agama harus diisi.',
            'alamat.required'       => 'Alamat harus diisi.',
            'rt.required'           => 'RT harus diisi.',
            'rt.max'               => 'RT maksimal 3 huruf.',
            'rw.required'           => 'RW harus diisi.',
            'rw.max'               => 'RW maksimal 3 huruf.',
            'pendidikan.required'   => 'Pendidikan harus diisi.',
            'pekerjaan.required'    => 'Pekerjaan harus diisi.',
            'status.required'       => 'Status harus diisi.',
        ]);

        $data = [
            'nik'           => $request->nik,
            'nokk'          => $request->nokk,
            'nama'          => $request->nama,
            'tmpt_lahir'    => $request->tmpt_lahir,
            'tgl_lahir'     => $request->tgl_lahir,
            'jenkel'        => $request->jenkel,
            'agama'         => $request->agama,
            'alamat'        => $request->alamat,
            'rt'            => $request->rt,
            'rw'            => $request->rw,
            'pendidikan'    => $request->pendidikan,
            'pekerjaan'     => $request->pekerjaan,
            'status'        => $request->status,
            'created_at'    => $current_time,
        ];
        
        $this->penduduk->tambahData($data);
        
        return redirect('/penduduk')->with('status', 'Data berhasil ditambahkan.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Menampilkan form detail penduduk
        $data = [
            'penduduk'      => $this->penduduk->getData($id),
        ];
        return view('admin.penduduk.show', $data);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Menampilkan form ubah penduduk
        $data = [
            'penduduk'      => $this->penduduk->getData($id),
        ];
        return view('admin.penduduk.edit', $data);
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
        // Mengirimkan perubahan penduduk ke database
        $current_time = Carbon::now()->toDateTimeString();

        $validated = $request->validate([
            // 'nik'           => 'required|unique:penduduk,nik|max:16|min:16',
            // 'nokk'          => 'required|unique:penduduk,nokk|max:16|min:16',
            'nama'          => 'required',
            'tmpt_lahir'    => 'required',
            'tgl_lahir'     => 'required',
            'jenkel'        => 'required',
            'agama'         => 'required',
            'alamat'        => 'required',
            'rt'            => 'required|max:3',
            'rw'            => 'required|max:3',
            'pendidikan'    => 'required',
            'pekerjaan'     => 'required',
            'status'        => 'required',
        ],[
            'nik.required'          => 'NIK harus diisi.',
            'nik.unique'            => 'NIK sudah terdaftar.',
            'nik.max'               => 'NIK maksimal 16 huruf.',
            'nik.min'               => 'NIK minimal 16 huruf.',
            'nokk.required'         => 'Nomor KK harus diisi.',
            'nokk.unique'           => 'Nomor KK sudah terdaftar.',
            'nokk.max'              => 'Nomor KK maksimal 16 huruf.',
            'nokk.min'              => 'Nomor KK minimal 16 huruf.',
            'nama.required'         => 'Nama harus diisi.',
            'tmpt_lahir.required'   => 'Tempat lahir harus diisi.',
            'tgl_lahir.required'    => 'Tanggal lahir harus diisi.',
            'jenkel.required'       => 'Jenis kelamin harus diisi.',
            'agama.required'        => 'Agama harus diisi.',
            'alamat.required'       => 'Alamat harus diisi.',
            'rt.required'           => 'RT harus diisi.',
            'rt.max'               => 'RT maksimal 3 huruf.',
            'rw.required'           => 'RW harus diisi.',
            'rw.max'               => 'RW maksimal 3 huruf.',
            'pendidikan.required'   => 'Pendidikan harus diisi.',
            'pekerjaan.required'    => 'Pekerjaan harus diisi.',
            'status.required'       => 'Status harus diisi.',
        ]);

        $data = [
            // 'nik'           => $request->nik,
            // 'nokk'          => $request->nokk,
            'nama'          => $request->nama,
            'tmpt_lahir'    => $request->tmpt_lahir,
            'tgl_lahir'     => $request->tgl_lahir,
            'jenkel'        => $request->jenkel,
            'agama'         => $request->agama,
            'alamat'        => $request->alamat,
            'rt'            => $request->rt,
            'rw'            => $request->rw,
            'pendidikan'    => $request->pendidikan,
            'pekerjaan'     => $request->pekerjaan,
            'status'        => $request->status,
            'updated_at'    => $current_time,
        ];
        
        $this->penduduk->ubahData($data,$id);
        
        return redirect('/penduduk')->with('status', 'Data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Menghapus penduduk dari database
        $current_time = Carbon::now()->toDateTimeString();

        $data = [
            'deleted_at'        => $current_time,
        ];

        $this->penduduk->hapusData($id);

        return redirect('/penduduk')->with('status', 'Data berhasil dihapus.');
    }
}
