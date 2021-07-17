@extends('layouts.admin')

@section('title', 'Pengguna')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">MANAJEMEN PENGGUNA</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Pengguna</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Pengguna
                            </div>
                            <div class="mt-3 col-lg-9">
                                <a href="pengguna/create" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Pengguna</a>
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
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Akses</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pengguna as $data)
                                            <tr>
                                                <td class="text-center" width="5%">{{ $loop->iteration }}</td>
                                                @if ($data->id_penduduk != null)
                                                    <td>{{ $data->penduduk }}</td>
                                                @else
                                                    <td>{{ $data->angbpd }}</td>
                                                @endif
                                                <td>{{ $data->email }}</td>
                                                @if ($data->akses == 'usr')
                                                    <td class="text-center text-success">User</td>
                                                @elseif ($data->akses == 'adm')
                                                    <td class="text-center text-primary">Admin</td>
                                                @elseif ($data->akses == 'des')
                                                    <td class="text-center text-danger">Kepala Desas</td>
                                                @else
                                                    <td class="text-center text-secondary">Operator</td>
                                                @endif
                                                <td width="16%" class="text-center">
                                                    <a href="/pengguna/{{ $data->id_login }}/edit" class="btn btn-warning">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="/pengguna/{{ $data->id_login }}" method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?');">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                    <a href="/pengguna/{{ $data->id_login }}" class="btn btn-info">
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