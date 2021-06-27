@extends('layouts.admin')

@section('title', 'Ubah Pengguna')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Ubah DATA PENGGUNA</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form class="row g-3" method="post" action="/pengguna/{{ $pengguna->id_login }}">
                                    @method('put')
                                    @csrf
                                    <div class="col-md-2 form-group">
                                        <label for="akses" class="form-label">Akses</label>
                                        <select name="akses" id="akses" class="form-control @error('akses') is-invalid @enderror">
                                            {{-- <option value="{{ old('akses') }}">{{ old('akses') }}</option> --}}
                                            @if ($pengguna->akses == 'usr')
                                                <option value="usr">User</option>
                                                <option value="opr">Operator</option>
                                                <option value="adm">Admin</option>
                                            @elseif ($pengguna->akses == 'adm')
                                                <option value="adm">Admin</option>
                                                <option value="usr">User</option>
                                                <option value="opr">Operator</option>
                                            @else
                                                <option value="opr">Operator</option>
                                                <option value="usr">User</option>
                                                <option value="adm">Admin</option>
                                            @endif
                                        </select>
                                        @error('akses')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    @if ($pengguna->id_penduduk != null)
                                        <div class="col-md-5 form-group">
                                            <label for="nik" class="form-label">NIK</label>
                                            <select class="form-control @error('nik') is-invalid @enderror" name="nik" id="nik">
                                                <option value="{{ $pengguna->id_penduduk }}">{{ $pengguna->nik }}</option>
                                                <option value="">--- PILIH NIK ---</option>
                                                @foreach ($penduduk as $data)
                                                    <option value="{{ $data->id_penduduk }}">{{ $data->nik }}</option>
                                                @endforeach
                                            </select>
                                            @error('nik')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-5 form-group">
                                            <label for="nip" class="form-label">NIP</label>
                                            <select class="form-control @error('nip') is-invalid @enderror" name="nip" id="nip">
                                                {{-- <option value="{{ $pengguna->id_angbpd }}">{{ $pengguna->nip }}</option> --}}
                                                <option value="">--- PILIH NIP ---</option>
                                                @foreach ($angbpd as $row)
                                                    <option value="{{ $row->id_angbpd }}">{{ $row->nip }}</option>
                                                @endforeach
                                            </select>
                                            @error('nip')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    @else
                                        <div class="col-md-5 form-group">
                                            <label for="nik" class="form-label">NIK</label>
                                            <select class="form-control @error('nik') is-invalid @enderror" name="nik" id="nik">
                                                {{-- <option value="{{ $pengguna->id_penduduk }}">{{ $pengguna->nik }}</option> --}}
                                                <option value="">--- PILIH NIK ---</option>
                                                @foreach ($penduduk as $data)
                                                    <option value="{{ $data->id_penduduk }}">{{ $data->nik }}</option>
                                                @endforeach
                                            </select>
                                            @error('nik')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-5 form-group">
                                            <label for="nip" class="form-label">NIP</label>
                                            <select class="form-control @error('nip') is-invalid @enderror" name="nip" id="nip">
                                                <option value="{{ $pengguna->id_angbpd }}">{{ $pengguna->nip }}</option>
                                                <option value="">--- PILIH NIP ---</option>
                                                @foreach ($angbpd as $row)
                                                    <option value="{{ $row->id_angbpd }}">{{ $row->nip }}</option>
                                                @endforeach
                                            </select>
                                            @error('nip')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                    @endif
                                    <div class="col-6 form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Email" value="{{ $pengguna->email }}">
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="password" class="form-label">Password Baru</label>
                                        <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukkan Password">
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button type="button" class="btn btn-info"><a href="/pengguna" class="text-white"><span class="fas fa-times-circle"></span> KEMBALI</a></button>
                                        <button type="submit" class="btn btn-success"><span class="fas fa-location-arrow"></span> SIMPAN</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
@endsection