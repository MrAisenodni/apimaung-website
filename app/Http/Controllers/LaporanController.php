<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use Carbon\Carbon;
use PDF;

class LaporanController extends Controller
{
    public function __construct() {
        $this->laporan = new Laporan();
    }

    // Menampilkan Halaman Laporan
    public function index() {
        return view('kepdes.laporan.index');
    }

    public function show(Request $request) {
        $current_time = Carbon::now();
        $dari_tanggal   = $request->dari_tanggal;
        $ke_tanggal     = $request->ke_tanggal;
        $jenis          = $request->jenis;

        $data = [
            'dari_tanggal'  => date('d M Y', strtotime($dari_tanggal)),
            'ke_tanggal'    => date('d M Y', strtotime($ke_tanggal)),
            'jenis'         => $jenis,
            'laporan'       => $this->laporan->getData($dari_tanggal, $ke_tanggal, $jenis),
        ];

        $pdf = PDF::loadView('kepdes.laporan.show', $data);
        return $pdf->stream($current_time.'_laporan_'.$jenis.'.pdf');
    }
}
