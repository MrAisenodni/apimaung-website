@extends('layouts.admin')

@section('title', 'Tambah Desa')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">TAMBAH DATA DESA</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form class="row g-3" action="/profildesa" method="POST">
                                    @csrf
                                    <div class="col-md-10 form-group">
                                        <label for="nama" class="form-label">Nama Desa</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                                        @error('nama')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="tahun_bentuk" class="form-label">Tahun Pembentukan</label>
                                        <input type="text" class="form-control @error('tahun_bentuk') is-invalid @enderror" id="tahun_bentuk" name="tahun_bentuk" value="{{ old('tahun_bentuk') }}">
                                        @error('tahun_bentuk')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="dasar_hukum" class="form-label">Dasar Hukum Pembentukan</label>
                                        <input type="text" class="form-control @error('dasar_hukum') is-invalid @enderror" id="dasar_hukum" name="dasar_hukum" value="{{ old('dasar_hukum') }}">
                                        @error('dasar_hukum')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="kecamatan" class="form-label">Kecamatan</label>
                                        <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan" name="kecamatan" value="{{ old('kecamatan') }}">
                                        @error('kecamatan')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <label for="kota" class="form-label">Kabupaten/Kota</label>
                                        <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota" name="kota" value="{{ old('kota') }}">
                                        @error('kota')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <label for="provinsi" class="form-label">Provinsi</label>
                                        <input type="text" class="form-control @error('provinsi') is-invalid @enderror" id="provinsi" name="provinsi" value="{{ old('provinsi') }}">
                                        @error('provisi')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 form-group">
                                        <label for="kode_pos" class="form-label">Nomor Kode Pos</label>
                                        <input type="text" class="form-control @error('kode_pos') is-invalid @enderror" id="kode_pos" name="kode_pos" value="{{ old('kode_pos') }}">
                                        @error('kode_pos')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button type="button" class="btn btn-info"><a href="/profildesa" class="text-white"><span class="fas fa-times-circle"></span> KEMBALI</a></button>
                                        <button type="submit" class="btn btn-success"><span class="fas fa-location-arrow"></span> SIMPAN</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
@endsection