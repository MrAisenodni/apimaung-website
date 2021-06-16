@extends('layouts.admin')

@section('title', 'Ubah Desa')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">UBAH DATA DESA</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form class="row g-3" action="/profildesa">
                                    @csrf
                                    <div class="col-md-12 form-group">
                                        <label for="nama" class="form-label">Nama Desa</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $profildesa->nama }}">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="tahun_bentuk" class="form-label">Tahun Pembentukan</label>
                                        <input type="text" class="form-control" id="tahun_bentuk" name="tahun_bentuk" value="{{ $profildesa->tahun_bentuk }}">
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <label for="dasar_hukum" class="form-label">Dasar Hukum Pembentukan</label>
                                        <input type="text" class="form-control" id="dasar_hukum" name="dasar_hukum" value="{{ $profildesa->dasar_hukum }}">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="no_kode_wilayah" class="form-label">Nomor Kode Wilayah</label>
                                        <input type="text" class="form-control" id="no_kode_wilayah" name="no_kode_wilayah" value="{{ $profildesa->no_kode_wilayah }}">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="kecamatan" class="form-label">Kecamatan</label>
                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{ $profildesa->kecamatan }}">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="kota" class="form-label">Kabupaten/Kota</label>
                                        <input type="text" class="form-control" id="kota" name="kota" value="{{ $profildesa->kota }}">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="provinsi" class="form-label">Provinsi</label>
                                        <input type="text" class="form-control" id="provinsi" name="provinsi"  value="{{ $profildesa->provinsi }}">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="kode_pos" class="form-label">Nomor Kode Pos</label>
                                        <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="{{ $profildesa->kode_pos }}">
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