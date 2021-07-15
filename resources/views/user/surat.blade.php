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
                @if (session('status'))
                    <div class="alert alert-success margin-top-20">
                        {{ session('status') }}
                    </div>
                @endif
    
                @if (session('error'))
                    <div class="alert alert-danger margin-top-20">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
            <div class="row">
                {{-- <div class="table-responsive"> --}}
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Jenis Surat</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penduduk as $data)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
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
                                    <a href="/surat/{{ $data->id_surat }}" class="btn btn-info">
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