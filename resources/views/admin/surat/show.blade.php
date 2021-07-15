@extends('layouts.admin')

@section('title', 'Detail Surat Online')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">DETAIL DATA SURAT ONLINE</h1>
                        <form class="">
                            @csrf
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-4 form-group">
                                            <label for="nik" class="form-label">NIK</label>
                                            <input type="text" class="form-control" id="nik" value="{{ $surat->nik }}" disabled>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <label for="nama" class="form-label">Nama Pengaju</label>
                                            <input type="text" class="form-control" id="nama" value="{{ $surat->nama }}" disabled>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label for="jenis" class="form-label">Judul</label>
                                            @if ($surat->jenis == 'skpanjangktp')
                                                <input type="text" class="form-control" id="jenis" value="Surat Keterangan Perpanjang KTP" disabled>
                                            @elseif ($surat->jenis == 'skbuatktp')
                                                <input type="text" class="form-control" id="jenis" value="Surat Keterangan Pembuatan KTP" disabled>
                                            @elseif ($surat->jenis == 'skpindah')
                                                <input type="text" class="form-control" id="jenis" value="Surat Keterangan PINDAH" disabled>
                                            @elseif ($surat->jenis == 'skdatang')
                                                <input type="text" class="form-control" id="jenis" value="Surat Keterangan DATANG" disabled>
                                            @elseif ($surat->jenis == 'sklahir')
                                                <input type="text" class="form-control" id="jenis" value="Surat Keterangan Lahir" disabled>
                                            @elseif ($surat->jenis == 'skmati')
                                                <input type="text" class="form-control" id="jenis" value="Surat Keterangan Kematian" disabled>
                                            @elseif ($surat->jenis == 'skubahkk')
                                                <input type="text" class="form-control" id="jenis" value="Perubahan Data KK" disabled>
                                            @elseif ($surat->jenis == 'sdtinggal')
                                                <input type="text" class="form-control" id="jenis" value="Surat Domisili Tempat Tinggal" disabled>
                                            @elseif ($surat->jenis == 'skrt')
                                                <input type="text" class="form-control" id="jenis" value="Surat Keterangan Riwayat Tanah" disabled>
                                            @elseif ($surat->jenis == 'skdu')
                                                <input type="text" class="form-control" id="jenis" value="Surat Keterangan Domisili Usaha" disabled>
                                            @elseif ($surat->jenis == 'sku')
                                                <input type="text" class="form-control" id="jenis" value="Surat Keterangan Usaha" disabled>
                                            @elseif ($surat->jenis == 'spimb')
                                                <input type="text" class="form-control" id="jenis" value="Surat Pengantar IMB" disabled>
                                            @elseif ($surat->jenis == 'spnikah')
                                                <input type="text" class="form-control" id="jenis" value="Surat Pengantar Nikah" disabled>
                                            @elseif ($surat->jenis == 'spnikahcp')
                                                <input type="text" class="form-control" id="jenis" value="Surat Pengantar Nikah di Catatan Sipil" disabled>
                                            @elseif ($surat->jenis == 'spnikahdj')
                                                <input type="text" class="form-control" id="jenis" value="Surat Pengantar Nikah untuk Janda/Duda" disabled>
                                            @elseif ($surat->jenis == 'spskkm')
                                                <input type="text" class="form-control" id="jenis" value="Surat Pengantar SKKM" disabled>
                                            @elseif ($surat->jenis == 'spskck')
                                                <input type="text" class="form-control" id="jenis" value="Surat Pengantar SKCK" disabled>
                                            @endif
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label for="pesan" class="form-label">Pesan</label>
                                            <textarea name="pesan" class="form-control" id="pesan" cols="30" rows="5" disabled>{{ $surat->pesan }}</textarea>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <button type="button" class="btn btn-info"><a href="/surat" class="text-white"><span class="fas fa-times-circle"></span> KEMBALI</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </main>
@endsection