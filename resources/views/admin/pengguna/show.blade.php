@extends('layouts.admin')

@section('title', 'Detail Pengguna')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">DETAIL DATA PENGGUNA</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form class="row g-3">
                                    @csrf
                                    <div class="col-md-2 form-group">
                                        <label for="akses" class="form-label">Akses</label>
                                        @if ($pengguna->akses == 'usr')
                                            <input type="text" class="form-control" id="email" value="User" disabled>
                                        @elseif ($pengguna->akses == 'adm')
                                            <input type="text" class="form-control" id="email" value="Admin" disabled>
                                        @else
                                            <input type="text" class="form-control" id="email" value="Operator" disabled>
                                        @endif
                                    </div>
                                    @if ($pengguna->id_penduduk == null)
                                        <div class="col-md-5 form-group">
                                            <label for="nik" class="form-label">NIK</label>
                                            <input type="text" class="form-control" id="email" value="" disabled>
                                        </div>
                                    @else
                                        <div class="col-md-5 form-group">
                                            <label for="nik" class="form-label">NIK</label>
                                            <input type="text" class="form-control" id="email" value="{{ $pengguna->nik }} | {{ $pengguna->penduduk }}" disabled>
                                        </div>
                                    @endif
                                    @if ($pengguna->id_angbpd == null)
                                        <div class="col-md-5 form-group">
                                            <label for="nip" class="form-label">NIP</label>
                                            <input type="text" class="form-control" id="nip" value="" disabled>
                                        </div>
                                    @else
                                        <div class="col-md-5 form-group">
                                            <label for="nip" class="form-label">NIP</label>
                                            <input type="text" class="form-control" id="nip" value="{{ $pengguna->nip }} | {{ $pengguna->angbpd }}" disabled>
                                        </div>
                                    @endif
                                    <div class="col-6 form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="email" value="{{ $pengguna->email }}" disabled>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" value="password" disabled>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button type="button" class="btn btn-info"><a href="/pengguna" class="text-white"><span class="fas fa-times-circle"></span> KEMBALI</a></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
@endsection