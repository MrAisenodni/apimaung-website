@extends('layouts.admin')

@section('title', 'Tambah Penduduk')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">TAMBAH DATA PENDUDUK</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form class="row g-3" method="POST" action="/penduduk">
                                    @csrf
                                    <div class="col-md-6 form-group">
                                        <label for="nik" class="form-label">NIK</label>
                                        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" placeholder="Masukkan NIK" value="{{ old('nik') }}">
                                        @error('nik')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6 form-group">
                                        <label for="nokk" class="form-label">No. KK</label>
                                        <input type="text" class="form-control @error('nokk') is-invalid @enderror" id="nokk" name="nokk" placeholder="Masukkan No KK" value="{{ old('nokk') }}">
                                        @error('nokk')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" value="{{ old('nama') }}">
                                        @error('nama')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="tmpt_lahir" class="form-label">Tempat Lahir</label>
                                        <input type="text" class="form-control @error('tmpt_lahir') is-invalid @enderror" id="tmpt_lahir" name="tmpt_lahir" placeholder="Masukkan Tempat Lahir" value="{{ old('tmpt_lahir') }}" >
                                        @error('tmpt_lahir')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" value="{{ old('tgl_lahir') }}">
                                        @error('tgl_lahir')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="status" class="form-label">Status</label>
                                        <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                            @if (old('status') == 'lajang')
                                                <option value="lajang">Lajang</option>
                                            @elseif (old('status') == 'nikah')
                                                <option value="nikah">Menikah</option>
                                            @elseif (old('status') == 'duda')
                                                <option value="duda">Cerai Hidup</option>
                                            @elseif (old('status') == 'janda')
                                                <option value="janda">Cerai Mati</option>
                                            @endif
                                            <option value="" hidden>--- Pilih Status ---</option>
                                            <option value="lajang">Lajang</option>
                                            <option value="nikah">Menikah</option>
                                            <option value="duda">Cerai Hidup</option>
                                            <option value="janda">Cerai Mati</option>
                                        </select>
                                        @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="jenkel" class="form-label">Jenis Kelamin</label><br>
                                        <select name="jenkel" id="jenkel" class="form-control @error('jenkel') is-invalid @enderror">
                                            @if (old('jenkel') == 'l')
                                                <option value="l">Laki-laki</option>
                                            @elseif (old('jenkel') == 'p')
                                                <option value="p">Perempuan</option>
                                            @endif
                                            <option value="" hidden>--- Pilih Jenis Kelamin ---</option>
                                            <option value="l">Laki-laki</option>
                                            <option value="p">Perempuan</option>
                                        </select>
                                        @error('jenkel')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="agama" class="form-label">Agama</label><br>
                                        <select name="agama" id="agama" class="form-control @error('agama') is-invalid @enderror">
                                            @if (old('agama') == 'islam')
                                                <option value="islam">Islam</option>
                                            @elseif (old('agama') == 'kristen')
                                                <option value="kristen">Kristen</option>
                                            @elseif (old('agama') == 'hindu')
                                                <option value="hindu">Hindu</option>
                                            @elseif (old('agama') == 'buddha')
                                                <option value="buddha">Buddha</option>
                                            @elseif (old('agama') == 'konghucu')
                                                <option value="konghucu">Konghucu</option>
                                            @endif
                                            <option value="" hidden>--- Pilih Agama ---</option>
                                            <option value="islam">Islam</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="buddha">Buddha</option>
                                            <option value="konghucu">Konghucu</option>
                                        </select>
                                        @error('agama')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="pendidikan" class="form-label">Pendidikan</label>
                                        <select name="pendidikan" id="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror">
                                            @if (old('pendidikan') == 'n')
                                                <option value="n">Belum/Tidak Sekolah</option>
                                            @elseif (old('pendidikan') == 'sd')
                                                <option value="sd">SD Sederajat</option>
                                            @elseif (old('pendidikan') == 'smp')
                                                <option value="smp">SMP/SLTP Sederajat</option>
                                            @elseif (old('pendidikan') == 'sma')
                                                <option value="sma">SMA/SLTA Sederajat</option>
                                            @elseif (old('pendidikan') == 'd1')
                                                <option value="d1">Diploma I</option>
                                            @elseif (old('pendidikan') == 'd2')
                                                <option value="d2">Diploma II</option>
                                            @elseif (old('pendidikan') == 'd3')
                                                <option value="d3">Diploma III</option>
                                            @elseif (old('pendidikan') == 's1')
                                                <option value="s1">Diploma IV/Strata I</option>
                                            @elseif (old('pendidikan') == 's2')
                                                <option value="s2">Strata II</option>
                                            @elseif (old('pendidikan') == 's3')
                                                <option value="s3">Strata III</option>
                                            @endif
                                            <option value="" hidden>--- Pilih Pendidikan ---</option>
                                            <option value="n">Belum/Tidak Sekolah</option>
                                            <option value="sd">SD Sederajat</option>
                                            <option value="smp">SMP/SLTP Sederajat</option>
                                            <option value="sma">SMA/SLTA Sederajat</option>
                                            <option value="d1">Diploma I</option>
                                            <option value="d2">Diploma II</option>
                                            <option value="d3">Diploma III</option>
                                            <option value="s1">Diploma IV/Strata I</option>
                                            <option value="s2">Strata II</option>
                                            <option value="s3">Strata III</option>
                                        </select>
                                        @error('pendidikan')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" cols="25" rows="5" placeholder="Masukkan Alamat">{{ old('alamat') }}</textarea>
                                        @error('alamat')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-1 form-group">
                                        <label for="rt" class="form-label">RT</label>
                                        <input type="text" class="form-control @error('rt') is-invalid @enderror" id="rt" name="rt" value="{{ old('rt') }}">
                                        @error('rt')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-1 form-group">
                                        <label for="rw" class="form-label">RW</label>
                                        <input type="text" class="form-control @error('rw') is-invalid @enderror" id="rw" name="rw" value="{{ old('rw') }}">
                                        @error('rw')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                        <select name="pekerjaan" id="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror">
                                            @if (old('pekerjaan') == 'n')
                                                <option value="n">Belum/Tidak Bekerja</option>
                                            @elseif (old('pekerjaan') == 'rumahtangga')
                                                <option value="rumahtangga">Mengurus Rumah Tangga</option>
                                            @elseif (old('pekerjaan') == 'siswa')
                                                <option value="siswa">Pelajar/Mahasiswa</option>
                                            @elseif (old('pekerjaan') == 'pns')
                                                <option value="pns">Pegawai Negeri Sipil</option>
                                            @elseif (old('pekerjaan') == 'nelayan')
                                                <option value="nelayan">Nelayan</option>
                                            @elseif (old('pekerjaan') == 'petani')
                                                <option value="petani">Petani</option>
                                            @elseif (old('pekerjaan') == 'tambak')
                                                <option value="tambak">Tambak</option>
                                            @elseif (old('pekerjaan') == 'lain')
                                                <option value="lain">Lain-lain</option>
                                            @endif
                                            <option value="" hidden>--- Pilih Pekerjaan ---</option>
                                            <option value="n">Belum/Tidak Bekerja</option>
                                            <option value="rumahtangga">Mengurus Rumah Tangga</option>
                                            <option value="siswa">Pelajar/Mahasiswa</option>
                                            <option value="pns">Pegawai Negeri Sipil</option>
                                            <option value="nelayan">Nelayan</option>
                                            <option value="petani">Petani</option>
                                            <option value="tambak">Tambak</option>
                                            <option value="lain">Lain-lain</option>
                                        </select>
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