<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Desa;

class DesaController extends Controller
{
    public function __construct() {
        $this->desa = new Desa();
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
            'profildesa'      => $this->desa->getAllData(),
        ];
        return view('admin.profildesa.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.profildesa.create');
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
            'nama'          => 'required',
            'tahun_bentuk'  => 'required|max:4|min:4',
            'dasar_hukum'   => 'required',
            'kecamatan'     => 'required',
            'kota'          => 'required',
            'provinsi'      => 'required',
            'kode_pos'      => 'required|max:5|min:5',
        ],[
            'nama.required'             => 'Nama harus diisi.',
            'tahun_bentuk.required'     => 'Tahun bentuk harus diisi.',
            'tahun_bentuk.max'          => 'Tahun bentuk maksimal 4 huruf.',
            'tahun_bentuk.min'          => 'Tahun bentuk minimal 4 huruf.',
            'dasar_hukum.required'      => 'Dasar hukum harus diisi.',
            'kecamatan.required'        => 'Kecamatan harus diisi.',
            'kota.required'             => 'Kota harus diisi.',
            'provinsi.required'         => 'Provinsi kelamin harus diisi.',
            'kode_pos.required'         => 'Kode pos harus diisi.',
            'kode_pos.max'              => 'Kode pos maksimal 5 huruf.',
            'kode_pos.min'              => 'Kode pos minimal 5 huruf.',
        ]);

        $data = [
            'nama'              => $request->nama,
            'tahun_bentuk'      => $request->tahun_bentuk,
            'dasar_hukum'       => $request->dasar_hukum,
            'kecamatan'         => $request->kecamatan,
            'kota'              => $request->kota,
            'provinsi'          => $request->provinsi,
            'kode_pos'          => $request->kode_pos,
            'created_at'        => $current_time
        ];

        $this->desa->tambahData($data);

        return redirect('/profildesa')->with('status', 'Data berhasil ditambahkan.');
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
            'profildesa'      => $this->desa->getData($id),
        ];
        return view('admin.profildesa.show', $data);
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
            'profildesa'      => $this->desa->getData($id),
        ];
        return view('admin.profildesa.edit', $data);
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
            'nama'          => 'required',
            'tahun_bentuk'  => 'required|max:4|min:4',
            'dasar_hukum'   => 'required',
            'kecamatan'     => 'required',
            'kota'          => 'required',
            'provinsi'      => 'required',
            'kode_pos'      => 'required|max:5|min:5',
        ],[
            'nama.required'             => 'Nama harus diisi.',
            'tahun_bentuk.required'     => 'Tahun bentuk harus diisi.',
            'tahun_bentuk.max'          => 'Tahun bentuk maksimal 4 huruf.',
            'tahun_bentuk.min'          => 'Tahun bentuk minimal 4 huruf.',
            'dasar_hukum.required'      => 'Dasar hukum harus diisi.',
            'kecamatan.required'        => 'Kecamatan harus diisi.',
            'kota.required'             => 'Kota harus diisi.',
            'provinsi.required'         => 'Provinsi kelamin harus diisi.',
            'kode_pos.required'         => 'Kode pos harus diisi.',
            'kode_pos.max'              => 'Kode pos maksimal 5 huruf.',
            'kode_pos.min'              => 'Kode pos minimal 5 huruf.',
        ]);

        $data = [
            'nama'              => $request->nama,
            'tahun_bentuk'      => $request->tahun_bentuk,
            'dasar_hukum'       => $request->dasar_hukum,
            'kecamatan'         => $request->kecamatan,
            'kota'              => $request->kota,
            'provinsi'          => $request->provinsi,
            'kode_pos'          => $request->kode_pos,
            'updated_at'        => $current_time
        ];

        $this->desa->ubahData($data, $id);
        
        return redirect('/profildesa')->with('status', 'Data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Fungsi untuk menghapus data dari tabel desa
        $this->desa->hapusData($id);
        return redirect('/profildesa')->with('status', 'Data berhasil dihapus.'); 
    }
}
