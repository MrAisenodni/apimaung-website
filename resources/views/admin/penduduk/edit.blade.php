@extends('layouts.admin')

@section('title', 'Ubah Penduduk')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Ubah DATA PENDUDUK</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form class="row g-3" method="post" action="/penduduk/{{ $penduduk->id_penduduk }}">
                                    @method('put')
                                    @csrf
                                    <div class="col-md-6 form-group">
                                        <label for="nik" class="form-label">NIK</label>
                                        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" placeholder="Masukkan NIK" value="{{ $penduduk->nik }}" readonly>
                                        @error('nik')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6 form-group">
                                        <label for="nokk" class="form-label">No. KK</label>
                                        <input type="text" class="form-control @error('nokk') is-invalid @enderror" id="nokk" name="nokk" placeholder="Masukkan No KK" value="{{ $penduduk->nokk }}" readonly>
                                        @error('nokk')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" value="{{ $penduduk->nama }}">
                                        @error('nama')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="tmpt_lahir" class="form-label">Tempat Lahir</label>
                                        <input type="text" class="form-control @error('tmpt_lahir') is-invalid @enderror" id="tmpt_lahir" name="tmpt_lahir" placeholder="Masukkan Tempat Lahir" value="{{ $penduduk->tmpt_lahir }}" >
                                        @error('tmpt_lahir')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" value="{{ $penduduk->tgl_lahir }}">
                                        @error('tgl_lahir')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="status" class="form-label">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            @if ($penduduk->status == 'lajang')
                                                <option type="text" class="form-control" id="status" value="lajang">Lajang</option>
                                                <option type="text" class="form-control" id="status" value="nikah">Menikah</option>
                                                <option type="text" class="form-control" id="status" value="duda">Cerai Hidup</option>
                                                <option type="text" class="form-control" id="status" value="janda">Cerai Mati</option>
                                            @elseif ($penduduk->status == 'nikah')
                                                <option type="text" class="form-control" id="status" value="nikah">Menikah</option>
                                                <option type="text" class="form-control" id="status" value="lajang">Lajang</option>
                                                <option type="text" class="form-control" id="status" value="duda">Cerai Hidup</option>
                                                <option type="text" class="form-control" id="status" value="janda">Cerai Mati</option>
                                            @elseif($penduduk->status == 'duda')
                                                <option type="text" class="form-control" id="status" value="duda">Cerai Hidup</option>
                                                <option type="text" class="form-control" id="status" value="lajang">Lajang</option>
                                                <option type="text" class="form-control" id="status" value="nikah">Menikah</option>
                                                <option type="text" class="form-control" id="status" value="janda">Cerai Mati</option>
                                            @else
                                                <option type="text" class="form-control" id="status" value="janda">Cerai Mati</option>
                                                <option type="text" class="form-control" id="status" value="lajang">Lajang</option>
                                                <option type="text" class="form-control" id="status" value="nikah">Menikah</option>
                                                <option type="text" class="form-control" id="status" value="duda">Cerai Hidup</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="jenkel" class="form-label">Jenis Kelamin</label>
                                        <select name="jenkel" id="jenkel" class="form-control">
                                            @if ($penduduk->jenkel == 'l')
                                                <option type="text" class="form-control" id="jenkel" value="l">Laki-laki</option>
                                                <option type="text" class="form-control" id="jenkel" value="p">Perempuan</option>
                                            @else
                                                <option type="text" class="form-control" id="jenkel" value="p">Perempuan</option>
                                                <option type="text" class="form-control" id="jenkel" value="l">Laki-laki</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="agama" class="form-label">Agama</label>
                                        <select name="agama" id="agama" class="form-control">
                                            @if ($penduduk->agama == 'islam')
                                                <option value="islam">Islam</option>
                                                <option value="kristen">Kristen</option>
                                                <option value="konghucu">Konghucu</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="buddha">Buddha</option>
                                            @elseif ($penduduk->agama == 'kristen')
                                                <option value="kristen">Kristen</option>
                                                <option value="islam">Islam</option>
                                                <option value="konghucu">Konghucu</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="buddha">Buddha</option>
                                            @elseif ($penduduk->agama == 'hindu')
                                                <option value="hindu">Hindu</option>
                                                <option value="islam">Islam</option>
                                                <option value="kristen">Kristen</option>
                                                <option value="konghucu">Konghucu</option>
                                                <option value="buddha">Buddha</option>
                                            @elseif ($penduduk->agama == 'konghucu')
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
                                    <div class="col-md-4 form-group">
                                        <label for="pendidikan" class="form-label">Pendidikan</label>
                                        <input type="text" class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan" name="pendidikan" placeholder="Masukkan Pendidikan" value="{{ $penduduk->pendidikan }}">
                                        @error('pendidikan')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" cols="25" rows="5" placeholder="Masukkan Alamat">{{ $penduduk->alamat }}</textarea>
                                        @error('alamat')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-1 form-group">
                                        <label for="rt" class="form-label">RT</label>
                                        <input type="text" class="form-control @error('rt') is-invalid @enderror" id="rt" name="rt" value="{{ $penduduk->rt }}">
                                        @error('rt')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-1 form-group">
                                        <label for="rw" class="form-label">RW</label>
                                        <input type="text" class="form-control @error('rw') is-invalid @enderror" id="rw" name="rw" value="{{ $penduduk->rw }}">
                                        @error('rw')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                        <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" placeholder="Masukkan Pekerjaan" value="{{ $penduduk->pekerjaan }}">
                                        @error('pekerjaan')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button type="button" class="btn btn-info"><a href="/penduduk" class="text-white"><span class="fas fa-times-circle"></span> KEMBALI</a></button>
                                        <button type="submit" class="btn btn-success"><span class="fas fa-location-arrow"></span> SIMPAN</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
@endsection