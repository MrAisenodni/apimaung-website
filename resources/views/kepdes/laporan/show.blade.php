<html>
<head>
    <style>
        /* page-break */
        .page-break {
            page-break-after: always;
        }

        /* text-align */
        .text-center {
            text-align: center;
        }
        .text-right {
            text-align: right;
        }
        .text-left {
            text-align: left;
        }

        /* text-color */
        .text-success {
            color: green;
        }
        .text-danger {
            color: red;
        }
        .text-warning {
            color: rgb(189, 189, 0);
        }
        .text-info {
            color: blue;
        }

        /* table */
        .table {
            width: 100%;
            /* margin-bottom: 1rem; */
            color: #000;
        }
        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #000;
        }
        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #000;
        }
        .table tbody + tbody {
            border-top: 2px solid #000;
        }
        .table {
            border-collapse: collapse !important;
        }
        .table td,
        .table th {
            background-color: #fff !important;
        }

        .table-bordered {
            border: 1px solid #000;
        }
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #000;
        }
        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
        } 
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #000 !important;
        }
    </style>
    @if ($jenis == 'pengaduan')
        <title>Laporan Pengaduan</title>
    @elseif ($jenis == 'surat')
        <title>Laporan Surat Online</title>
    @elseif ($jenis == 'kritiksaran')
        <title>Laporan Kritik dan Saran</title>
    @else
        <title>Laporan Penduduk</title>
    @endif
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
@if ($jenis == 'pengaduan')
    <h1 class="text-center">Laporan Pengaduan</h1>
    <table class="table">
        <tr>
            <td class="text-left">Dari Tanggal: {{ $dari_tanggal }}</td>
            <td class="text-right">Sampai Tanggal: {{ $ke_tanggal }}</td>
        </tr>
    </table>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pesan</th>
                <th>Status</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($laporan as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->judul }}</td>
                    <td>{{ $data->pesan }}</td>
                    @if ($data->status == 'pending')
                        <td>MENUNGGU</td>
                    @else
                        <td>SELESAI</td>
                    @endif
                    <td>{{ date('d M Y h:m:s', strtotime($data->created_at)) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@elseif ($jenis == 'surat')
    <h1 class="text-center">Laporan Surat Online</h1>
    <table class="table">
        <tr>
            <td class="text-left">Dari Tanggal: {{ $dari_tanggal }}</td>
            <td class="text-right">Sampai Tanggal: {{ $ke_tanggal }}</td>
        </tr>
    </table>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Surat</th>
                <th>Pesan</th>
                <th>Alasan</th>
                <th>Status</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($laporan as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    @if ($data->jenis == 'skpanjangktp')
                        <td>Surat Keterangan Perpanjang KTP</td>
                    @elseif ($data->jenis == 'skbuatktp')
                        <td>Surat Keterangan Pembuatan KTP</td>
                    @elseif ($data->jenis == 'skpindah')
                        <td>Surat Keterangan PINDAH</td>
                    @elseif ($data->jenis == 'skdatang')
                        <td>Surat Keterangan DATANG</td>
                    @elseif ($data->jenis == 'sklahir')
                        <td>Surat Keterangan Lahir</td>
                    @elseif ($data->jenis == 'skmati')
                        <td>Surat Keterangan Kematian</td>
                    @elseif ($data->jenis == 'skubahkk')
                        <td>Perubahan Data KK</td>
                    @elseif ($data->jenis == 'sdtinggal')
                        <td>Surat Domisili Tempat Tinggal</td>
                    @elseif ($data->jenis == 'skrt')
                        <td>Surat Keterangan Riwayat Tanah</td>
                    @elseif ($data->jenis == 'skdu')
                        <td>Surat Keterangan Domisili Usaha</td>
                    @elseif ($data->jenis == 'sku')
                        <td>Surat Keterangan Usaha</td>
                    @elseif ($data->jenis == 'spimb')
                        <td>Surat Pengantar IMB</td>
                    @elseif ($data->jenis == 'spnikah')
                        <td>Surat Pengantar Nikah</td>
                    @elseif ($data->jenis == 'spnikahcp')
                        <td>Surat Pengantar Nikah di Catatan Sipil</td>
                    @elseif ($data->jenis == 'spnikahdj')
                        <td>Surat Pengantar Nikah untuk Janda/Duda</td>
                    @elseif ($data->jenis == 'spskkm')
                        <td>Surat Pengantar SKKM</td>
                    @elseif ($data->jenis == 'spskck')
                        <td>Surat Pengantar SKCK</td>
                    @endif
                    <td>{{ $data->pesan }}</td>
                    <td>{{ $data->alasan }}</td>
                    @if ($data->status == 'complete')
                        <td class="text-success">SELESAI</td>
                    @elseif ($data->status == 'validate')
                        <td class="text-warning">MENUNGGU VALIDASI</td>
                    @elseif ($data->status == 'check')
                        <td class="text-info">CEK BERKAS</td>
                    @elseif ($data->status == 'pending')
                        <td class="text-warning">MENUNGGU</td>
                    @else
                        <td class="text-danger">DITOLAK</td>
                    @endif
                    <td>{{ date('d M Y h:m:s', strtotime($data->created_at)) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@elseif ($jenis == 'kritiksaran')
    <h1 class="text-center">Laporan Kritik dan Saran</h1>
@else
    <h1 class="text-center">Laporan Penduduk</h1>
@endif
</body>
</html>
{{-- <div class="page-break"></div>
<h1>Page 2</h1> --}}
    