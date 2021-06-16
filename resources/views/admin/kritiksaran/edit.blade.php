@extends('layouts.admin')

@section('title', 'Ubah Anggota BPD')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">UBAH DATA ANGGOTA BPD</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form class="row g-3" action="/angbpd">
                                    @csrf
                                    <div class="col-md-12 form-group">
                                        <label for="nip" class="form-label">NIP</label>
                                        <input type="text" class="form-control" id="nip" name="nip" value="{{ $angbpd->nip }}">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $angbpd->nama }}">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="jenkel" class="form-label">Jenis Kelamin</label>
                                        <select name="jenkel" id="jenkel" class="form-control">
                                            @if ($angbpd->jenkel = 'l')
                                                <option value="l">Laki-laki</option>
                                                <option value="p">Perempuan</option>
                                            @else
                                                <option value="p">Perempuan</option>
                                                <option value="l">Laki-laki</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="agama" class="form-label">Agama</label>
                                        <select name="agama" id="agama" class="form-control">
                                            @if ($angbpd->agama == 'islam')
                                                <option value="islam">Islam</option>
                                                <option value="kristen">Kristen</option>
                                                <option value="konghucu">Konghucu</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="buddha">Buddha</option>
                                            @elseif ($angbpd->agama == 'kristen')
                                                <option value="kristen">Kristen</option>
                                                <option value="islam">Islam</option>
                                                <option value="konghucu">Konghucu</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="buddha">Buddha</option>
                                            @elseif ($angbpd->agama == 'hindu')
                                                <option value="hindu">Hindu</option>
                                                <option value="islam">Islam</option>
                                                <option value="kristen">Kristen</option>
                                                <option value="konghucu">Konghucu</option>
                                                <option value="buddha">Buddha</option>
                                            @elseif ($angbpd->agama == 'konghucu')
                                                <option value="konghucu">Konghucu</option>
                                                <option value="islam">Islam</option>
                                                <option value="kristen">Kristen</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="buddha">Buddha</option>
                                            @else
                                                <option value="buddha">Buddha</option>
                                                <option value="islam">Islam</option>
                                                <option value="kristen">Kristen</option>
                                                <option value="konghucu">Konghucu</option>
                                                <option value="hindu">Hindu</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $angbpd->alamat }}">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="jabatan" class="form-label">Jabatan</label>
                                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $angbpd->jabatan }}">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button type="button" class="btn btn-info"><a href="/angbpd" class="text-white"><span class="fas fa-times-circle"></span> KEMBALI</a></button>
                                        <button type="submit" class="btn btn-success"><span class="fas fa-location-arrow"></span> SIMPAN</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
@endsection