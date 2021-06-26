@extends('layouts.admin')

@section('title', 'Penduduk')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">MANAJEMEN PENDUDUK</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Penduduk</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Penduduk
                            </div>
                            <div class="mt-3 col-lg-9">
                                <a href="penduduk/create" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Penduduk</a>
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
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Pendidikan</th>
                                                <th>Pekerjaan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($penduduk as $data)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>{{ $data->nik }}</td>
                                                <td>{{ $data->nama }}</td>
                                                @if ($data->jenkel == 'l')
                                                    <td>Laki-laki</td>
                                                @else
                                                    <td>Perempuan</td>
                                                @endif
                                                <td>{{ $data->pendidikan }}</td>
                                                <td>{{ $data->pekerjaan }}</td>
                                                <td width="16%" class="text-center">
                                                    <a href="/penduduk/{{ $data->id_penduduk }}/edit" class="btn btn-warning">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="/penduduk/{{ $data->id_penduduk }}" method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?');">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                    <a href="/penduduk/{{ $data->id_penduduk }}" class="btn btn-info">
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