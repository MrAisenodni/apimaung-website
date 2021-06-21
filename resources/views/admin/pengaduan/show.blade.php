@extends('layouts.admin')

@section('title', 'Detail Pengaduan')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">DETAIL DATA PENGADUAN</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form class="row g-3" action="/pengaduan">
                                    <div class="col-md-6 form-group">
                                        <label for="nama" class="form-label">Nama Pengadu</label>
                                        <input type="text" class="form-control" id="nama" disabled value="">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="email" disabled value="">
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <label for="judul" class="form-label">Judul</label>
                                        <input type="text" class="form-control" id="judul" disabled value="">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="tgl_jadi" class="form-label">Tanggal Kejadian</label>
                                        <input type="text" class="form-control" id="tgl_jadi" disabled value="">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="pesan" class="form-label">Pesan</label>
                                        {{-- <input type="text" class="form-control" id="pesan" disabled value=""> --}}
                                        <textarea name="pesan" class="form-control" id="pesan" cols="30" rows="10" disabled></textarea>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <label for="lokasi" class="form-label">Lokasi</label>
                                        <input type="text" class="form-control" id="lokasi" disabled value="">
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="kategori" class="form-label">Kategori</label>
                                        <input type="text" class="form-control" id="kategori" disabled value="">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="instansi" class="form-label">Instansi</label>
                                        <input type="text" class="form-control" id="instansi" disabled value="">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button type="button" class="btn btn-info"><a href="/pengaduan" class="text-white"><span class="fas fa-times-circle"></span> KEMBALI</a></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
@endsection