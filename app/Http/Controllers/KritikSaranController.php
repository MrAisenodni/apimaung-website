<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\KritikSaran;

class KritikSaranController extends Controller
{
    public function __construct() {
        $this->kritiksaran = new KritikSaran();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fungsi untuk menampilkan data pada tabel kritiksaran
        $data = [
            'kritiksaran'       => $this->kritiksaran->getAllData(),
        ];
        if(request()->is('/admin')) {
            return view('admin.kritiksaran.index', $data);
        } elseif (request()->is('/operator')) {
            return view('operator.kritiksaran.index', $data);
        }
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
            'no_hp'         => 'required|max:13',
            'pesan'         => 'required',
        ],[
            'nama.required'     => 'Nama harus diisi.',
            'no_hp.required'    => 'No HP harus diisi.',
            'no_hp.max'         => 'No HP maksimal 6 huruf.',
            'pesan.required'    => 'Pesan harus diisi.',
        ]);

        $data = [
            'nama'          => $request->nama,
            'no_hp'         => $request->no_hp,
            'pesan'         => $request->pesan,
            'created_at'    => $current_time
        ];

        $this->kritiksaran->tambahData($data);

        return redirect('/')->with('status', 'Kritik dan saran Anda berhasil dikirim.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Fungsi untuk menampilkan detail dari satu row pada tabel kritiksaran berdasarkan $id
        $data = [
            'kritiksaran'       =>$this->kritiksaran->getData($id),
        ];
        return view('admin.kritiksaran.show', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Fungsi untuk menghapus data dari tabel kritiksaran
        $this->kritiksaran->hapusData($id);
        return redirect('/kritiksaran')->with('status', 'Data berhasil dihapus.');
    }
}
