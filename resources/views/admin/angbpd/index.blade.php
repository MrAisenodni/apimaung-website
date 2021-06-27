@extends('layouts.admin')

@section('title', 'Anggota BPD')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">MANAJEMEN ANGGOTA BPD</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">BPD</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Anggota BPD
                            </div>
                            <div class="mt-3 col-lg-9">
                                <a href="angbpd/create" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Anggota BPD</a>
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
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Jabatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($angbpd as $data)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>{{ $data->nip }}</td>
                                                <td>{{ $data->nama }}</td>
                                                @if ($data->jenkel == 'l')
                                                    <td>Laki-laki</td>
                                                @else
                                                    <td>Perempuan</td>
                                                @endif
                                                <td>{{ $data->jabatan }}</td>
                                                <td width="16%" class="text-center">
                                                    <a href="/angbpd/edit/{{ $data->id_angbpd }}" class="btn btn-warning">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="/angbpd/{{ $data->id_angbpd }}" method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?');">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                    <a href="/angbpd/{{ $data->id_angbpd }}" class="btn btn-info">
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