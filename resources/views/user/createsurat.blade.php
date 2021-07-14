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
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Judul Pengaduan" name="nama" value="{{ session()->get('spenduduk') }}">
                                    @error('nama')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-xs-12">
                                <div class="form-group">
                                    <label for="jenis">Jenis Surat</label>
                                    <select class="form-control @error('jenis') is-invalid @enderror" name="jenis" id="jenis">
                                        @if (old('jenis') == 'sku')
                                            <option value="sku">Surat Keterangan Usaha</option>
                                        @elseif (old('jenis') == 'sktm')
                                            <option value="sktm">Surat Keterangan Tidak Mampu</option>
                                        @elseif (old('jenis') == 'skm')
                                            <option value="skm">Surat Keterangan Miskin</option>
                                        @elseif (old('jenis') == 'skbpm')
                                            <option value="skbpm">Surat Keterangan Belum Pernah Menikah</option>
                                        @elseif (old('jenis') == 'sklahir')
                                            <option value="sklahir">Surat Keterangan Kelahiran</option>
                                        @elseif (old('jenis') == 'skmati')
                                            <option value="skmati">Surat Keterangan Kematian</option>
                                        @elseif (old('jenis') == 'skbn')
                                            <option value="skbn">Surat Keterangan Beda Nama</option>
                                        @elseif (old('jenis') == 'skp')
                                            <option value="skp">Surat Keterangan Penghasilan</option>
                                        @elseif (old('jenis') == 'skht')
                                            <option value="skht">Surat Keterangan Harga Tanah</option>
                                        @endif
                                        <option value="">-- Pilih Jenis Surat --</option>
                                        <option value="sku">Surat Keterangan Usaha</option>
                                        <option value="sktm">Surat Keterangan Tidak Mampu</option>
                                        <option value="skm">Surat Keterangan Miskin</option>
                                        <option value="skbpm">Surat Keterangan Belum Pernah Menikah</option>
                                        <option value="sklahir">Surat Keterangan Kelahiran</option>
                                        <option value="skmati">Surat Keterangan Kematian</option>
                                        <option value="skbn">Surat Keterangan Beda Nama</option>
                                        <option value="skp">Surat Keterangan Penghasilan</option>
                                        <option value="skht">Surat Keterangan Harta Tanah</option>
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
                                    <label for="fktp">Foto KTP Asli</label>
                                    <input type="file" class="form-control @error('fktp') is-invalid @enderror" id="fktp" name="fktp" value="{{ old('fktp') }}">
                                    @error('fktp')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="fkk">Foto Kartu Keluarga Asli</label>
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
                                    <label for="fpengantar">Surat Pengantar RT/RW</label>
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
                                    <label for="fusaha">Surat Pernyataan Kepemilikan Usaha (Bermaterai)</label>
                                    <input type="file" class="form-control @error('fusaha') is-invalid @enderror" id="fusaha" name="fusaha" value="{{ old('fusaha') }}">
                                    @error('fusaha')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="fbuktipbbsku">Bukti Lunas PBB</label>
                                    <input type="file" class="form-control @error('fbuktipbbsku') is-invalid @enderror" id="fbuktipbbsku" name="fbuktipbbsku" value="{{ old('fbuktipbbsku') }}">
                                    @error('fbuktipbbsku')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Surat Keterangan Kelahiran --}}
                        <div class="row sklahir box">
                            <div class="col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="fnikah">Surat Nikah</label>
                                    <input type="file" class="form-control @error('fnikah') is-invalid @enderror" id="fnikah" name="fnikah" value="{{ old('fnikah') }}">
                                    @error('fnikah')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="fketlahir">Surat Keterangan Lahir dari Rumah Sakit</label>
                                    <input type="file" class="form-control @error('fketlahir') is-invalid @enderror" id="fketlahir" name="fketlahir" value="{{ old('fketlahir') }}">
                                    @error('fketlahir')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="fbuktipbblahir">Bukti Lunas PBB</label>
                                    <input type="file" class="form-control @error('fbuktipbblahir') is-invalid @enderror" id="fbuktipbblahir" name="fbuktipbblahir" value="{{ old('fbuktipbblahir') }}">
                                    @error('fbuktipbblahir')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Surat Keterangan Kematian --}}
                        <div class="row skmati box">
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="fktpmati">Foto KTP yang Meninggal</label>
                                    <input type="file" class="form-control @error('fktpmati') is-invalid @enderror" id="fktpmati" name="fktpmati" value="{{ old('fktpmati') }}">
                                    @error('fktpmati')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="fketmati">Surat Keterangan Kematian dari Rumah Sakit</label>
                                    <input type="file" class="form-control @error('fketmati') is-invalid @enderror" id="fketmati" name="fketmati" value="{{ old('fketmati') }}">
                                    @error('fketmati')
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