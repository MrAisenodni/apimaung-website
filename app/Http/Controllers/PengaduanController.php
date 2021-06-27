<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Penduduk;
use App\Models\AnggotaBPD;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    public function __construct() {
        $this->penduduk = new Penduduk();
        $this->angbpd = new AnggotaBPD();
        $this->pengaduan = new Pengaduan();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Menampilkan halaman pengaduan untuk Admin
        $data = [
            'pengaduan'     => $this->pengaduan->getAllData(),
        ];
        return view('admin.pengaduan.index', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexOpr()
    {
        // Menampilkan halaman pengaduan untuk Admin
        $data = [
            'pengaduan'     => $this->pengaduan->getAllData(),
        ];
        return view('operator.pengaduan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data= [
            'penduduk'      => $this->penduduk->getAllData(),
        ];
        return view('user.pengaduan', $data);
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
        $status = 'pending';

        $validated = $request->validate([
            'nik'           => 'required',
            'judul'         => 'required',
            'tgl_jadi'      => 'required',
            'lokasi'        => 'required',
            'instansi'      => 'required',
            'kategori'      => 'required',
            'pesan'         => 'required',
        ],[
            'nik.required'          => 'NIK harus diisi.',
            'judul.required'        => 'Judul Pengaduan harus diisi.',
            'tgl_jadi.required'     => 'Tanggal kejadian harus diisi.',
            'lokasi.required'       => 'Lokasi kejadian harus diisi.',
            'instansi.required'     => 'Instansi tujuan harus diisi.',
            'kategori.required'     => 'Kategori harus diisi.',
            'pesan.required'        => 'Pesan harus diisi.',
            // 'password.max'              => 'Password maksimal 12 huruf.',
            // 'password.min'              => 'Password minimal 8 huruf.',
        ]);

        $data = [
            'id_penduduk'   => $request->nik,
            'judul'         => $request->judul,
            'tgl_kejadian'  => $request->tgl_jadi,
            'lokasi'        => $request->lokasi,
            'instansi'      => $request->instansi,
            'kategori'      => $request->kategori,
            'pesan'         => $request->pesan,
            'status'        => $status,
            'created_at'    => $current_time
        ];

        $this->pengaduan->tambahData($data);

        return redirect('/pengaduan/create')->with('status', 'Data berhasil ditambahkan.');
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
        $data = [
            'pengaduan'     => $this->pengaduan->getData($id),
        ];
        return view('admin.pengaduan.show', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showOpr($id)
    {
        // Menampilkan form detail pengaduan untuk Admin
        $data = [
            'pengaduan'     => $this->pengaduan->getData($id),
        ];
        return view('operator.pengaduan.show', $data);
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
        $data = [
            'pengaduan'     => $this->pengaduan->getData($id),
            'penduduk'      => $this->penduduk->getAllData(),
            'angbpd'        => $this->angbpd->getAllData(),
        ];
        return view('operator.pengaduan.edit', $data);
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
        // Mengirimkan perubahan pengaduan ke database oleh Operator
        $current_time = Carbon::now()->toDateTimeString();
        $status = 'complete';

        $validated = $request->validate([
            'nip'           => 'required',
            'pesan'         => 'required',
        ],[
            'nip.required'          => 'NIP dan nama harus diisi.',
            'pesan.required'        => 'Pesan harus diisi.',
            // 'password.max'              => 'Password maksimal 12 huruf.',
            // 'password.min'              => 'Password minimal 8 huruf.',
        ]);

        $data = [
            'id_angbpd'     => $request->nip,
            'balas_pesan'   => $request->pesan,
            'status'        => $status,
            'updated_at'    => $current_time
        ];

        $this->pengaduan->ubahData($data, $id);

        return redirect('/operator/pengaduan')->with('status', 'Pengaduan berhasil ditanggapi.');
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
        $this->pengaduan->hapusData($id);

        return redirect('/pengaduan')->with('status', 'Pengaduan berhasil dihapus.');
    }
}
