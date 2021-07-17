@extends('layouts.user')

@section('title', 'Pengaduan')

@section('content') 
  <!-- Content -->
  <div id="content"> 
    
    <!-- Infinity Solution -->
    <section class="white-bg solution padding-top-75 padding-bottom-75">
      <div class="container dark-bg padding-25"> 
        <h4 class="text-white text-center">FORMULIR PENGADUAN</h4>
        @if (session('status'))
            <div class="m-3 alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form class="" method="POST" action="/surat/{{ $surat->id_surat }}">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="nik" value="{{ $surat->nik }}" disabled>
                        </div>
                        <div class="col-md-8 form-group">
                            <label for="nama" class="form-label">Nama Pengaju</label>
                            <input type="text" class="form-control" id="nama" value="{{ $surat->nama }}" disabled>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="jenis" class="form-label">Jenis Surat</label>
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
                        @if ($surat->status == 'pending')
                            <div class="col-md-12 form-group">
                                <div class="form-control text-white btn btn-warning">MENUNGGU</div>
                            </div>
                        @elseif ($surat->status == 'check')
                            <div class="col-md-12 form-group">
                                <div class="form-control text-white btn btn-primary">CEK BERKAS</div>
                            </div>
                        @elseif ($surat->status == 'validate')
                            <div class="col-md-12 form-group">
                                <div class="form-control text-white btn btn-warning">MENUNGGU VALIDASI</div>
                            </div>
                            <div class="col-md-12 form-group text-center">
                                <label for="filesk" class="form-label">Berkas SK/SP</label><br>
                                <a href="/download/?file={{ $surat->filesk }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                        @elseif ($surat->status == 'complete')
                            <div class="col-md-12 form-group">
                                <div class="form-control btn btn-success">SELESAI</div>
                            </div>
                            <div class="col-md-12 form-group text-center">
                                <label for="filesk" class="form-label">Berkas SK/SP</label><br>
                                <a href="/download/?file={{ $surat->filesk }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                        @else
                            <div class="col-md-12 form-group">
                                <div class="form-control btn btn-danger">DITOLAK</div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="alasan" class="form-label">Alasan Ditolak</label>
                                <textarea name="alasan" class="form-control" id="alasan" cols="30" rows="5" disabled>{{ $surat->alasan }}</textarea>
                            </div>
                        @endif
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 form-group text-center">
                            <h5 for="pesan">--------------------------- Download Data Diri Pengaju ---------------------------</h5>
                        </div>
                        <div class="col-md-6 form-group text-center">
                            <label for="fktp" class="form-label">Foto KTP Pengaju</label><br>
                            <a href="/download/?file={{ $surat->fktp }}">
                                <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                            </a>
                        </div>
                        <div class="col-md-6 form-group text-center">
                            <label for="fkk" class="form-label">Foto KK Pengaju</label><br>
                            <a href="/download/?file={{ $surat->fkk }}">
                                <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                            </a>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-12 form-group text-center">
                            <h5 for="pesan">--------------------------- Download Data Pendukung Pengaju ---------------------------</h5>
                        </div>
                        @if ($surat->jenis == 'skpanjangktp')
                            <div class="col-md-4 form-group text-center">
                                <label for="fpengantar" class="form-label">Surat Pengantar RT/RW</label><br>
                                <a href="/download/?file={{ $surat->fpengantar }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-4 form-group text-center">
                                <label for="file1" class="form-label">Pas Foto 3x4</label><br>
                                <a href="/download/?file={{ $surat->file1 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-4 form-group text-center">
                                <label for="file2" class="form-label">Bukti Lunas PBB</label><br>
                                <a href="/download/?file={{ $surat->file2 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                        @elseif ($surat->jenis == 'skbuatktp')
                            <div class="col-md-4 form-group text-center">
                                <label for="fpengantar" class="form-label">Surat Pengantar RT/RW</label><br>
                                <a href="/download/?file={{ $surat->fpengantar }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-4 form-group text-center">
                                <label for="file1" class="form-label">Pas Foto 3x4</label><br>
                                <a href="/download/?file={{ $surat->file1 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-4 form-group text-center">
                                <label for="file2" class="form-label">Bukti Lunas PBB</label><br>
                                <a href="/download/?file={{ $surat->file2 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                        @elseif ($surat->jenis == 'skpindah')
                            <div class="col-md-12 form-group text-center">
                                <label for="fpengantar" class="form-label">Surat Pengantar RT/RW</label><br>
                                <a href="/download/?file={{ $surat->fpengantar }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                        @elseif ($surat->jenis == 'sku')
                            <div class="col-md-4 form-group text-center">
                                <label for="fpengantar" class="form-label">Surat Pengantar RT/RW</label><br>
                                <a href="/download/?file={{ $surat->fpengantar }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-4 form-group text-center">
                                <label for="file1" class="form-label">Surat Pernyataan Kepemilikan Usaha (Bermaterai)</label><br>
                                <a href="/download/?file={{ $surat->file1 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-4 form-group text-center">
                                <label for="file2" class="form-label">Bukti Lunas PBB</label><br>
                                <a href="/download/?file={{ $surat->file2 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                        @elseif ($surat->jenis == 'sklahir')
                            <div class="col-md-3 form-group text-center">
                                <label for="fpengantar" class="form-label">Surat Pengantar RT/RW</label><br>
                                <a href="/download/?file={{ $surat->fpengantar }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-3 form-group text-center">
                                <label for="file1" class="form-label">Surat Nikah</label><br>
                                <a href="/download/?file={{ $surat->file1 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-3 form-group text-center">
                                <label for="file2" class="form-label">Surat Keterangan Lahir dari Bidan/Rumah Sakit</label><br>
                                <a href="/download/?file={{ $surat->file2 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-3 form-group text-center">
                                <label for="file3" class="form-label">Bukti Lunas PBB</label><br>
                                <a href="/download/?file={{ $surat->file2 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                        @elseif ($surat->jenis == 'skdatang')
                            <div class="col-md-6 form-group text-center">
                                <label for="fpengantar" class="form-label">Surat Pengantar RT/RW</label><br>
                                <a href="/download/?file={{ $surat->fpengantar }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-6 form-group text-center">
                                <label for="file1" class="form-label">Surat Keterangan Pindah dari Daerah Asal</label><br>
                                <a href="/download/?file={{ $surat->file1 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                        @elseif ($surat->jenis == 'skmati')
                            <div class="col-md-4 form-group text-center">
                                <label for="fpengantar" class="form-label">Surat Pengantar RT/RW</label><br>
                                <a href="/download/?file={{ $surat->fpengantar }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-4 form-group text-center">
                                <label for="file1" class="form-label">KTP yang Meninggal</label><br>
                                <a href="/download/?file={{ $surat->file1 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            @if ($surat->file2 == null)
                            <div class="col-md-4 form-group text-center">
                                <label for="file2" class="form-label">Surat Keterangan Kematian dari Rumah Sakit</label><br>
                                <div class="form-control btn btn-danger">KOSONG</div>
                            </div>
                            @else
                                <div class="col-md-4 form-group text-center">
                                    <label for="file2" class="form-label">Surat Keterangan Kematian dari Rumah Sakit</label><br>
                                    <a href="/download/?file={{ $surat->file2 }}">
                                        <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                    </a>
                                </div>
                            @endif
                        @elseif ($surat->jenis == 'skubahkk')
                            <div class="col-md-12 form-group text-center">
                                <label for="fpengantar" class="form-label">Surat Pengantar RT/RW</label><br>
                                <a href="/download/?file={{ $surat->fpengantar }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                        @elseif ($surat->jenis == 'sdtinggal')
                            <div class="col-md-12 form-group text-center">
                                <label for="fpengantar" class="form-label">Surat Pengantar RT/RW</label><br>
                                <a href="/download/?file={{ $surat->fpengantar }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                        @elseif ($surat->jenis == 'skrt')
                            <div class="col-md-3 form-group text-center">
                                <label for="fpengantar" class="form-label">Surat Pengantar RT/RW</label><br>
                                <a href="/download/?file={{ $surat->fpengantar }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-3 form-group text-center">
                                <label for="file1" class="form-label">Akta Jual Beli</label><br>
                                <a href="/download/?file={{ $surat->file1 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-3 form-group text-center">
                                <label for="file2" class="form-label">Salinan C</label><br>
                                <a href="/download/?file={{ $surat->file2 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-3 form-group text-center">
                                <label for="file3" class="form-label">Bukti Lunas PBB</label><br>
                                <a href="/download/?file={{ $surat->file3 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                        @elseif ($surat->jenis == 'skdu')
                            <div class="col-md-4 form-group text-center">
                                <label for="fpengantar" class="form-label">Surat Pengantar RT/RW</label><br>
                                <a href="/download/?file={{ $surat->fpengantar }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            @if ($surat->file1 == null)
                                <div class="col-md-4 form-group text-center">
                                    <label for="file1" class="form-label">Akta Pendirian (CV, PT, UD)</label><br>
                                    <div class="btn btn-danger">KOSONG</div>
                                </div>
                            @else
                                <div class="col-md-4 form-group text-center">
                                    <label for="file1" class="form-label">Akta Pendirian (CV, PT, UD)</label><br>
                                    <a href="/download/?file={{ $surat->file1 }}">
                                        <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                    </a>
                                </div>
                            @endif
                            @if ($surat->file2 == null)
                                <div class="col-md-4 form-group text-center">
                                    <label for="file2" class="form-label">Bukti Kepemilikan Tempat Usaha</label><br>
                                    <div class="btn btn-danger">KOSONG</div>
                                </div>
                            @else
                                <div class="col-md-4 form-group text-center">
                                    <label for="file2" class="form-label">Bukti Kepemilikan Tempat Usaha</label><br>
                                    <a href="/download/?file={{ $surat->file2 }}">
                                        <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                    </a>
                                </div>
                            @endif
                            @if ($surat->file3 == null)
                                <div class="col-md-4 form-group text-center">
                                    <label for="file3" class="form-label">Bukti Sewa</label><br>
                                    <div class="btn btn-danger">KOSONG</div>
                                </div>
                            @else
                                <div class="col-md-4 form-group text-center">
                                    <label for="file3" class="form-label">Bukti Sewa</label><br>
                                    <a href="/download/?file={{ $surat->file3 }}">
                                        <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                    </a>
                                </div>
                            @endif
                            <div class="col-md-4 form-group text-center">
                                <label for="file4" class="form-label">Izin Lingkungan</label><br>
                                <a href="/download/?file={{ $surat->file4 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-4 form-group text-center">
                                <label for="file5" class="form-label">Bukti Lunas PBB</label><br>
                                <a href="/download/?file={{ $surat->file5 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                        @elseif ($surat->jenis == 'spimb')
                            <div class="col-md-3 form-group text-center">
                                <label for="fpengantar" class="form-label">Surat Pengantar RT/RW</label><br>
                                <a href="/download/?file={{ $surat->fpengantar }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-3 form-group text-center">
                                <label for="file1" class="form-label">Surat Bukti Kepemilikan Tanah</label><br>
                                <a href="/download/?file={{ $surat->file1 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-3 form-group text-center">
                                <label for="file2" class="form-label">SPPT PBB</label><br>
                                <a href="/download/?file={{ $surat->file2 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-3 form-group text-center">
                                <label for="file3" class="form-label">Bukti Lunas PBB</label><br>
                                <a href="/download/?file={{ $surat->file3 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                        @elseif ($surat->jenis == 'spnikah')
                            <div class="col-md-4 form-group text-center">
                                <label for="fpengantar" class="form-label">Surat Pengantar RT/RW</label><br>
                                <a href="/download/?file={{ $surat->fpengantar }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-4 form-group text-center">
                                <label for="file1" class="form-label">Surat Pernyataan Belum Menikah dari Pemohon (Bermaterai)</label><br>
                                <a href="/download/?file={{ $surat->file1 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-4 form-group text-center">
                                <label for="file2" class="form-label">Bukti Lunas PBB</label><br>
                                <a href="/download/?file={{ $surat->file2 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                        @elseif ($surat->jenis == 'spnikahcp')
                            <div class="col-md-4 form-group text-center">
                                <label for="fpengantar" class="form-label">Surat Pengantar RT/RW</label><br>
                                <a href="/download/?file={{ $surat->fpengantar }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            @if ($surat->file1 == null)
                                <div class="col-md-4 form-group text-center">
                                    <label for="file1" class="form-label">Surat Pengantar dari Gereja atau Pure</label><br>
                                    <div class="btn btn-danger">KOSONG</div>
                                </div>
                            @else
                                <div class="col-md-4 form-group text-center">
                                    <label for="file1" class="form-label">Surat Pengantar dari Gereja atau Pure</label><br>
                                    <a href="/download/?file={{ $surat->file1 }}">
                                        <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                    </a>
                                </div>
                            @endif
                            <div class="col-md-4 form-group text-center">
                                <label for="file2" class="form-label">Bukti Lunas PBB</label><br>
                                <a href="/download/?file={{ $surat->file2 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                        @elseif ($surat->jenis == 'spnikahdj')
                            <div class="col-md-4 form-group text-center">
                                <label for="fpengantar" class="form-label">Surat Pengantar RT/RW</label><br>
                                <a href="/download/?file={{ $surat->fpengantar }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-4 form-group text-center">
                                <label for="file1" class="form-label">Surat Cerai dari Pengadilan Agama</label><br>
                                <a href="/download/?file={{ $surat->file1 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-4 form-group text-center">
                                <label for="file2" class="form-label">Bukti Lunas PBB</label><br>
                                <a href="/download/?file={{ $surat->file2 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                        @elseif ($surat->jenis == 'spskkm')
                            <div class="col-md-12 form-group text-center">
                                <label for="fpengantar" class="form-label">Surat Pengantar RT/RW</label><br>
                                <a href="/download/?file={{ $surat->fpengantar }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                        @elseif ($surat->jenis == 'spskck')
                            <div class="col-md-4 form-group text-center">
                                <label for="fpengantar" class="form-label">Surat Pengantar RT/RW</label><br>
                                <a href="/download/?file={{ $surat->fpengantar }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-4 form-group text-center">
                                <label for="file1" class="form-label">Pas Foto 3x4</label><br>
                                <a href="/download/?file={{ $surat->file1 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                            <div class="col-md-4 form-group text-center">
                                <label for="file2" class="form-label">Bukti Lunas PBB</label><br>
                                <a href="/download/?file={{ $surat->file2 }}">
                                    <button type="button" class="btn btn-success"><i class="fa fa-download"></i> DOWNLOAD</button>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-xs-10">
                            <button type="button" class="btn btn-info"><a href="/surat" class="text-white"><span class="fa fa-times-circle"></span> KEMBALI</a></button>
                            @if ($surat->status == 'validate')
                                <button type="submit" class="btn btn-success"><span class="fa fa-location-arrow"></span> SIMPAN</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    
  </div>
  <!-- End Content --> 
@endsection