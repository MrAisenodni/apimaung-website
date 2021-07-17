<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        } elseif(session()->get('sakses') == 'des') {
            return view('kepdes.surat.index', $data);
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
        $check = $request->jenis;

        $validated = $request->validate([
            'jenis'         => 'required',
            'pesan'         => 'required',
            'fpengantar'    => 'required|mimes:pdf|max:2000',
            'fktp'          => 'required|mimes:jpeg,jpg,png|max:2000',
            'fkk'           => 'required|mimes:jpeg,jpg,png|max:2000',
        ],[
            'jenis.required'        => 'Jenis Surat harus diisi.',
            'pesan.required'        => 'Pesan Surat harus diisi.',
            'fpengantar.required'   => 'Surat Pengantar harus diisi.',
            'fpengantar.mimes'      => 'Format file harus: pdf.',
            'fpengantar.max'        => 'File tidak boleh lebih dari 2 MB',
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
        
        // Surat Keterangan Usaha
        if ($check == 'sku') {
            $validated = $request->validate([
                'fspusaha'         => 'required|mimes:pdf|max:2000',
                'fpbbusaha'   => 'required|mimes:jpeg,jpg,png|max:2000',
            ],[
                'fspusaha.required'           => 'Surat Pernyataan Usaha harus diisi.',
                'fspusaha.mimes'              => 'Format file harus: pdf.',
                'fspusaha.max'                => 'File tidak boleh lebih dari 2 MB',
                'fpbbusaha.required'     => 'Bukti Lunas PBB harus diisi.',
                'fpbbusaha.mimes'        => 'Format file harus: jpeg, jpg, png.',
                'fpbbusaha.max'          => 'File tidak boleh lebih dari 2 MB',
            ]);

            $pathktp = $request->file('fktp')->store('sku/'.$request->nik.'/data diri');
            $pathkk = $request->file('fkk')->store('sku/'.$request->nik.'/data diri');

            $pathpengantar = $request->file('fpengantar')->store('sku/'.$request->nik.'/data pendukung');
            $path1 = $request->file('fspusaha')->store('sku/'.$request->nik.'/data pendukung');
            $path2 = $request->file('fpbbusaha')->store('sku/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
                'file1'         => $path1,
                'file2'         => $path2,
            ];

            $data = $data1+$data2;

            if ($this->surat->checkJenis($check) > 0) {
                return redirect('/surat')->with('error', 'Anda sudah pernah mengajukan surat ini.');
            }

            $this->surat->tambahData($data);

            return redirect('/surat')->with('status', 'Surat Anda berhasil dikirim.');
        } 
        
        // Surat Keterangan Lahir
        if ($check == 'sklahir') {
            $validated = $request->validate([
                'fsklahir'             => 'required|mimes:pdf|max:2000',
                'fsknikah'                => 'required|mimes:pdf|max:2000',
                'fpbblahir'        => 'required|mimes:jpeg,jpg,png|max:2000',
            ],[
                'fsklahir.required'        => 'Surat Keterangan Lahir harus diisi.',
                'fsklahir.mimes'           => 'Format file harus: pdf.',
                'fsklahir.max'             => 'File tidak boleh lebih dari 2 MB',
                'fsknikah.required'           => 'Surat Nikah harus diisi.',
                'fsknikah.mimes'              => 'Format file harus: pdf.',
                'fsknikah.max'                => 'File tidak boleh lebih dari 2 MB',
                'fpbblahir.required'   => 'Bukti Lunas PBB harus diisi.',
                'fpbblahir.mimes'      => 'Format file harus: jpeg, jpg, png.',
                'fpbblahir.max'        => 'File tidak boleh lebih dari 2 MB',
            ]);

            $pathktp    = $request->file('fktp')->store('sklahir/'.$request->nik.'/data diri');
            $pathkk     = $request->file('fkk')->store('sklahir/'.$request->nik.'/data diri');

            $pathpengantar  = $request->file('fpengantar')->store('sklahir/'.$request->nik.'/data pendukung');
            $pathsklahir    = $request->file('fsklahir')->store('sklahir/'.$request->nik.'/data pendukung');
            $path1    = $request->file('fsknikah')->store('sklahir/'.$request->nik.'/data pendukung');
            $path2   = $request->file('fpbblahir')->store('sklahir/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
                'file1'         => $pathsklahir,
                'file2'         => $path1,
                'file3'         => $path2,
            ];

            $data = $data1+$data2;

            if ($this->surat->checkJenis($check) > 0) {
                return redirect('/surat')->with('error', 'Anda sudah pernah mengajukan surat ini.');
            }

            $this->surat->tambahData($data);

            return redirect('/surat')->with('status', 'Surat Anda berhasil dikirim.');
        } 
        
        // Surat Keterangan Kematian
        if ($check == 'skmati') {
            $validated = $request->validate([
                'fktpmati'          => 'required|mimes:jpeg,jpg,png|max:2000',
                'fskmati'           => 'mimes:pdf|max:2000',
            ],[
                'fktpmati.required'         => 'Surat Keterangan Lahir harus diisi.',
                'fktpmati.mimes'            => 'Format file harus: jpeg,jpg,png.',
                'fktpmati.max'              => 'File tidak boleh lebih dari 2 MB',
                'fskmati.mimes'             => 'Format file harus: pdf.',
                'fskmati.max'               => 'File tidak boleh lebih dari 2 MB',
            ]);

            $pathktp    = $request->file('fktp')->store('skmati/'.$request->nik.'/data diri');
            $pathkk     = $request->file('fkk')->store('skmati/'.$request->nik.'/data diri');

            $pathpengantar  = $request->file('fpengantar')->store('skmati/'.$request->nik.'/data pendukung');
            $path1    = $request->file('fktpmati')->store('skmati/'.$request->nik.'/data pendukung');
            $path2     = $request->file('fskmati')->store('skmati/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
                'file1'         => $path1,
                'file2'         => $path2
            ];

            $data = $data1+$data2;
            
            if ($this->surat->checkJenis($check) > 0) {
                return redirect('/surat')->with('error', 'Anda sudah pernah mengajukan surat ini.');
            }

            $this->surat->tambahData($data);

            return redirect('/surat')->with('status', 'Surat Anda berhasil dikirim.');
        } 
        
        // Surat Keterangan Perpanjang KTP
        if ($check == 'skpanjangktp') {
            $validated = $request->validate([
                'ffotopktp'     => 'required|mimes:jpeg,jpg,png|max:2000',
                'fpbbpktp'      => 'required|mimes:jpeg,jpg,png|max:2000',
            ],[
                'ffotopktp.required'        => 'Surat Keterangan Lahir harus diisi.',
                'ffotopktp.mimes'           => 'Format file harus: jpeg,jpg,png.',
                'ffotopktp.max'             => 'File tidak boleh lebih dari 2 MB',
                'fpbbpktp.required'         => 'Surat Nikah harus diisi.',
                'fpbbpktp.mimes'            => 'Format file harus: jpeg,jpg,png.',
                'fpbbpktp.max'              => 'File tidak boleh lebih dari 2 MB',
            ]);

            $pathktp    = $request->file('fktp')->store('skpanjangktp/'.$request->nik.'/data diri');
            $pathkk     = $request->file('fkk')->store('skpanjangktp/'.$request->nik.'/data diri');

            $pathpengantar  = $request->file('fpengantar')->store('skpanjangktp/'.$request->nik.'/data pendukung');
            $path1   = $request->file('ffotopktp')->store('skpanjangktp/'.$request->nik.'/data pendukung');
            $path2    = $request->file('fpbbpktp')->store('skpanjangktp/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
                'file1'         => $path1,
                'file2'         => $path2,
            ];

            $data = $data1+$data2;

            if ($this->surat->checkJenis($check) > 0) {
                return redirect('/surat')->with('error', 'Anda sudah pernah mengajukan surat ini.');
            }

            $this->surat->tambahData($data);

            return redirect('/surat')->with('status', 'Surat Anda berhasil dikirim.');
        }

        // Surat Keterangan Pembuatan KTP
        if ($check == 'skbuatktp') {
            $validated = $request->validate([
                'ffotobktp'     => 'required|mimes:jpeg,jpg,png|max:2000',
                'fpbbbktp'      => 'required|mimes:jpeg,jpg,png|max:2000',
            ],[
                'ffotobktp.required'        => 'Surat Keterangan Lahir harus diisi.',
                'ffotobktp.mimes'           => 'Format file harus: jpeg,jpg,png.',
                'ffotobktp.max'             => 'File tidak boleh lebih dari 2 MB',
                'fpbbbktp.required'         => 'Surat Nikah harus diisi.',
                'fpbbbktp.mimes'            => 'Format file harus: jpeg,jpg,png.',
                'fpbbbktp.max'              => 'File tidak boleh lebih dari 2 MB',
            ]);

            $pathktp    = $request->file('fktp')->store('skbuatktp/'.$request->nik.'/data diri');
            $pathkk     = $request->file('fkk')->store('skbuatktp/'.$request->nik.'/data diri');

            $pathpengantar  = $request->file('fpengantar')->store('skbuatktp/'.$request->nik.'/data pendukung');
            $path1   = $request->file('ffotobktp')->store('skbuatktp/'.$request->nik.'/data pendukung');
            $path2    = $request->file('fpbbbktp')->store('skbuatktp/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
                'file1'         => $path1,
                'file2'         => $path2,
            ];

            $data = $data1+$data2;

            if ($this->surat->checkJenis($check) > 0) {
                return redirect('/surat')->with('error', 'Anda sudah pernah mengajukan surat ini.');
            }

            $this->surat->tambahData($data);

            return redirect('/surat')->with('status', 'Surat Anda berhasil dikirim.');
        }

        // Surat Keterangan PINDAH
        if ($check == 'skpindah') {
            $pathktp    = $request->file('fktp')->store('skpindah/'.$request->nik.'/data diri');
            $pathkk     = $request->file('fkk')->store('skpindah/'.$request->nik.'/data diri');

            $pathpengantar  = $request->file('fpengantar')->store('skpindah/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
            ];

            $data = $data1+$data2;

            if ($this->surat->checkJenis($check) > 0) {
                return redirect('/surat')->with('error', 'Anda sudah pernah mengajukan surat ini.');
            }

            $this->surat->tambahData($data);

            return redirect('/surat')->with('status', 'Surat Anda berhasil dikirim.');
        }

        // Surat Keterangan DATANG
        if ($check == 'skdatang') {
            $validated = $request->validate([
                'fskpindah'     => 'required|mimes:pdf|max:2000',
            ],[
                'fskpindah.required'        => 'Surat Keterangan Lahir harus diisi.',
                'fskpindah.mimes'           => 'Format file harus: pdf.',
                'fskpindah.max'             => 'File tidak boleh lebih dari 2 MB',
            ]);

            $pathktp    = $request->file('fktp')->store('skdatang/'.$request->nik.'/data diri');
            $pathkk     = $request->file('fkk')->store('skdatang/'.$request->nik.'/data diri');

            $pathpengantar  = $request->file('fpengantar')->store('skdatang/'.$request->nik.'/data pendukung');
            $path1   = $request->file('fskpindah')->store('skdatang/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
                'file1'         => $path1,
            ];

            $data = $data1+$data2;

            if ($this->surat->checkJenis($check) > 0) {
                return redirect('/surat')->with('error', 'Anda sudah pernah mengajukan surat ini.');
            }

            $this->surat->tambahData($data);

            return redirect('/surat')->with('status', 'Surat Anda berhasil dikirim.');
        }

        // Surat Keterangan Perubahan Data KK
        if ($check == 'skubahkk') {
            $pathktp    = $request->file('fktp')->store('skubahkk/'.$request->nik.'/data diri');
            $pathkk     = $request->file('fkk')->store('skubahkk/'.$request->nik.'/data diri');

            $pathpengantar  = $request->file('fpengantar')->store('skubahkk/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
            ];

            $data = $data1+$data2;

            if ($this->surat->checkJenis($check) > 0) {
                return redirect('/surat')->with('error', 'Anda sudah pernah mengajukan surat ini.');
            }

            $this->surat->tambahData($data);

            return redirect('/surat')->with('status', 'Surat Anda berhasil dikirim.');
        }

        // Surat Domisili Tempat Tinggal
        if ($check == 'sdtinggal') {
            $pathktp    = $request->file('fktp')->store('sdtinggal/'.$request->nik.'/data diri');
            $pathkk     = $request->file('fkk')->store('sdtinggal/'.$request->nik.'/data diri');

            $pathpengantar  = $request->file('fpengantar')->store('sdtinggal/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
            ];

            $data = $data1+$data2;

            if ($this->surat->checkJenis($check) > 0) {
                return redirect('/surat')->with('error', 'Anda sudah pernah mengajukan surat ini.');
            }

            $this->surat->tambahData($data);

            return redirect('/surat')->with('status', 'Surat Anda berhasil dikirim.');
        }

        // Surat Keterangan Riwayat Tanah
        if ($check == 'skrt') {
            $validated = $request->validate([
                'fajbtanah'     => 'required|mimes:pdf|max:2000',
                'fsalinc'      => 'required|mimes:pdf|max:2000',
                'fpbbtanah'      => 'required|mimes:jpeg,jpg,png|max:2000',
            ],[
                'fajbtanah.required'        => 'Surat Keterangan Lahir harus diisi.',
                'fajbtanah.mimes'           => 'Format file harus: pdf.',
                'fajbtanah.max'             => 'File tidak boleh lebih dari 2 MB',
                'fsalinc.required'         => 'Surat Nikah harus diisi.',
                'fsalinc.mimes'            => 'Format file harus: pdf.',
                'fsalinc.max'              => 'File tidak boleh lebih dari 2 MB',
                'fpbbtanah.required'         => 'Surat Nikah harus diisi.',
                'fpbbtanah.mimes'            => 'Format file harus: jpeg,jpg,png.',
                'fpbbtanah.max'              => 'File tidak boleh lebih dari 2 MB',
            ]);

            $pathktp    = $request->file('fktp')->store('skrt/'.$request->nik.'/data diri');
            $pathkk     = $request->file('fkk')->store('skrt/'.$request->nik.'/data diri');

            $pathpengantar  = $request->file('fpengantar')->store('skrt/'.$request->nik.'/data pendukung');
            $path1   = $request->file('fajbtanah')->store('skrt/'.$request->nik.'/data pendukung');
            $path2    = $request->file('fsalinc')->store('skrt/'.$request->nik.'/data pendukung');
            $path3    = $request->file('fpbbtanah')->store('skrt/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
                'file1'         => $path1,
                'file2'         => $path2,
                'file3'         => $path3,
            ];

            $data = $data1+$data2;

            if ($this->surat->checkJenis($check) > 0) {
                return redirect('/surat')->with('error', 'Anda sudah pernah mengajukan surat ini.');
            }

            $this->surat->tambahData($data);

            return redirect('/surat')->with('status', 'Surat Anda berhasil dikirim.');
        }

        // Surat Keterangan Domisili Usaha
        if ($check == 'skdu') {
            $validated = $request->validate([
                'faktapendirian'     => 'mimes:pdf|max:2000',
                'fbuktiusaha'      => 'mimes:jpeg,jpg,png|max:2000',
                'fbuktisewa'      => 'mimes:jpeg,jpg,png|max:2000',
                'fizinlingkungan'      => 'required|mimes:pdf|max:2000',
                'fpbbdusaha'      => 'required|mimes:jpeg,jpg,png|max:2000',
            ],[
                'faktapendirian.required'        => 'Surat Keterangan Lahir harus diisi.',
                'faktapendirian.mimes'           => 'Format file harus: pdf.',
                'faktapendirian.max'             => 'File tidak boleh lebih dari 2 MB',
                'fbuktiusaha.required'         => 'Surat Nikah harus diisi.',
                'fbuktiusaha.mimes'            => 'Format file harus: jpeg,jpg,png.',
                'fbuktiusaha.max'              => 'File tidak boleh lebih dari 2 MB',
                'fbuktisewa.required'         => 'Surat Nikah harus diisi.',
                'fbuktisewa.mimes'            => 'Format file harus: jpeg,jpg,png.',
                'fbuktisewa.max'              => 'File tidak boleh lebih dari 2 MB',
                'fizinlingkungan.required'         => 'Surat Nikah harus diisi.',
                'fizinlingkungan.mimes'            => 'Format file harus: pdf.',
                'fizinlingkungan.max'              => 'File tidak boleh lebih dari 2 MB',
                'fpbbdusaha.required'         => 'Surat Nikah harus diisi.',
                'fpbbdusaha.mimes'            => 'Format file harus: jpeg,jpg,png.',
                'fpbbdusaha.max'              => 'File tidak boleh lebih dari 2 MB',
            ]);

            $pathktp    = $request->file('fktp')->store('skdu/'.$request->nik.'/data diri');
            $pathkk     = $request->file('fkk')->store('skdu/'.$request->nik.'/data diri');

            $pathpengantar  = $request->file('fpengantar')->store('skdu/'.$request->nik.'/data pendukung');

            if ($request->file('faktapendirian') == null && $request->file('fbuktiusaha') == null && $request->file('fbuktisewa') == null) {
                $path4    = $request->file('fizinlingkungan')->store('skdu/'.$request->nik.'/data pendukung');
                $path5    = $request->file('fpbbdusaha')->store('skdu/'.$request->nik.'/data pendukung');

                $data2 = [ 
                    'fpengantar'    => $pathpengantar,
                    'fktp'          => $pathktp,
                    'fkk'           => $pathkk,
                    'file4'         => $path4,
                    'file5'         => $path5,
                ];
    
                $data = $data1+$data2;
    
            } else if ($request->file('faktapendirian') != null && $request->file('fbuktiusaha') == null && $request->file('fbuktisewa') == null) {
                $path1    = $request->file('faktapendirian')->store('skdu/'.$request->nik.'/data pendukung');
                $path4    = $request->file('fizinlingkungan')->store('skdu/'.$request->nik.'/data pendukung');
                $path5    = $request->file('fpbbdusaha')->store('skdu/'.$request->nik.'/data pendukung');

                $data2 = [ 
                    'fpengantar'    => $pathpengantar,
                    'fktp'          => $pathktp,
                    'fkk'           => $pathkk,
                    'file1'         => $path1,
                    'file4'         => $path4,
                    'file5'         => $path5,
                ];
    
                $data = $data1+$data2;
    
            } else if ($request->file('faktapendirian') == null && $request->file('fbuktiusaha') != null && $request->file('fbuktisewa') == null) {
                $path2    = $request->file('fbuktiusaha')->store('skdu/'.$request->nik.'/data pendukung');
                $path4    = $request->file('fizinlingkungan')->store('skdu/'.$request->nik.'/data pendukung');
                $path5    = $request->file('fpbbdusaha')->store('skdu/'.$request->nik.'/data pendukung');

                $data2 = [ 
                    'fpengantar'    => $pathpengantar,
                    'fktp'          => $pathktp,
                    'fkk'           => $pathkk,
                    'file2'         => $path2,
                    'file4'         => $path4,
                    'file5'         => $path5,
                ];
    
                $data = $data1+$data2;
    
            } else if ($request->file('faktapendirian') == null && $request->file('fbuktiusaha') == null && $request->file('fbuktisewa') != null) {
                $path3    = $request->file('fbuktisewa')->store('skdu/'.$request->nik.'/data pendukung');
                $path4    = $request->file('fizinlingkungan')->store('skdu/'.$request->nik.'/data pendukung');
                $path5    = $request->file('fpbbdusaha')->store('skdu/'.$request->nik.'/data pendukung');

                $data2 = [ 
                    'fpengantar'    => $pathpengantar,
                    'fktp'          => $pathktp,
                    'fkk'           => $pathkk,
                    'file3'         => $path3,
                    'file4'         => $path4,
                    'file5'         => $path5,
                ];
    
                $data = $data1+$data2;
    
            } else if ($request->file('faktapendirian') != null && $request->file('fbuktiusaha') != null && $request->file('fbuktisewa') == null) {
                $path1    = $request->file('faktapendirian')->store('skdu/'.$request->nik.'/data pendukung');
                $path2    = $request->file('fbuktiusaha')->store('skdu/'.$request->nik.'/data pendukung');
                $path4    = $request->file('fizinlingkungan')->store('skdu/'.$request->nik.'/data pendukung');
                $path5    = $request->file('fpbbdusaha')->store('skdu/'.$request->nik.'/data pendukung');

                $data2 = [ 
                    'fpengantar'    => $pathpengantar,
                    'fktp'          => $pathktp,
                    'fkk'           => $pathkk,
                    'file1'         => $path1,
                    'file2'         => $path2,
                    'file4'         => $path4,
                    'file5'         => $path5,
                ];
    
                $data = $data1+$data2;
    
            } else if ($request->file('faktapendirian') == null && $request->file('fbuktiusaha') != null && $request->file('fbuktisewa') != null) {
                $path2    = $request->file('fbuktiusaha')->store('skdu/'.$request->nik.'/data pendukung');
                $path3    = $request->file('fbuktisewa')->store('skdu/'.$request->nik.'/data pendukung');
                $path4    = $request->file('fizinlingkungan')->store('skdu/'.$request->nik.'/data pendukung');
                $path5    = $request->file('fpbbdusaha')->store('skdu/'.$request->nik.'/data pendukung');

                $data2 = [ 
                    'fpengantar'    => $pathpengantar,
                    'fktp'          => $pathktp,
                    'fkk'           => $pathkk,
                    'file2'         => $path2,
                    'file3'         => $path3,
                    'file4'         => $path4,
                    'file5'         => $path5,
                ];
    
                $data = $data1+$data2;
    
            } else if ($request->file('faktapendirian') != null && $request->file('fbuktiusaha') == null && $request->file('fbuktisewa') != null) {
                $path1    = $request->file('faktapendirian')->store('skdu/'.$request->nik.'/data pendukung');
                $path3    = $request->file('fbuktisewa')->store('skdu/'.$request->nik.'/data pendukung');
                $path4    = $request->file('fizinlingkungan')->store('skdu/'.$request->nik.'/data pendukung');
                $path5    = $request->file('fpbbdusaha')->store('skdu/'.$request->nik.'/data pendukung');

                $data2 = [ 
                    'fpengantar'    => $pathpengantar,
                    'fktp'          => $pathktp,
                    'fkk'           => $pathkk,
                    'file1'         => $path1,
                    'file3'         => $path3,
                    'file4'         => $path4,
                    'file5'         => $path5,
                ];
    
                $data = $data1+$data2;
    
            } else {
                $path1    = $request->file('faktapendirian')->store('skdu/'.$request->nik.'/data pendukung');
                $path2    = $request->file('fbuktiusaha')->store('skdu/'.$request->nik.'/data pendukung');
                $path3    = $request->file('fbuktisewa')->store('skdu/'.$request->nik.'/data pendukung');
                $path4    = $request->file('fizinlingkungan')->store('skdu/'.$request->nik.'/data pendukung');
                $path5    = $request->file('fpbbdusaha')->store('skdu/'.$request->nik.'/data pendukung');

                $data2 = [ 
                    'fpengantar'    => $pathpengantar,
                    'fktp'          => $pathktp,
                    'fkk'           => $pathkk,
                    'file1'         => $path1,
                    'file2'         => $path2,
                    'file3'         => $path3,
                    'file4'         => $path4,
                    'file5'         => $path5,
                ];
    
                $data = $data1+$data2;    
            }

            if ($this->surat->checkJenis($check) > 0) {
                return redirect('/surat')->with('error', 'Anda sudah pernah mengajukan surat ini.');
            }

            $this->surat->tambahData($data);

            return redirect('/surat')->with('status', 'Surat Anda berhasil dikirim.');
        }

        // Surat Pengantar IMB
        if ($check == 'spimb') {
            $validated = $request->validate([
                'ftanahimb'     => 'required|mimes:pdf|max:2000',
                'fspptpbbimb'      => 'required|mimes:jpeg,jpg,png|max:2000',
                'fpbbimb'      => 'required|mimes:jpeg,jpg,png|max:2000',
            ],[
                'ftanahimb.required'        => 'Surat Keterangan Lahir harus diisi.',
                'ftanahimb.mimes'           => 'Format file harus: pdf.',
                'ftanahimb.max'             => 'File tidak boleh lebih dari 2 MB',
                'fspptpbbimb.required'         => 'Surat Nikah harus diisi.',
                'fspptpbbimb.mimes'            => 'Format file harus: jpeg,jpg,png.',
                'fspptpbbimb.max'              => 'File tidak boleh lebih dari 2 MB',
                'fpbbimb.required'         => 'Surat Nikah harus diisi.',
                'fpbbimb.mimes'            => 'Format file harus: jpeg,jpg,png.',
                'fpbbimb.max'              => 'File tidak boleh lebih dari 2 MB',
            ]);

            $pathktp    = $request->file('fktp')->store('spimb/'.$request->nik.'/data diri');
            $pathkk     = $request->file('fkk')->store('spimb/'.$request->nik.'/data diri');

            $pathpengantar  = $request->file('fpengantar')->store('spimb/'.$request->nik.'/data pendukung');
            $path1   = $request->file('ftanahimb')->store('spimb/'.$request->nik.'/data pendukung');
            $path2    = $request->file('fspptpbbimb')->store('spimb/'.$request->nik.'/data pendukung');
            $path3    = $request->file('fpbbimb')->store('spimb/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
                'file1'         => $path1,
                'file2'         => $path2,
                'file3'         => $path3,
            ];

            $data = $data1+$data2;

            if ($this->surat->checkJenis($check) > 0) {
                return redirect('/surat')->with('error', 'Anda sudah pernah mengajukan surat ini.');
            }

            $this->surat->tambahData($data);

            return redirect('/surat')->with('status', 'Surat Anda berhasil dikirim.');
        }

        // Surat Pengantar Nikah
        if ($check == 'spnikah') {
            $validated = $request->validate([
                'fspbelumnikah'     => 'required|mimes:pdf|max:2000',
                'fpbbnikah'      => 'required|mimes:jpeg,jpg,png|max:2000',
            ],[
                'fspbelumnikah.required'        => 'Surat Keterangan Lahir harus diisi.',
                'fspbelumnikah.mimes'           => 'Format file harus: pdf.',
                'fspbelumnikah.max'             => 'File tidak boleh lebih dari 2 MB',
                'fpbbnikah.required'         => 'Surat Nikah harus diisi.',
                'fpbbnikah.mimes'            => 'Format file harus: jpeg,jpg,png.',
                'fpbbnikah.max'              => 'File tidak boleh lebih dari 2 MB',
            ]);

            $pathktp    = $request->file('fktp')->store('spnikah/'.$request->nik.'/data diri');
            $pathkk     = $request->file('fkk')->store('spnikah/'.$request->nik.'/data diri');

            $pathpengantar  = $request->file('fpengantar')->store('spnikah/'.$request->nik.'/data pendukung');
            $path1   = $request->file('fspbelumnikah')->store('spnikah/'.$request->nik.'/data pendukung');
            $path2    = $request->file('fpbbnikah')->store('spnikah/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
                'file1'         => $path1,
                'file2'         => $path2,
            ];

            $data = $data1+$data2;

            if ($this->surat->checkJenis($check) > 0) {
                return redirect('/surat')->with('error', 'Anda sudah pernah mengajukan surat ini.');
            }

            $this->surat->tambahData($data);

            return redirect('/surat')->with('status', 'Surat Anda berhasil dikirim.');
        }

        // Surat Pengantar Nikah di Catatan Sipil
        if ($check == 'spnikahcp') {
            $validated = $request->validate([
                'fspcp'     => 'mimes:pdf|max:2000',
                'fpbbcp'      => 'required|mimes:jpeg,jpg,png|max:2000',
            ],[
                'fspcp.mimes'           => 'Format file harus: pdf.',
                'fspcp.max'             => 'File tidak boleh lebih dari 2 MB',
                'fpbbcp.required'         => 'Surat Nikah harus diisi.',
                'fpbbcp.mimes'            => 'Format file harus: jpeg,jpg,png.',
                'fpbbcp.max'              => 'File tidak boleh lebih dari 2 MB',
            ]);

            $pathktp    = $request->file('fktp')->store('spnikahcp/'.$request->nik.'/data diri');
            $pathkk     = $request->file('fkk')->store('spnikahcp/'.$request->nik.'/data diri');

            $pathpengantar  = $request->file('fpengantar')->store('spnikahcp/'.$request->nik.'/data pendukung');

            if ($request->file('fspcp') == null) {
                $path2    = $request->file('fpbbcp')->store('spnikahcp/'.$request->nik.'/data pendukung');
    
                $data2 = [ 
                    'fpengantar'    => $pathpengantar,
                    'fktp'          => $pathktp,
                    'fkk'           => $pathkk,
                    'file2'         => $path2,
                ];
    
                $data = $data1+$data2;
            } else {
                $path1   = $request->file('fspcp')->store('spnikahcp/'.$request->nik.'/data pendukung');
                $path2    = $request->file('fpbbcp')->store('spnikahcp/'.$request->nik.'/data pendukung');
    
                $data2 = [ 
                    'fpengantar'    => $pathpengantar,
                    'fktp'          => $pathktp,
                    'fkk'           => $pathkk,
                    'file1'         => $path1,
                    'file2'         => $path2,
                ];
    
                $data = $data1+$data2;
            }

            if ($this->surat->checkJenis($check) > 0) {
                return redirect('/surat')->with('error', 'Anda sudah pernah mengajukan surat ini.');
            }

            $this->surat->tambahData($data);

            return redirect('/surat')->with('status', 'Surat Anda berhasil dikirim.');
        }

        // Surat Pengantar Nikah untuk Janda/Duda
        if ($check == 'spnikahdj') {
            $validated = $request->validate([
                'fcerai'     => 'required|mimes:pdf|max:2000',
                'fpbbcerai'      => 'required|mimes:jpeg,jpg,png|max:2000',
            ],[
                'fcerai.required'        => 'Surat Keterangan Lahir harus diisi.',
                'fcerai.mimes'           => 'Format file harus: pdf.',
                'fcerai.max'             => 'File tidak boleh lebih dari 2 MB',
                'fpbbcerai.required'         => 'Surat Nikah harus diisi.',
                'fpbbcerai.mimes'            => 'Format file harus: jpeg,jpg,png.',
                'fpbbcerai.max'              => 'File tidak boleh lebih dari 2 MB',
            ]);

            $pathktp    = $request->file('fktp')->store('spnikahdj/'.$request->nik.'/data diri');
            $pathkk     = $request->file('fkk')->store('spnikahdj/'.$request->nik.'/data diri');

            $pathpengantar  = $request->file('fpengantar')->store('spnikahdj/'.$request->nik.'/data pendukung');
            $path1   = $request->file('fcerai')->store('spnikahdj/'.$request->nik.'/data pendukung');
            $path2    = $request->file('fpbbcerai')->store('spnikahdj/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
                'file1'         => $path1,
                'file2'         => $path2,
            ];

            $data = $data1+$data2;

            if ($this->surat->checkJenis($check) > 0) {
                return redirect('/surat')->with('error', 'Anda sudah pernah mengajukan surat ini.');
            }

            $this->surat->tambahData($data);

            return redirect('/surat')->with('status', 'Surat Anda berhasil dikirim.');
        }

        // Surat Pengantar SKKM
        if ($check == 'spskkm') {
            $pathktp    = $request->file('fktp')->store('spskkm/'.$request->nik.'/data diri');
            $pathkk     = $request->file('fkk')->store('spskkm/'.$request->nik.'/data diri');

            $pathpengantar  = $request->file('fpengantar')->store('spskkm/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
            ];

            $data = $data1+$data2;

            if ($this->surat->checkJenis($check) > 0) {
                return redirect('/surat')->with('error', 'Anda sudah pernah mengajukan surat ini.');
            }

            $this->surat->tambahData($data);

            return redirect('/surat')->with('status', 'Surat Anda berhasil dikirim.');
        }

        // Surat Pengantar SKCK
        if ($check == 'spskck') {
            $validated = $request->validate([
                'ffotoskck'     => 'required|mimes:jpeg,jpg,png|max:2000',
                'fpbbskck'      => 'required|mimes:jpeg,jpg,png|max:2000',
            ],[
                'ffotoskck.required'        => 'Surat Keterangan Lahir harus diisi.',
                'ffotoskck.mimes'           => 'Format file harus: jpeg,jpg,png.',
                'ffotoskck.max'             => 'File tidak boleh lebih dari 2 MB',
                'fpbbskck.required'         => 'Surat Nikah harus diisi.',
                'fpbbskck.mimes'            => 'Format file harus: jpeg,jpg,png.',
                'fpbbskck.max'              => 'File tidak boleh lebih dari 2 MB',
            ]);

            $pathktp    = $request->file('fktp')->store('spskck/'.$request->nik.'/data diri');
            $pathkk     = $request->file('fkk')->store('spskck/'.$request->nik.'/data diri');

            $pathpengantar  = $request->file('fpengantar')->store('spskck/'.$request->nik.'/data pendukung');
            $path1   = $request->file('ffotoskck')->store('spskck/'.$request->nik.'/data pendukung');
            $path2    = $request->file('fpbbskck')->store('spskck/'.$request->nik.'/data pendukung');

            $data2 = [ 
                'fpengantar'    => $pathpengantar,
                'fktp'          => $pathktp,
                'fkk'           => $pathkk,
                'file1'         => $path1,
                'file2'         => $path2,
            ];

            $data = $data1+$data2;

            if ($this->surat->checkJenis($check) > 0) {
                return redirect('/surat')->with('error', 'Anda sudah pernah mengajukan surat ini.');
            }

            $this->surat->tambahData($data);

            return redirect('/surat')->with('status', 'Surat Anda berhasil dikirim.');
        }
        
        return redirect('/surat')->with('error', 'Surat Anda gagal dikirim.');
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
            'penduduk'  => $this->penduduk->getAllData(),
        ];

        if(session()->get('sakses') == 'adm') {
            return view('admin.surat.show', $data);
        } elseif(session()->get('sakses') == 'opr') {
            return view('operator.surat.show', $data);
        } elseif(session()->get('sakses') == 'des') {
            return view('kepdes.surat.show', $data);
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
            'surat'         => $this->surat->getData($id),
            'penduduk'      => $this->penduduk->getAllData(),
        ];
        if(session()->get('sakses') == 'adm') {
            return view('admin.surat.edit', $data);
        } 
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
        // Mengirimkan perubahan surat ke database oleh Admin
        $current_time = Carbon::now()->toDateTimeString();
        $status = 'complete';
        $check = $request->filesk;
        $cstatus = $request->status;

        if(session()->get('sakses') == 'adm') {
            $data = [
                'status'        => $cstatus,
                'updated_at'    => $current_time,
            ];
            
            // Surat Keterangan Usaha
            if ($cstatus == 'check' && $check != null) {
                $validated = $request->validate([
                    'filesk'         => 'mimes:pdf|max:10000',
                ],[
                    'filesk.mimes'              => 'Format file harus: pdf.',
                    'filesk.max'                => 'File tidak boleh lebih dari 10 MB',
                ]);
    
                $pathfilesk = $request->file('filesk')->store('tangapan/'.$request->nik);;
    
                $data = [ 
                    'filesk'        => $pathfilesk,
                    'status'        => 'validate',
                    'updated_at'    => $current_time,
                ];
    
                $this->surat->ubahData($data, $id);
                
                return redirect('/surat')->with('status', 'Berkas berhasil dikirim.');
            } 
    
            if ($cstatus == 'reject') {
                $validated = $request->validate([
                    'alasan'            => 'required',
                ],[
                    'alasan.required'   => 'Alasan harus diisi'
                ]);
    
                $data = [ 
                    'alasan'        => $request->alasan,
                    'status'        => $cstatus,
                    'updated_at'    => $current_time,
                ];
    
                $this->surat->ubahData($data, $id);
                
                return redirect('/surat')->with('status', 'Berkas berhasil dikirim.');
            }
    
            $this->surat->ubahData($data, $id);
            
            return redirect('/surat')->with('status', 'Status berhasil diubah.');
        } 
        
        if(session()->get('sakses') == 'usr') {
            $data = [
                'status'        => $status,
                'updated_at'    => $current_time,
            ];

            $this->surat->ubahData($data, $id);
            
            return back()->with('status', 'Berkas berhasil divalidasi.');
        }

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

    public function download(Request $request) {
        return Storage::download($request->file);
    }
}
