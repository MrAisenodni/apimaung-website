@extends('layouts.admin')

@section('title', 'Pengaduan')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">MANAJEMEN PENGADUAN</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Pengaduan</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Pengaduan
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
                                                <th>Pengadu</th>
                                                <th>Penanggap</th>
                                                <th>Kategori</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pengaduan as $data)
                                                
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td>{{ $data->penduduk }}</td>
                                                    <td>{{ $data->angbpd }}</td>
                                                    @if ($data->kategori == 'penting')
                                                        <td class="text-center text-danger">PENTING</td>
                                                    @else
                                                        <td class="text-center text-warning">UMUM</td>
                                                    @endif
                                                    @if ($data->status == 'pending')
                                                        <td class="text-center"><p class="btn btn-warning">PENDING</p></td>
                                                    @else
                                                        <td class="text-center"><p class="btn btn-success">COMPLETED</p></td>
                                                    @endif
                                                    <td width="16%" class="text-center">
                                                        <form action="/pengaduan/{{ $data->id_pengaduan }}" method="POST" class="d-inline">
                                                            @method('delete')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?');">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                        <a href="/pengaduan/{{ $data->id_pengaduan }}" class="btn btn-info">
                                                            <i class="fas fa-eye"></i>
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