@extends('layouts.operator')

@section('title', 'Balas Pengaduan')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">BALAS PENGADUAN</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form class="row g-3" action="/operator/pengaduan/1" method="POST">
                                    @csrf
                                    <div class="col-md-6 form-group">
                                        <label for="nama" class="form-label">Nama Pengadu</label>
                                        <input type="text" class="form-control" id="nama" value="" disabled>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="email" value="" disabled>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <label for="judul" class="form-label">Judul</label>
                                        <input type="text" class="form-control" id="judul" value="" disabled>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="tgl_jadi" class="form-label">Tanggal Kejadian</label>
                                        <input type="text" class="form-control" id="tgl_jadi" value="" disabled>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="pesan" class="form-label">Pesan</label>
                                        {{-- <input type="text" class="form-control" id="pesan" value=""> --}}
                                        <textarea name="pesan" class="form-control" id="pesan" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button type="button" class="btn btn-info"><a href="/operator/pengaduan" class="text-white"><span class="fas fa-times-circle"></span> KEMBALI</a></button>
                                        <button type="submit" class="btn btn-success"><span class="fas fa-location-arrow"></span> SIMPAN</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
@endsection