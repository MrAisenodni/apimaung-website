@extends('layouts.user')

@section('title', 'Pengaduan')

@section('content') 
  <!-- Content -->
  <div id="content"> 
    
    <!-- Infinity Solution -->
    <section class="white-bg solution padding-top-75 padding-bottom-75">
      <div class="container dark-bg padding-25"> 
        <h4 class="text-white text-center">FORMULIR PENGADUAN</h4>
        <form method="POST" action="/pengaduan">
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
                            <div class="col-lg-12 col-xs-10">
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" id="nik" class="form-control" value="{{ session()->get('snik') }} | {{ session()->get('spenduduk') }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="judul">Judul Pengaduan</label>
                                    <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="Masukkan Judul Pengaduan" name="judul" value="{{ old('judul') }}">
                                    @error('judul')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="tgl_jadi">Tanggal Kejadian</label>
                                    <input type="date" class="form-control @error('tgl_jadi') is-invalid @enderror" id="tgl_jadi" placeholder="Masukkan Tanggal Kejadian" name="tgl_jadi" value="{{ old('tgl_jadi') }}">
                                    @error('tgl_jadi')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="pesan">Pesan Pengaduan</label>
                                    <textarea class="form-control @error('pesan') is-invalid @enderror" name="pesan" id="pesan" cols="60" rows="8" placeholder="Masukkan Pesan Pengaduan">{{ old('pesan') }}</textarea>
                                    @error('pesan')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="lokasi">Lokasi Kejadian</label>
                                    <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" placeholder="Masukkan Lokasi Kejadian" name="lokasi" value="{{ old('lokasi') }}">
                                    @error('lokasi')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="instansi">Instansi Tujuan</label>
                                    <input type="text" class="form-control @error('instansi') is-invalid @enderror" id="instansi" placeholder="Masukkan Instansi Tujuan" name="instansi" value="{{ old('instansi') }}">
                                    @error('instansi')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="kategori">Kategori Pengaduan Anda</label>
                                    <select class="form-control @error('instansi') is-invalid @enderror" name="kategori" id="kategori">
                                        <option value="">-- Pilih Kategori Pengaduan --</option>
                                        <option value="penting">Penting</option>
                                        <option value="umum">Umum</option>
                                    </select>
                                    @error('kategori')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-warning margin-right-10"><a href="/pengaduan" class="text-white">KEMBALI</a></button>
                        <button type="submit" class="btn btn-orange">KIRIM</button>
                    </div>
                </div>
            </div>
    </form>
    </section>
    
  </div>
  <!-- End Content --> 
@endsection