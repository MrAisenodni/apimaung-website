<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $data=[
            'nama' => $request->nama,
            'tahun_bentuk' => $request->tahun_bentuk,
            'dasar_hukum' => $request->dasar_hukum,
            'no_kode_wilayah' => $request->no_kode_wilayah,
            'kecamatan' => $request->kecamatan,
            'kota' => $request->kabupaten,
            'provinsi' => $request->provinsi,
            'kode_pos' => $request->kode_pos,
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
        $data=[
            'nama' => $request->nama,
            'tahun_bentuk' => $request->tahun_bentuk,
            'dasar_hukum' => $request->dasar_hukum,
            'no_kode_wilayah' => $request->no_kode_wilayah,
            'kecamatan' => $request->kecamatan,
            'kota' => $request->kota,
            'provinsi' => $request->provinsi,
            'kode_pos' => $request->kode_pos,
        ];
        $this->desa->ubahData($data, $id);
        return redirect('/profildesa')->with('status', 'Data berhasil diubah!');
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
        $this->desa->hapusData($id);
        return redirect('/profildesa')->with('status', 'Data Berhasil Dihapus!'); 
    }
}
