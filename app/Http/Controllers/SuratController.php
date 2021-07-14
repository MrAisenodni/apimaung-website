<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Penduduk;
use App\Models\AnggotaBPD;
use App\Models\Surat;

class SuratController extends Controller
{
    public function __construct() {
        $this->penduduk = new Penduduk();
        $this->angbpd = new AnggotaBPD();
        $this->surat = new Surat();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Menampilkan halaman surat untuk Admin
        $data = [
            'surat'     => $this->surat->getAllData(),
            'penduduk'      => $this->surat->getAllDataUser(),
        ];

        if(session()->get('sakses') == 'adm') {
            return view('admin.surat.index', $data);
        } elseif(session()->get('sakses') == 'opr') {
            return view('operator.surat.index', $data);
        } else {
            return view('user.surat', $data);
        }
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
            'surat'      => $this->surat->getAllDataUser(),
        ];
        return view('user.createsurat', $data);
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
            'jenis'         => 'required',
            'pesan'         => 'required',
            'fpengantar'    => 'required|mimes:pdf|max:1000',
            'fktp'          => 'required|mimes:jpeg,jpg,png|2000',
            'fkk'           => 'required|mimes:jpeg,jpg,png|2000',
        ],[
            'jenis.required'        => 'Jenis Surat harus diisi.',
            'pesan.required'        => 'Pesan Surat harus diisi.',
            'fpengantar.required'   => 'Surat Pengantar harus diisi.',
            'fpengantar.mimes'      => 'Format file harus: pdf.',
            'fpengantar.max'        => 'File tidak boleh lebih dari 1 MB',
            'fktp.required'         => 'Foto KTP harus diisi.',
            'fktp.mimes'            => 'Format file harus: jpeg, jpg, png.',
            'fktp.max'              => 'File tidak boleh lebih dari 2 MB',
            'fkk.required'          => 'Foto KK harus diisi.',
            'fkk.mimes'             => 'Format file harus: jpeg, jpg, png.',
            'fkk.max'               => 'File tidak boleh lebih dari 2 MB',
        ]);

        $data1 = [
            'id_penduduk'   => session()->get('sid_penduduk'),
            'jenis'         => $request->jenis,
            'pesan'         => $request->pesan,
            'status'        => $status,
            'created_at'    => $current_time,
        ];
        
        if ($request->jenis == 'sku') {
            $validated = $request->validate([
                'fusaha'         => 'required|mimes:pdf|max:1000',
                'fbuktipbbsku'   => 'required|mimes:jpeg,jpg,png|max:2000',
            ],[
                'fusaha.required'           => 'Surat Pernyataan Usaha harus diisi.',
                'fusaha.mimes'              => 'Format file harus: pdf.',
                'fusaha.max'                => 'File tidak boleh lebih dari 1 MB',
                'fbuktipbbsku.required'     => 'Bukti Lunas PBB harus diisi.',
                'fbuktipbbsku.mimes'        => 'Format file harus: jpeg, jpg, png.',
                'fbuktipbbsku.max'          => 'File tidak boleh lebih dari 2 MB',
            ]);

            $pathktp = $request->file('fktp')->store('sku/'.$request->nik.'/data diri');
            $pathkk = $request->file('fkk')->store('sku/'.$request->nik.'/data diri');

            $pathpengantar = $request->file('fpengantar')->store('sku/'.$request->nik.'/data pendukung');
            $pathusaha = $request->file('fusaha')->store('sku/'.$request->nik.'/data pendukung');
            $pathbuktipbb = $request->file('fbuktipbbsku')->store('sku/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
                'fusaha'        => $pathusaha,
                'fbuktipbb'     => $pathbuktipbb,
            ];

            $data = $data1+$data2;

            $this->surat->tambahData($data);
        } else if ($request->jenis == 'sktm') {
            $pathktp = $request->file('fktp')->store('sktm/'.$request->nik.'/data diri');
            $pathkk = $request->file('fkk')->store('sktm/'.$request->nik.'/data diri');

            $pathpengantar = $request->file('fpengantar')->store('sktm/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
            ];

            $data = $data1+$data2;

            $this->surat->tambahData($data);
        } else if ($request->jenis == 'skm') {
            $pathktp = $request->file('fktp')->store('skm/'.$request->nik.'/data diri');
            $pathkk = $request->file('fkk')->store('skm/'.$request->nik.'/data diri');

            $pathpengantar = $request->file('fpengantar')->store('skm/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
            ];

            $data = $data1+$data2;

            $this->surat->tambahData($data);
        } else if ($request->jenis == 'skbpm') {
            $pathktp = $request->file('fktp')->store('skbpm/'.$request->nik.'/data diri');
            $pathkk = $request->file('fkk')->store('skbpm/'.$request->nik.'/data diri');

            $pathpengantar = $request->file('fpengantar')->store('skbpm/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
            ];

            $data = $data1+$data2;

            $this->surat->tambahData($data);
        } else if ($request->jenis == 'sklahir') {
            $validated = $request->validate([
                'fketlahir'             => 'required|mimes:pdf|max:1000',
                'fnikah'                => 'required|mimes:pdf|max:1000',
                'fbuktipbblahir'        => 'required|mimes:jpeg,jpg,png|max:2000',
            ],[
                'fketlahir.required'        => 'Surat Keterangan Lahir harus diisi.',
                'fketlahir.mimes'           => 'Format file harus: pdf.',
                'fketlahir.max'             => 'File tidak boleh lebih dari 1 MB',
                'fnikah.required'           => 'Surat Nikah harus diisi.',
                'fnikah.mimes'              => 'Format file harus: pdf.',
                'fnikah.max'                => 'File tidak boleh lebih dari 1 MB',
                'fbuktipbblahir.required'   => 'Bukti Lunas PBB harus diisi.',
                'fbuktipbblahir.mimes'      => 'Format file harus: jpeg, jpg, png.',
                'fbuktipbblahir.max'        => 'File tidak boleh lebih dari 2 MB',
            ]);

            $pathktp    = $request->file('fktp')->store('sklahir/'.$request->nik.'/data diri');
            $pathkk     = $request->file('fkk')->store('sklahir/'.$request->nik.'/data diri');

            $pathpengantar  = $request->file('fpengantar')->store('sklahir/'.$request->nik.'/data pendukung');
            $pathketlahir    = $request->file('fketlahir')->store('sklahir/'.$request->nik.'/data pendukung');
            $pathnikah      = $request->file('fnikah')->store('sklahir/'.$request->nik.'/data pendukung');
            $pathbuktipbb   = $request->file('fbuktipbblahir')->store('sklahir/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
                'fnikah'        => $pathnikah,
                'fketlahir'     => $pathketlahir,
                'fbuktipbb'     => $pathbuktipbb,
            ];

            $data = $data1+$data2;

            $this->surat->tambahData($data);
        } else if ($request->jenis == 'skmati') {
            $validated = $request->validate([
                'fktpmati'          => 'required|mimes:pdf|max:1000',
                'fketmati'            => 'required|mimes:pdf|max:1000',
            ],[
                'fktpmati.required'         => 'Surat Keterangan Lahir harus diisi.',
                'fktpmati.mimes'            => 'Format file harus: pdf.',
                'fktpmati.max'              => 'File tidak boleh lebih dari 1 MB',
                'fketmati.required'           => 'Surat Nikah harus diisi.',
                'fketmati.mimes'              => 'Format file harus: pdf.',
                'fketmati.max'                => 'File tidak boleh lebih dari 1 MB',
            ]);

            $pathktp    = $request->file('fktp')->store('skmati/'.$request->nik.'/data diri');
            $pathkk     = $request->file('fkk')->store('skmati/'.$request->nik.'/data diri');

            $pathpengantar  = $request->file('fpengantar')->store('skmati/'.$request->nik.'/data pendukung');
            $pathktpmati    = $request->file('fktpmati')->store('skmati/'.$request->nik.'/data pendukung');
            $pathketmati    = $request->file('fketmati')->store('skmati/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
                'fketmati'      => $pathketmati,
                'fketlahir'     => $pathketlahir
            ];

            $data = $data1+$data2;

            $this->surat->tambahData($data);
        } else if ($request->jenis == 'skbn') {
            $pathktp = $request->file('fktp')->store('skbn/'.$request->nik.'/data diri');
            $pathkk = $request->file('fkk')->store('skbn/'.$request->nik.'/data diri');

            $pathpengantar = $request->file('fpengantar')->store('skbn/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
            ];

            $data = $data1+$data2;

            $this->surat->tambahData($data);
        } else if ($request->jenis == 'skp') {
            $pathktp = $request->file('fktp')->store('skp/'.$request->nik.'/data diri');
            $pathkk = $request->file('fkk')->store('skp/'.$request->nik.'/data diri');

            $pathpengantar = $request->file('fpengantar')->store('skp/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
            ];

            $data = $data1+$data2;

            $this->surat->tambahData($data);
        } else if ($request->jenis == 'skht') {     
            $pathktp = $request->file('fktp')->store('skht/'.$request->nik.'/data diri');
            $pathkk = $request->file('fkk')->store('skht/'.$request->nik.'/data diri');

            $pathpengantar = $request->file('fpengantar')->store('skht/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
            ];

            $data = $data1+$data2;

            $this->surat->tambahData($data);
        } 

        return redirect('/surat')->with('status', 'Surat Anda berhasil dikirim.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Menampilkan form detail surat untuk Admin
        $data = [
            'surat'     => $this->surat->getData($id),
            'penduduk'      => $this->penduduk->getAllData(),
        ];

        if(session()->get('sakses') == 'adm') {
            return view('admin.surat.show', $data);
        } elseif(session()->get('sakses') == 'opr') {
            return view('operator.surat.show', $data);
        } else {
            return view('user.showsurat ', $data);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Menampilkan form ubah surat untuk Admin
        $data = [
            'surat'     => $this->surat->getData($id),
            'penduduk'      => $this->penduduk->getAllData(),
            'angbpd'        => $this->angbpd->getAllData(),
        ];
        return view('operator.surat.edit', $data);
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
        // Mengirimkan perubahan surat ke database oleh Operator
        $current_time = Carbon::now()->toDateTimeString();
        $status = 'complete';

        $validated = $request->validate([
            // 'nip'           => 'required',
            'pesan'         => 'required',
        ],[
            'nip.required'          => 'NIP dan nama harus diisi.',
            'pesan.required'        => 'Pesan harus diisi.',
            // 'password.max'              => 'Password maksimal 12 huruf.',
            // 'password.min'              => 'Password minimal 8 huruf.',
        ]);

        $data = [
            'id_angbpd'     => session()->get('sid_angbpd'),
            'balas_pesan'   => $request->pesan,
            'status'        => $status,
            'updated_at'    => $current_time
        ];

        $this->surat->ubahData($data, $id);

        return redirect('/operator/surat')->with('status', 'Surat berhasil ditanggapi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Menghapus surat dari database oleh Admin
        $this->surat->hapusData($id);

        return redirect('/surat')->with('status', 'Surat berhasil dihapus.');
    }
}
