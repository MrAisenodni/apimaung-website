@extends('layouts.user')

@section('title', 'Surat Online')

@section('content') 
  <!-- Content -->
  <div id="content"> 
    
    <!-- Infinity Solution -->
    <section class="white-bg solution padding-top-75 padding-bottom-75">
      <div class="container dark-bg padding-25"> 
        <h4 class="text-white text-center">FORMULIR SURAT ONLINE</h4>
        <form method="POST" action="/surat" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    @if (session('status'))
                        <div class="m-3 alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- /.box-title -->
                        <div class="row">
                            <div class="col-lg-4 col-xs-10">
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" id="nik" class="form-control" name="nik" value="{{ session()->get('snik') }}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-8 col-xs-12">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Judul Pengaduan" name="nama" value="{{ session()->get('spenduduk') }}" readonly>
                                    @error('nama')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-xs-12">
                                <div class="form-group">
                                    <label for="jenis">Jenis Surat</label>
                                    <select class="form-control @error('jenis') is-invalid @enderror js-example-matcher-start" name="jenis" id="jenis">
                                        @if (old('jenis') == 'skpanjangktp')
                                            <option value="skpanjangktp">Surat Keterangan Perpanjang KTP</option>
                                        @elseif (old('jenis') == 'skbuatktp')
                                            <option value="skbuatktp">Surat Keterangan Pembuatan KTP</option>
                                        @elseif (old('jenis') == 'skpindah')
                                            <option value="skpindah">Surat Keterangan PINDAH</option>
                                        @elseif (old('jenis') == 'skdatang')
                                            <option value="skdatang">Surat Keterangan DATANg</option>
                                        @elseif (old('jenis') == 'sklahir')
                                            <option value="sklahir">Surat Keterangan Lahir</option>
                                        @elseif (old('jenis') == 'skmati')
                                            <option value="skmati">Surat Keterangan Kematian</option>
                                        @elseif (old('jenis') == 'skubahkk')
                                            <option value="skubahkk">Perubahan Data KK</option>
                                        @elseif (old('jenis') == 'sdtinggal')
                                            <option value="sdtinggal">Surat Domisili Tempat Tinggal</option>
                                        @elseif (old('jenis') == 'skrt')
                                            <option value="skrt">Surat Keterangan Riwayat Tanah</option>
                                        @elseif (old('jenis') == 'skdu')
                                            <option value="skdu">Surat Keterangan Domisili Usaha</option>
                                        @elseif (old('jenis') == 'sku')
                                            <option value="sku">Surat Keterangan Usaha</option>
                                        @elseif (old('jenis') == 'spimb')
                                            <option value="spimb">Surat Pengantar IMB</option>
                                        @elseif (old('jenis') == 'spnikah')
                                            <option value="spnikah">Surat Pengantar Nikah</option>
                                        @elseif (old('jenis') == 'spnikahcp')
                                            <option value="spnikahcp">Surat Pengantar Nikah di Catatan Sipil</option>
                                        @elseif (old('jenis') == 'spnikahdj')
                                            <option value="spnikahdj">Surat Pengantar Nikah untuk Janda/Duda</option>
                                        @elseif (old('jenis') == 'spskkm')
                                            <option value="spskkm">Surat Pengantar SKKM</option>
                                        @elseif (old('jenis') == 'spskck')
                                            <option value="spskck">Surat Pengantar SKCK</option>
                                        @endif
                                        <option value="">-- Pilih Jenis Surat --</option>
                                        <option value="skpanjangktp">Surat Keterangan Perpanjang KTP</option>
                                        <option value="skbuatktp">Surat Keterangan Pembuatan KTP</option>
                                        <option value="skpindah">Surat Keterangan PINDAH</option>
                                        <option value="skdatang">Surat Keterangan DATANG</option>
                                        <option value="sklahir">Surat Keterangan Lahir</option>
                                        <option value="skmati">Surat Keterangan Kematian</option>
                                        <option value="skubahkk">Perubahan Data KK</option>
                                        <option value="sdtinggal">Surat Domisili Tempat Tinggal</option>
                                        <option value="skrt">Surat Keterangan Riwayat Tanah</option>
                                        <option value="skdu">Surat Keterangan Domisili Usaha</option>
                                        <option value="sku">Surat Keterangan Usaha</option>
                                        <option value="spimb">Surat Pengantar IMB</option>
                                        <option value="spnikah">Surat Pengantar Nikah</option>
                                        <option value="spnikahcp">Surat Pengantar Nikah di Catatan Sipil</option>
                                        <option value="spnikahdj">Surat Pengantar Nikah untuk Janda/Duda</option>
                                        <option value="spskkm">Surat Pengantar SKKM</option>
                                        <option value="spskck">Surat Pengantar SKCK</option>
                                    </select>
                                    @error('jenis')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-xs-12">
                                <div class="form-group">
                                    <label for="pesan">Pesan</label>
                                    <textarea class="form-control @error('pesan') is-invalid @enderror" name="pesan" id="pesan" cols="60" rows="8" placeholder="Masukkan Pesan Pengaduan">{{ old('pesan') }}</textarea>
                                    @error('pesan')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-lg-12 col-xs-12">
                                <div class="form-group text-center">
                                    <label class="font-20px">-------------------------------- Upload Bukti Data Diri --------------------------------</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="fktp">Foto KTP Asli <span class="text-primary">(jpeg, jpg, png)</span></label>
                                    <input type="file" class="form-control @error('fktp') is-invalid @enderror" id="fktp" name="fktp" value="{{ old('fktp') }}">
                                    @error('fktp')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="fkk">Foto Kartu Keluarga Asli <span class="text-primary">(jpeg, jpg, png)</span></label>
                                    <input type="file" class="form-control @error('fkk') is-invalid @enderror" id="fkk" name="fkk" value="{{ old('fkk') }}">
                                    @error('fkk')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-lg-12 col-xs-12">
                                <div class="form-group text-center">
                                    <label class="font-20px">-------------------------------- Upload Berkas/Data Pendukung --------------------------------</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xs-12">
                                <div class="form-group">
                                    <label for="fpengantar">Surat Pengantar RT/RW <span class="text-success">(pdf)</span></label>
                                    <input type="file" class="form-control @error('fpengantar') is-invalid @enderror" id="fpengantar" name="fpengantar" value="{{ old('fpengantar') }}">
                                    @error('fpengantar')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Surat Keterangan Usaha --}}
                        <div class="row sku box">
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="fspusaha">Surat Pernyataan Kepemilikan Usaha (Bermaterai) <span class="text-success">(pdf)</span></label>
                                    <input type="file" class="form-control @error('fspusaha') is-invalid @enderror" id="fspusaha" name="fspusaha" value="{{ old('fspusaha') }}">
                                    @error('fspusaha')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="fpbbusaha">Bukti Lunas PBB <span class="text-primary">(jpeg, jpg, png)</span></label>
                                    <input type="file" class="form-control @error('fpbbusaha') is-invalid @enderror" id="fpbbusaha" name="fpbbusaha" value="{{ old('fpbbusaha') }}">
                                    @error('fpbbusaha')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Surat Keterangan Kelahiran --}}
                        <div class="row sklahir box">
                            <div class="col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="fsknikah">Surat Nikah <span class="text-success">(pdf)</span></label>
                                    <input type="file" class="form-control @error('fsknikah') is-invalid @enderror" id="fsknikah" name="fsknikah" value="{{ old('fsknikah') }}">
                                    @error('fsknikah')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="fsklahir">Surat Keterangan Lahir dari Rumah Sakit <span class="text-success">(pdf)</span></label>
                                    <input type="file" class="form-control @error('fsklahir') is-invalid @enderror" id="fsklahir" name="fsklahir" value="{{ old('fsklahir') }}">
                                    @error('fsklahir')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="fpbblahir">Bukti Lunas PBB <span class="text-primary">(jpeg, jpg, png)</span></label>
                                    <input type="file" class="form-control @error('fpbblahir') is-invalid @enderror" id="fpbblahir" name="fpbblahir" value="{{ old('fpbblahir') }}">
                                    @error('fpbblahir')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Surat Keterangan Kematian --}}
                        <div class="row skmati box">
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="fktpmati">Foto KTP yang Meninggal <span class="text-primary">(jpeg, jpg, png)</span></label>
                                    <input type="file" class="form-control @error('fktpmati') is-invalid @enderror" id="fktpmati" name="fktpmati" value="{{ old('fktpmati') }}">
                                    @error('fktpmati')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="fskmati">Surat Keterangan Kematian dari Rumah Sakit <span class="text-success">(pdf)</span></label>
                                    <input type="file" class="form-control @error('fskmati') is-invalid @enderror" id="fskmati" name="fskmati" value="{{ old('fskmati') }}">
                                    @error('fskmati')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Surat Keterangan Perpanjang KTP --}}
                        <div class="row skpanjangktp box">
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="ffotopktp">Pas Foto 3x4 <span class="text-primary">(jpeg, jpg, png)</span></label>
                                    <input type="file" class="form-control @error('ffotopktp') is-invalid @enderror" id="ffotopktp" name="ffotopktp" value="{{ old('ffotopktp') }}">
                                    @error('ffotopktp')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="fpbbpktp">Bukti Lunas PBB <span class="text-primary">(jpeg, jpg, png)</span></label>
                                    <input type="file" class="form-control @error('fpbbpktp') is-invalid @enderror" id="fpbbpktp" name="fpbbpktp" value="{{ old('fpbbpktp') }}">
                                    @error('fpbbpktp')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Surat Keterangan Pembuatan KTP --}}
                        <div class="row skbuatktp box">
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="ffotobktp">Pas Foto 3x4 <span class="text-primary">(jpeg, jpg, png)</span></label>
                                    <input type="file" class="form-control @error('ffotobktp') is-invalid @enderror" id="ffotobktp" name="ffotobktp" value="{{ old('ffotobktp') }}">
                                    @error('ffotobktp')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="fpbbbktp">Bukti Lunas PBB <span class="text-primary">(jpeg, jpg, png)</span></label>
                                    <input type="file" class="form-control @error('fpbbbktp') is-invalid @enderror" id="fpbbbktp" name="fpbbbktp" value="{{ old('fpbbbktp') }}">
                                    @error('fpbbbktp')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Surat Keterangan DATANG --}}
                        <div class="row skdatang box">
                            <div class="col-lg-12 col-xs-12">
                                <div class="form-group">
                                    <label for="fskpindah">Surat Keterangan Pindah dari Daerah Asal <span class="text-success">(pdf)</span></label>
                                    <input type="file" class="form-control @error('fskpindah') is-invalid @enderror" id="fskpindah" name="fskpindah" value="{{ old('fskpindah') }}">
                                    @error('fskpindah')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Surat Keterangan Riwayat Tanah --}}
                        <div class="row skrt box">
                            <div class="col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="fajbtanah">Akta Jual Beli <span class="text-success">(pdf)</span></label>
                                    <input type="file" class="form-control @error('fajbtanah') is-invalid @enderror" id="fajbtanah" name="fajbtanah" value="{{ old('fajbtanah') }}">
                                    @error('fajbtanah')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="fsalinc">Salinan C <span class="text-success">(pdf)</span></label>
                                    <input type="file" class="form-control @error('fsalinc') is-invalid @enderror" id="fsalinc" name="fsalinc" value="{{ old('fsalinc') }}">
                                    @error('fsalinc')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="fpbbtanah">Bukti Lunas PBB <span class="text-primary">(jpeg, jpg, png)</span></label>
                                    <input type="file" class="form-control @error('fpbbtanah') is-invalid @enderror" id="fpbbtanah" name="fpbbtanah" value="{{ old('fpbbtanah') }}">
                                    @error('fpbbtanah')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Surat Keterangan Domisili Usaha --}}
                        <div class="row skdu box">
                            <div class="col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="faktapendirian">Akta Pendirian PT, CV, UD <span class="text-danger">*(Bila Berbadan Hukum)</span> <span class="text-success">(pdf)</span></label>
                                    <input type="file" class="form-control @error('faktapendirian') is-invalid @enderror" id="faktapendirian" name="faktapendirian" value="{{ old('faktapendirian') }}">
                                    @error('faktapendirian')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="fbuktiusaha">Bukti Kepemilikan Tempat Usaha <span class="text-danger">*(Milik Saham/AJB)</span> <span class="text-primary">(jpeg, jpg, png)</span></label>
                                    <input type="file" class="form-control @error('fbuktiusaha') is-invalid @enderror" id="fbuktiusaha" name="fbuktiusaha" value="{{ old('fbuktiusaha') }}">
                                    @error('fbuktiusaha')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="fbuktisewa">Bukti Sewa <span class="text-danger">*(Bila Tempat Usaha Sewa)</span> <span class="text-primary">(jpeg, jpg, png)</span></label>
                                    <input type="file" class="form-control @error('fbuktisewa') is-invalid @enderror" id="fbuktisewa" name="fbuktisewa" value="{{ old('fbuktisewa') }}">
                                    @error('fbuktisewa')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="fizinlingkungan">Izin Lingkungan <span class="text-success">(pdf)</span></label>
                                    <input type="file" class="form-control @error('fizinlingkungan') is-invalid @enderror" id="fizinlingkungan" name="fizinlingkungan" value="{{ old('fizinlingkungan') }}">
                                    @error('fizinlingkungan')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="fpbbdusaha">Bukti Lunas PBB <span class="text-primary">(jpeg, jpg, png)</span></label>
                                    <input type="file" class="form-control @error('fpbbdusaha') is-invalid @enderror" id="fpbbdusaha" name="fpbbdusaha" value="{{ old('fpbbdusaha') }}">
                                    @error('fpbbdusaha')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Surat Pengantar IMB --}}
                        <div class="row spimb box">
                            <div class="col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="ftanahimb">Surat Bukti Kepemilihan Tanah (Saham/AJB) <span class="text-success">(pdf)</span></label>
                                    <input type="file" class="form-control @error('ftanahimb') is-invalid @enderror" id="ftanahimb" name="ftanahimb" value="{{ old('ftanahimb') }}">
                                    @error('ftanahimb')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="fspptpbbimb">SPPT-PBB <span class="text-primary">(jpeg, jpg, png)</span></label>
                                    <input type="file" class="form-control @error('fspptpbbimb') is-invalid @enderror" id="fspptpbbimb" name="fspptpbbimb" value="{{ old('fspptpbbimb') }}">
                                    @error('fspptpbbimb')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="fpbbimb">Bukti Lunas PBB <span class="text-primary">(jpeg, jpg, png)</span></label>
                                    <input type="file" class="form-control @error('fpbbimb') is-invalid @enderror" id="fpbbimb" name="fpbbimb" value="{{ old('fpbbimb') }}">
                                    @error('fpbbimb')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Surat Pengantar Nikah --}}
                        <div class="row spnikah box">
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="fspbelumnikah">Surat Pernyataan Belum Nikah dari Pemohon <span class="text-success">*(Bermaterai)</span> <span class="text-success">(pdf)</span></label>
                                    <input type="file" class="form-control @error('fspbelumnikah') is-invalid @enderror" id="fspbelumnikah" name="fspbelumnikah" value="{{ old('fspbelumnikah') }}">
                                    @error('fspbelumnikah')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="fpbbnikah">Bukti Lunas PBB <span class="text-primary">(jpeg, jpg, png)</span></label>
                                    <input type="file" class="form-control @error('fpbbnikah') is-invalid @enderror" id="fpbbnikah" name="fpbbnikah" value="{{ old('fpbbnikah') }}">
                                    @error('fpbbnikah')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Surat Pengantar Nikah di Catatan Sipil --}}
                        <div class="row spnikahcp box">
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="fspcp">Surat Pengantar dari Gereja atau Pure <span class="text-danger">*(Bagi yang beragama Kristen atau Hindu)</span>  <span class="text-success">(pdf)</span></label>
                                    <input type="file" class="form-control @error('fspcp') is-invalid @enderror" id="fspcp" name="fspcp" value="{{ old('fspcp') }}">
                                    @error('fspcp')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="fpbbcp">Bukti Lunas PBB <span class="text-primary">(jpeg, jpg, png)</span></label>
                                    <input type="file" class="form-control @error('fpbbcp') is-invalid @enderror" id="fpbbcp" name="fpbbcp" value="{{ old('fpbbcp') }}">
                                    @error('fpbbcp')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Surat Pengantar Nikah untuk Janda/Duda --}}
                        <div class="row spnikahdj box">
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="fcerai">Surat Cerai dari Pengadilan Agama <span class="text-success">(pdf)</span></label>
                                    <input type="file" class="form-control @error('fcerai') is-invalid @enderror" id="fcerai" name="fcerai" value="{{ old('fcerai') }}">
                                    @error('fcerai')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="fpbbcerai">Bukti Lunas PBB <span class="text-primary">(jpeg, jpg, png)</span></label>
                                    <input type="file" class="form-control @error('fpbbcerai') is-invalid @enderror" id="fpbbcerai" name="fpbbcerai" value="{{ old('fpbbcerai') }}">
                                    @error('fpbbcerai')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Surat Pengantar SKCK --}}
                        <div class="row spskck box">
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="ffotoskck">Pas Foto 3x4 <span class="text-primary">(jpeg, jpg, png)</span></label>
                                    <input type="file" class="form-control @error('ffotoskck') is-invalid @enderror" id="ffotoskck" name="ffotoskck" value="{{ old('ffotoskck') }}">
                                    @error('ffotoskck')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="fpbbskck">Bukti Lunas PBB <span class="text-primary">(jpeg, jpg, png)</span></label>
                                    <input type="file" class="form-control @error('fpbbskck') is-invalid @enderror" id="fpbbskck" name="fpbbskck" value="{{ old('fpbbskck') }}">
                                    @error('fpbbskck')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-warning margin-right-10"><a href="/surat" class="text-white">KEMBALI</a></button>
                        <button type="submit" class="btn btn-orange">KIRIM</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    
  </div>
  <!-- End Content --> 
@endsection