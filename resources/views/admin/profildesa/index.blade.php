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
                            <div class="mt-3 col-lg-9">
                                <a href="profildesa/create" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Profil Desa</a>
                            </div>
                            @if (session('status'))
                                <div class="m-3 alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="text-center">
                                            <tr>
                                                <th>No</th>
                                                <th>Dasar Hukum Pembentukan</th>
                                                <th>Nama</th>
                                                <th>Kode Pos</th>
                                                <th>Kecamatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($profildesa as $data)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>{{ $data->dasar_hukum }}</td>
                                                <td>{{ $data->nama }}</td>
                                                <td>{{ $data->kode_pos }}</td>
                                                <td>{{ $data->kecamatan }}</td>
                                                <td width="16%" class="text-center">
                                                    <a href="profildesa/edit/{{ $data->id_desa }}" class="btn btn-warning">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="/profildesa/{{ $data->id_desa }}" method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?');">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
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