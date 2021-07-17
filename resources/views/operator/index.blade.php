@extends('layouts.operator')

@section('title', 'Dashboard')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        {{-- Data Surat Online --}}
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <h4>DATA SURAT ONLINE</h4>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4 row">
                                    <div class="card-body">
                                        <table>
                                            <tr>
                                                <td class="">Surat Ditolak</td>
                                                <th width="5%"><h1>{{ $ctolak }}</h1></th>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">
                                        <table>
                                            <tr>
                                                <td class="">Surat Menunggu</td>
                                                <th width="5%"><h1>{{ $ctunggu }}</h1></th>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                        <table>
                                            <tr>
                                                <td class="">Surat Selesai</td>
                                                <th width="5%"><h1>{{ $cselesai }}</h1></th>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">
                                        <table>
                                            <tr>
                                                <td class="">Total Surat Online</td>
                                                <th width="5%"><h1>{{ $csurat }}</h1></th>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Data Pengaduan --}}
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <h4>DATA PENGADUAN</h4>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4 row">
                                    <div class="card-body">
                                        <table>
                                            <tr>
                                                <td class="">Total Kritik Saran</td>
                                                <th width="5%"><h1>{{ $ckritiksaran }}</h1></th>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">
                                        <table>
                                            <tr>
                                                <td class="">Pengaduan Menunggu</td>
                                                <th width="5%"><h1>{{ $cptunggu }}</h1></th>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                        <table>
                                            <tr>
                                                <td class="">Pengaduan Selesai</td>
                                                <th width="5%"><h1>{{ $cpselesai }}</h1></th>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">
                                        <table>
                                            <tr>
                                                <td class="">Total Pengaduan</td>
                                                <th width="5%"><h1>{{ $cpengaduan }}</h1></th>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Data Penduduk --}}
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <h4>DATA KEPENDUDUKAN</h4>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4 row">
                                    <div class="card-body">
                                        <table>
                                            <tr>
                                                <td class="">Total Anggota BPD</td>
                                                <th width="5%"><h1>{{ $cangbpd }}</h1></th>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">
                                        <table>
                                            <tr>
                                                <td class="">Penduduk Perempuan</td>
                                                <th width="5%"><h1>{{ $cperempuan }}</h1></th>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                        <table>
                                            <tr>
                                                <td class="">Penduduk Laki-laki</td>
                                                <th width="5%"><h1>{{ $claki }}</h1></th>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">
                                        <table>
                                            <tr>
                                                <td class="">Total Penduduk</td>
                                                <th width="5%"><h1>{{ $cpenduduk }}</h1></th>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div id="jenkel-chart"></div>
                            </div>
                            <div class="col-xl-6">
                                <div id="status-chart"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div id="pendidikan-chart"></div>
                            </div>
                            <div class="col-xl-6">
                                <div id="pekerjaan-chart"></div>
                            </div>
                        </div>
                    </div>
                </main>

    {{-- Script Chart --}}
    <script type="text/javascript">
        var cpendn       = <?php echo (number_format($cpendn/$ctotal*100, 2)) ?>;
        var cpendsd      = <?php echo (number_format($cpendsd/$ctotal*100, 2)) ?>;
        var cpendsmp     = <?php echo (number_format($cpendsmp/$ctotal*100, 2)) ?>;
        var cpendsma     = <?php echo (number_format($cpendsma/$ctotal*100, 2)) ?>;
        var cpendd1      = <?php echo (number_format($cpendd1/$ctotal*100, 2)) ?>;
        var cpendd2      = <?php echo (number_format($cpendd2/$ctotal*100, 2)) ?>;
        var cpendd3      = <?php echo (number_format($cpendd3/$ctotal*100, 2)) ?>;
        var cpends1      = <?php echo (number_format($cpends1/$ctotal*100, 2)) ?>;
        var cpends2      = <?php echo (number_format($cpends2/$ctotal*100, 2)) ?>;
        var cpends3      = <?php echo (number_format($cpends3/$ctotal*100, 2)) ?>;
    
        Highcharts.chart('pendidikan-chart', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: '<b>Data Pendidikan Desa Tengkurak</b>'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
                }
            },
            series: [{
                name: 'Total',
                colorByPoint: true,
                data: [{
                name: 'Tidak Sekolah',
                y: cpendn
                }, {
                name: 'SD',
                y: cpendsd
                }, {
                name: 'SMP',
                y: cpendsmp
                }, {
                name: 'SMA',
                y: cpendsma
                }, {
                name: 'D1',
                y: cpendd1
                }, {
                name: 'D2',
                y: cpendd2
                }, {
                name: 'D3',
                y: cpendd3
                }, {
                name: 'S1',
                y: cpends1
                }, {
                name: 'S2',
                y: cpends2
                }, {
                name: 'S3',
                y: cpends3
                }]
            }]
        });

        var countLaki       = <?php echo (number_format($claki/$ctotal*100, 2)) ?>;
        var countPerempuan  = <?php echo (number_format($cperempuan/$ctotal*100, 2)) ?>;

        Highcharts.chart('jenkel-chart', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: '<b>Data Jenis Kelamin Desa Tengkurak</b>'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                name: 'Laki-laki',
                y: countLaki
                }, {
                name: 'Perempuan',
                y: countPerempuan
                }]
            }]
        });

        var cstatusnikah    = <?php echo (number_format($cstatusnikah/$ctotal*100, 2)) ?>;
        var cstatuslajang   = <?php echo (number_format($cstatuslajang/$ctotal*100, 2)) ?>;
        var cstatusduda     = <?php echo (number_format($cstatusduda/$ctotal*100, 2)) ?>;
        var cstatusjanda    = <?php echo (number_format($cstatusjanda/$ctotal*100, 2)) ?>;

        Highcharts.chart('status-chart', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: '<b>Data Pernikahan Desa Tengkurak</b>'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
                }
            },
            series: [{
                name: 'Total',
                colorByPoint: true,
                data: [{
                name: 'Menikah',
                y: cstatusnikah
                }, {
                name: 'Lajang',
                y: cstatuslajang
                }, {
                name: 'Cerai Hidup',
                y: cstatusduda
                }, {
                name: 'Cerai Mati',
                y: cstatusjanda
                }]
            }]
        });

        var ckerjan       = <?php echo (number_format($ckerjan/$ctotal*100, 2)) ?>;
        var ckerjasd      = <?php echo (number_format($ckerjasd/$ctotal*100, 2)) ?>;
        var ckerjasmp     = <?php echo (number_format($ckerjasmp/$ctotal*100, 2)) ?>;
        var ckerjasma     = <?php echo (number_format($ckerjasma/$ctotal*100, 2)) ?>;
        var ckerjad1      = <?php echo (number_format($ckerjad1/$ctotal*100, 2)) ?>;
        var ckerjad2      = <?php echo (number_format($ckerjad2/$ctotal*100, 2)) ?>;
        var ckerjad3      = <?php echo (number_format($ckerjad3/$ctotal*100, 2)) ?>;
        var ckerjas1      = <?php echo (number_format($ckerjas1/$ctotal*100, 2)) ?>;

        Highcharts.chart('pekerjaan-chart', {
        chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Data Pekerjaan Desa Tengkurak'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
                }
            },
            series: [{
                name: 'Total',
                colorByPoint: true,
                data: [{
                name: 'Tidak/Belum Bekerja',
                y: ckerjan
                }, {
                name: 'Mengurus Rumah Tangga',
                y: ckerjasd
                }, {
                name: 'Pelajar/Mahasiswa',
                y: ckerjasmp
                }, {
                name: 'PNS',
                y: ckerjasma
                }, {
                name: 'Nelayan',
                y: ckerjad1
                }, {
                name: 'Petani',
                y: ckerjad2
                }, {
                name: 'Tambak',
                y: ckerjad3
                }, {
                name: 'Lain-lain',
                y: ckerjas1
                }]
            }]
        });
      </script>
@endsection