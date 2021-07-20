@extends('layouts.admin')

@section('title', 'Detail Penduduk')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">DETAIL DATA PENDUDUK</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form class="row g-3">
                                    @csrf
                                    <div class="col-md-6 form-group">
                                        <label for="nik" class="form-label">NIK</label>
                                        <input type="text" class="form-control" id="nik" value="{{ $penduduk->nik }}" disabled>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="nokk" class="form-label">No KK</label>
                                        <input type="text" class="form-control" id="nokk" value="{{ $penduduk->nokk }}" disabled>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" value="{{ $penduduk->nama }}" disabled>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="tmpt_lahir" class="form-label">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tmpt_lahir" value="{{ $penduduk->tmpt_lahir }}" disabled>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="text" class="form-control" id="tgl_lahir" value="{{ $penduduk->tgl_lahir }}" disabled>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="status" class="form-label">Status</label>
                                        @if ($penduduk->status == 'lajang')
                                            <input type="text" class="form-control" id="status" value="Lajang" disabled>
                                        @elseif ($penduduk->status == 'menikah')
                                            <input type="text" class="form-control" id="status" value="Menikah" disabled>
                                        @elseif ($penduduk->status == 'duda')
                                            <input type="text" class="form-control" id="status" value="Cerai Hidup" disabled>
                                        @else
                                            <input type="text" class="form-control" id="status" value="Cerai Matiss" disabled>
                                        @endif
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="jenkel" class="form-label">Jenis Kelamin</label>
                                        @if ($penduduk->jenkel == 'l')
                                            <input type="text" class="form-control" id="jenkel" value="Laki-laki" disabled>
                                        @else
                                            <input type="text" class="form-control" id="jenkel" value="Perempuan" disabled>
                                        @endif
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="agama" class="form-label">Agama</label>
                                        <input type="text" class="form-control" id="agama" 
                                        @if ($penduduk->agama == 'islam')
                                            value="Islam"
                                        @elseif ($penduduk->agama == 'konghucu')
                                            value="Kongucu"
                                        @elseif ($penduduk->agama == 'buddha')
                                            value="Buddha"
                                        @elseif ($penduduk->agama == 'hindu')
                                            value="Hindu"
                                        @elseif ($penduduk->agama == 'kristen')
                                            value="Kristen"
                                        @endif disabled>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="pendidikan" class="form-label">Pendidikan</label>
                                        <select name="pendidikan" id="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror" disabled>
                                            <option value="{{ $penduduk->pendidikan }}" hidden>
                                                @if ($penduduk->pendidikan == 'n')
                                                    Belum/Tidak Sekolah
                                                @elseif ($penduduk->pendidikan == 'sd')
                                                    SD Sederajat
                                                @elseif ($penduduk->pendidikan == 'smp')
                                                    SMP/SLTP Sederajat
                                                @elseif ($penduduk->pendidikan == 'sma')
                                                    SMA/SLTA Sederajat
                                                @elseif ($penduduk->pendidikan == 'd1')
                                                    Diploma I
                                                @elseif ($penduduk->pendidikan == 'd2')
                                                    Diploma II
                                                @elseif ($penduduk->pendidikan == 'd3')
                                                    Diploma III
                                                @elseif ($penduduk->pendidikan == 's1')
                                                    Diploma IV/Strata I
                                                @elseif ($penduduk->pendidikan == 's2')
                                                    Strata II
                                                @elseif ($penduduk->pendidikan == 's3')
                                                    Strata III
                                                @endif
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <textarea class="form-control" name="alamat" id="alamat" cols="25" rows="5" placeholder="Masukkan Alamat" disabled>{{ $penduduk->alamat }}</textarea>
                                    </div>
                                    <div class="col-md-1 form-group">
                                        <label for="rt" class="form-label">RT</label>
                                        <input type="text" class="form-control" id="rt" value="{{ $penduduk->rt }}" disabled>
                                    </div>
                                    <div class="col-md-1 form-group">
                                        <label for="rw" class="form-label">RW</label>
                                        <input type="text" class="form-control" id="rw" value="{{ $penduduk->rw }}" disabled>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                        <select name="pekerjaan" id="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" disabled>
                                            <option value="{{ $penduduk->pekerjaan }}" hidden>
                                                @if ($penduduk->pekerjaan == 'n')
                                                    Belum/Tidak Bekerja
                                                @elseif ($penduduk->pekerjaan == 'rumahtangga')
                                                    Mengurus Rumah Tangga
                                                @elseif ($penduduk->pekerjaan == 'siswa')
                                                    Pelajar/Mahasiswa
                                                @elseif ($penduduk->pekerjaan == 'pns')
                                                    Pegawai Negeri Sipil
                                                @elseif ($penduduk->pekerjaan == 'nelayan')
                                                    Nelayan
                                                @elseif ($penduduk->pekerjaan == 'petani')
                                                    Petani
                                                @elseif ($penduduk->pekerjaan == 'tambak')
                                                    Tambak
                                                @elseif ($penduduk->pekerjaan == 'lain')
                                                    Lain-lain
                                                @endif
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button type="button" class="btn btn-info"><a href="/penduduk" class="text-white"><span class="fas fa-times-circle"></span> KEMBALI</a></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
@endsection