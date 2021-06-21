@extends('layouts.admin')

@section('title', 'Profil Desa')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">MANAJEMEN PROFIL DESA</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Profil Desa</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Profil Desa
                            </div>
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="mt-3 col-lg-9">
                                <a href="profildesa/create" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Profil Desa</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="text-center">
                                            <tr>
                                                <th>No</th>
                                                <th>Dasar Hukum Pembentukan</th>
                                                <th>Nama</th>
                                                <th>Nomor Kode Wilayah</th>
                                                <th>Kecamatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($profildesa as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->dasar_hukum }}</td>
                                                <td>{{ $data->nama }}</td>
                                                <td>{{ $data->no_kode_wilayah }}</td>
                                                <td>{{ $data->kecamatan }}</td>
                                                <td width="16%">
                                                    <a href="profildesa/edit/{{ $data->id_desa }}" class="btn btn-warning">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="/profildesa/{{ $data->id_desa }}" method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <a href="" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?');">
                                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                        </a>
                                                    </form>
                                                    <a href="/profildesa/{{ $data->id_desa }}" class="btn btn-info">
                                                        <i class="fas fa-list"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@endsection