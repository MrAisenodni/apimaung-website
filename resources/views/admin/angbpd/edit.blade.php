@extends('layouts.admin')

@section('title', 'Ubah Anggota BPD')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">UBAH DATA ANGGOTA BPD</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form class="row g-3" method="POST" action="/angbpd/{{ $angbpd->id_angbpd }}">
                                    @method('put')
                                    @csrf
                                    <div class="col-md-3 form-group">
                                        <label for="nip" class="form-label">NIP</label>
                                        <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" placeholder="Masukkan NIP" value="{{ $angbpd->nip }}" disabled>
                                        @error('nip')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-9 form-group">
                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" value="{{ $angbpd->nama }}">
                                        @error('nama')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="jenkel" class="form-label">Jenis Kelamin</label><br>
                                        <select name="jenkel" id="jenkel" class="form-control">
                                            @if ($angbpd->jenkel == 'l')
                                                <option type="text" class="form-control" id="jenkel" value="l">Laki-laki</option>
                                                <option type="text" class="form-control" id="jenkel" value="p">Perempuan</option>
                                            @else
                                                <option type="text" class="form-control" id="jenkel" value="p">Perempuan</option>
                                                <option type="text" class="form-control" id="jenkel" value="l">Laki-laki</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="inputagama" class="form-label">Agama</label><br>
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
                                    <div class="col-md-6 form-group">
                                        <label for="jabatan" class="form-label">Jabatan</label>
                                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan" value="{{ $angbpd->jabatan }}">
                                        @error('jabatan')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" cols="25" rows="5" placeholder="Masukkan Alamat">{{ $angbpd->alamat }}</textarea>
                                        @error('alamat')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
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