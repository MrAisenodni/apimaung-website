@extends('layouts.admin')

@section('title', 'Tanggapi Pengaduan')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">TANGGAPI PENGADUAN</h1>
                        <form class="" method="POST" action="/operator/pengaduan/{{ $pengaduan->id_pengaduan }}">
                            @method('put')
                            @csrf
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-4 form-group">
                                            <label for="nik" class="form-label">NIK</label>
                                            <input type="text" class="form-control" id="nik" value="{{ $pengaduan->nik }}" disabled>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <label for="nama" class="form-label">Nama Pengadu</label>
                                            <input type="text" class="form-control" id="nama" value="{{ $pengaduan->penduduk }}" disabled>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" class="form-control" id="email" value="{{ $pengaduan->email }}" disabled>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <label for="judul" class="form-label">Judul</label>
                                            <input type="text" class="form-control" id="judul" value="{{ $pengaduan->judul }}" disabled>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label for="pesan" class="form-label">Pesan</label>
                                            {{-- <input type="text" class="form-control" id="pesan" disabled value=""> --}}
                                            <textarea name="pesan" class="form-control" id="pesan" cols="30" rows="5" disabled>{{ $pengaduan->pesan }}</textarea>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="tgl_kejadian" class="form-label">Tanggal Kejadian</label>
                                            <input type="text" class="form-control" id="tgl_kejadian" value="{{ $pengaduan->tgl_kejadian }}" disabled>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="lokasi" class="form-label">Lokasi</label>
                                            <input type="text" class="form-control" id="lokasi" disabled value="{{ $pengaduan->lokasi }}">
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="kategori" class="form-label">Kategori</label>
                                            @if ($pengaduan->kategori == 'penting')
                                            <input type="text" class="form-control text-danger" id="kategori" disabled value="PENTING">
                                            @else
                                            <input type="text" class="form-control text-warning" id="kategori" disabled value="UMUM"> 
                                            @endif
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label for="instansi" class="form-label">Instansi</label>
                                            <input type="text" class="form-control" id="instansi" disabled value="{{ $pengaduan->instansi }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-12 form-group">
                                            <label for="nip" class="form-label">NIP</label>
                                            <input type="text" class="form-control" id="nip" value="{{ session()->get('snip') }} | {{ session()->get('sangbpd') }}" disabled>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label for="pesan" class="form-label">Pesan</label>
                                            <textarea name="pesan" class="form-control" id="pesan" cols="30" rows="5">{{ old('pesan') }}</textarea>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <button type="button" class="btn btn-info"><a href="/operator/pengaduan" class="text-white"><span class="fas fa-times-circle"></span> KEMBALI</a></button>
                                        <button type="submit" class="btn btn-success"><span class="fas fa-location-arrow"></span> SIMPAN</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </main>
@endsection