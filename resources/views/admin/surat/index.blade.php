@extends('layouts.admin')

@section('title', 'Surat Online')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">MANAJEMEN SURAT ONLINE</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Surat Online</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Surat Online
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
                                                <th>Jenis Surat</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($surat as $data)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td>{{ $data->nik }}</td>
                                                    <td>{{ $data->nama }}</td>
                                                    @if ($data->jenis == 'skpanjangktp')
                                                        <td class="text-center">Surat Keterangan Perpanjang KTP</td>
                                                    @elseif ($data->jenis == 'skbuatktp')
                                                        <td class="text-center">Surat Keterangan Pembuatan KTP</td>
                                                    @elseif ($data->jenis == 'skpindah')
                                                        <td class="text-center">Surat Keterangan PINDAH</td>
                                                    @elseif ($data->jenis == 'skdatang')
                                                        <td class="text-center">Surat Keterangan DATANG</td>
                                                    @elseif ($data->jenis == 'sklahir')
                                                        <td class="text-center">Surat Keterangan Lahir</td>
                                                    @elseif ($data->jenis == 'skmati')
                                                        <td class="text-center">Surat Keterangan Kematian</td>
                                                    @elseif ($data->jenis == 'skubahkk')
                                                        <td class="text-center">Perubahan Data KK</td>
                                                    @elseif ($data->jenis == 'sdtinggal')
                                                        <td class="text-center">Surat Domisili Tempat Tinggal</td>
                                                    @elseif ($data->jenis == 'skrt')
                                                        <td class="text-center">Surat Keterangan Riwayat Tanah</td>
                                                    @elseif ($data->jenis == 'skdu')
                                                        <td class="text-center">Surat Keterangan Domisili Usaha</td>
                                                    @elseif ($data->jenis == 'sku')
                                                        <td class="text-center">Surat Keterangan Usaha</td>
                                                    @elseif ($data->jenis == 'spimb')
                                                        <td class="text-center">Surat Pengantar IMB</td>
                                                    @elseif ($data->jenis == 'spnikah')
                                                        <td class="text-center">Surat Pengantar Nikah</td>
                                                    @elseif ($data->jenis == 'spnikahcp')
                                                        <td class="text-center">Surat Pengantar Nikah di Catatan Sipil</td>
                                                    @elseif ($data->jenis == 'spnikahdj')
                                                        <td class="text-center">Surat Pengantar Nikah untuk Janda/Duda</td>
                                                    @elseif ($data->jenis == 'spskkm')
                                                        <td class="text-center">Surat Pengantar SKKM</td>
                                                    @elseif ($data->jenis == 'spskck')
                                                        <td class="text-center">Surat Pengantar SKCK</td>
                                                    @endif
                                                    @if ($data->status == 'pending')
                                                        <td class="text-center"><p class="btn btn-warning">PENDING</p></td>
                                                    @else
                                                        <td class="text-center"><p class="btn btn-success">COMPLETED</p></td>
                                                    @endif
                                                    <td width="16%" class="text-center">
                                                        @if ($data->status == 'pending')
                                                            <a href="/surat/{{ $data->id_surat }}/edit" class="btn btn-success">
                                                                <i class="fas fa-paper-plane"></i>
                                                            </a>
                                                            <a href="/surat/{{ $data->id_surat }}" class="btn btn-info">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                        @else
                                                            <a href="/surat/{{ $data->id_surat }}" class="btn btn-info">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                        @endif
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