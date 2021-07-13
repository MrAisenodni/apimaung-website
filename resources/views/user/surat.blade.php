@extends('layouts.user')

@section('title', 'Surat Online')

@section('content') 
  <!-- Content -->
  <div id="content"> 
    
    <!-- Infinity Solution -->
    <section class="white-bg solution padding-top-75 padding-bottom-75">
        <div class="margin-left-45 padding-30 col-lg-11 table-bordered">
            <div class="margin-bottom-20 row">
                <i class="fa fa-table mr-1"></i>
                Data Surat Online
            </div>
            <div class="margin-bottom-20 row">
                <a href="/surat/create" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Surat Online</a>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row">
                {{-- <div class="table-responsive"> --}}
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>judul</th>
                                <th>Nama Penanggap</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penduduk as $data)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $data->judul }}</td>
                                <td>{{ $data->angbpd }}</td>
                                @if ($data->kategori == 'penting')
                                    <td class="text-center text-danger">PENTING</td>
                                @else
                                    <td class="text-center text-secondary">UMUM</td>
                                @endif
                                @if ($data->status == 'pending')
                                    <td class="text-center"><p class="btn btn-warning">PENDING</p></td>
                                @else
                                    <td class="text-center"><p class="btn btn-success">COMPLETED</p></td>
                                @endif
                                <td width="16%" class="text-center">
                                    <a href="/pengaduan/{{ $data->id_pengaduan }}" class="btn btn-info">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                {{-- </div> --}}
            </div>
        </div>
    </section>
    
  </div>
  <!-- End Content --> 
@endsection