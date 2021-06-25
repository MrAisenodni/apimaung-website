@extends('layouts.admin')

@section('title', 'Tambah Penduduk')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">TAMBAH DATA PENDUDUK</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form class="row g-3" action="/penduduk">
                                    <div class="col-md-6 form-group">
                                        <label for="input Id_penduduk" class="form-label">Id Penduduk</label>
                                        <input type="Id_penduduk" class="form-control" id="inputId_penduduk">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="inputnik" class="form-label">NIK</label>
                                        <input type="nik" class="form-control" id="inputnik">
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="inputnokk" class="form-label">No. KK</label>
                                        <input type="text" class="form-control" id="inputnokk" placeholder="1234">
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="inputnama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="inputnama" placeholder="">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="inputtmpt_lahir" class="form-label">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="inputtmpt_lahir">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="inputtgl_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="text" class="form-control" id="inputtgl_lahir">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="inputjenkel" class="form-label">Jenis Kelamin</label><br>
                                        <input type="radio" name="jenkel" value="Laki-laki">Laki-laki
                                        <input type="radio" name="jenkel" value="Perempuan">Perempuan
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label for="inputagama" class="form-label">Agama</label><br>
                                        <input type="radio" name="Agama" value="Islam">Islam<br>
                                        <input type="radio" name="Agama" value="Kristen">Kristen<br>
                                        <input type="radio" name="Agama" value="Hindu">Hindu<br>
                                        <input type="radio" name="Agama" value="Buddha">Buddha<br>
                                        <input type="radio" name="Agama" value="Konghucu">Konghucu<br>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="inputrt" class="form-label">RT</label>
                                        <input type="text" class="form-control" id="inputrt">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="inputrw" class="form-label">RW</label>
                                        <input type="text" class="form-control" id="inputrw">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="inputpendidikan" class="form-label">Pendidikan</label>
                                        <input type="text" class="form-control" id="inputpendidikan">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="inputpekerjaan" class="form-label">Pekerjaan</label>
                                        <input type="text" class="form-control" id="inputpekerjaan">
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