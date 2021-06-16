@extends('layouts.admin')

@section('title', 'Ubah Penduduk')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Ubah DATA PENDUDUK</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form class="row g-3" method="post" action="/penduduk/{id}">
                                    @method('put')
                                    @csrf
                                    <div class="col-md-6 form-group">
                                        <label for="nik" class="form-label">NIK</label>
                                        <input type="text" class="form-control" id="nik" value="{{ $penduduk->nik }}" name="nik">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="nokk" class="form-label">No KK</label>
                                        <input type="text" class="form-control" id="nokk" value="{{ $penduduk->nokk }}" name="nokk">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" value="{{ $penduduk->nama }}" name="nama">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="tmpt_lahir" class="form-label">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tmpt_lahir" value="{{ $penduduk->tmpt_lahir }}" name="tmpt_lahir">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="text" class="form-control" id="tgl_lahir" value="{{ $penduduk->tgl_lahir }}" name="tgl_lahir">
                                    </div>
                                    <div class="col-md-6 form-group">
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
                                    <div class="col-md-6 form-group">
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
                                    <div class="col-md-12 form-group">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" value="{{ $penduduk->alamat }}" name="alamat">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="rt" class="form-label">RT</label>
                                        <input type="text" class="form-control" id="rt" value="{{ $penduduk->rt }}" name="rt">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="rw" class="form-label">RW</label>
                                        <input type="text" class="form-control" id="rw" value="{{ $penduduk->rw }}" name="rw">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="pendidikan" class="form-label">Pendidikan</label>
                                        <input type="text" class="form-control" id="pendidikan" value="{{ $penduduk->pendidikan }}" name="pendidikan">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                        <input type="text" class="form-control" id="pekerjaan" value="{{ $penduduk->pekerjaan }}" name="pekerjaan">
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