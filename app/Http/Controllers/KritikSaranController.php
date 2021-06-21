<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
