@extends('layouts.admin')

@section('title', 'Detail Anggota BPD')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">DETAIL DATA ANGGOTA BPD</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form class="row g-3" action="/angbpd">
                                    @csrf
                                    <div class="col-md-12 form-group">
                                        <label for="nip" class="form-label">NIP</label>
                                        <input type="text" class="form-control" id="nip" value="{{ $angbpd->nip }}" disabled>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" value="{{ $angbpd->nama }}" disabled>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="jenkel" class="form-label">Jenis Kelamin</label>
                                        @if ($angbpd->jenkel == 'l')
                                            <input type="text" class="form-control" id="jenkel" value="Laki-laki" disabled>
                                        @else
                                            <input type="text" class="form-control" id="jenkel" value="Perempuan" disabled>
                                        @endif
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="agama" class="form-label">Agama</label>
                                        @if ($angbpd->agama == 'islam')
                                            <input type="text" class="form-control" id="agama" value="Islam" disabled>
                                        @elseif ($angbpd->agama == 'kristen')
                                            <input type="text" class="form-control" id="agama" value="Kristen" disabled>
                                        @elseif ($angbpd->agama == 'hindu')
                                            <input type="text" class="form-control" id="agama" value="Hindu" disabled>
                                        @elseif ($angbpd->agama == 'konghucu')
                                            <input type="text" class="form-control" id="agama" value="Konghucu" disabled>
                                        @else
                                            <input type="text" class="form-control" id="agama" value="Buddha" disabled>
                                        @endif
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" value="{{ $angbpd->alamat }}" disabled>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="jabatan" class="form-label">Jabatan</label>
                                        <input type="text" class="form-control" id="jabatan" value="{{ $angbpd->jabatan }}" disabled>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button type="button" class="btn btn-info"><a href="/angbpd" class="text-white"><span class="fas fa-times-circle"></span> KEMBALI</a></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
@endsection