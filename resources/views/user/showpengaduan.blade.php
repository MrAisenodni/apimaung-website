@extends('layouts.user')

@section('title', 'Pengaduan')

@section('content') 
  <!-- Content -->
  <div id="content"> 
    
    <!-- Infinity Solution -->
    <section class="white-bg solution padding-top-75 padding-bottom-75">
      <div class="container dark-bg padding-25"> 
        <h4 class="text-white text-center">FORMULIR PENGADUAN</h4>
        <form>
            @csrf
            <div class="row">
                <div class="col-lg-12 col-xs-12">
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
                                    <input type="text" class="form-control" id="judul" value="{{ $pengaduan->judul }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="tgl_jadi">Tanggal Kejadian</label>
                                    <input type="text" class="form-control" id="tgl_jadi" value="{{ $pengaduan->tgl_kejadian }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="pesan">Pesan Pengaduan</label>
                                    <textarea class="form-control" id="pesan" cols="60" rows="8" disabled>{{ $pengaduan->pesan }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="lokasi">Lokasi Kejadian</label>
                                    <input type="text" class="form-control" id="lokasi" value="{{ $pengaduan->lokasi }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="instansi">Instansi Tujuan</label>
                                    <input type="text" class="form-control" id="instansi" value="{{ $pengaduan->instansi }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="kategori">Kategori Pengaduan Anda</label>
                                    @if ($pengaduan->kategori == 'penting')
                                        <input type="text" class="form-control text-danger" id="kategori" disabled value="PENTING">
                                    @else
                                        <input type="text" class="form-control text-warning" id="kategori" disabled value="UMUM"> 
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row margin-top-25">
                            <div class="col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="nip">NIP Penanggap</label>
                                    <input type="text" class="form-control" id="nip" value="{{ $pengaduan->nip }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-8 col-xs-12">
                                <div class="form-group">
                                    <label for="nama">Nama Penanggap</label>
                                    <input type="text" class="form-control" id="nama" value="{{ $pengaduan->angbpd }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xs-12">
                                <div class="form-group">
                                    <label for="balas_pesan">Pesan Penanggap</label>
                                    <textarea class="form-control" id="balas_pesan" cols="60" rows="8" disabled>{{ $pengaduan->balas_pesan }}</textarea>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-warning"><a href="/pengaduan" class="text-white">KEMBALI</a></button>
                    </div>
                </div>
            </div>
    </form>
    </section>
    
  </div>
  <!-- End Content --> 
@endsection