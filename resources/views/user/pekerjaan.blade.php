@extends('layouts.user')

@section('title', 'Data Pekerjaan')

@section('content')
  <!--======= SUB BANNER =========-->
  <section class="sub-banner">
    <div class="container">
      <div class="position-center-center">
        <h2>Data Pekerjaan</h2>
        <ul class="breadcrumb">
          <li><a href="{{ url('/') }}">home</a></li>
          <li>data pekerjaan</li>
        </ul>
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Latest News -->
    <section class="latest-news blog blog-single padding-top-100 padding-bottom-100">
      <div class="container"> 
        
        <!-- Blog Side -->
        <div class="row">
          <div class="col-md-12"> 
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4 text-center">Data Pekerjaan</h1>
                    <div id="pie-chart"></div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th rowspan="2">No</th>
                                        <th rowspan="2">Pekerjaan</th>
                                        <th colspan="2">Jumlah</th>
                                        <th colspan="2">Laki-laki</th>
                                        <th colspan="2">Perempuan</th>
                                    </tr>
                                    <tr>
                                        <th>n</th>
                                        <th>%</th>
                                        <th>n</th>
                                        <th>%</th>
                                        <th>n</th>
                                        <th>%</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>Tidak/Belum Bekerja</td>
                                    <td>{{ $cpendn }}</td>
                                    <td>{{ number_format($cpendn/$ctotal*100, 2) }}%</td>
                                    <td>{{ $cpendnlaki }}</td>
                                    <td>{{ number_format($cpendnlaki/$ctotal*100, 2) }}%</td>
                                    <td>{{ $cpendnperempuan }}</td>
                                    <td>{{ number_format($cpendnperempuan/$ctotal*100, 2) }}%</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>Mengurus Rumah Tangga</td>
                                    <td>{{ $cpendsd }}</td>
                                    <td>{{ number_format($cpendsd/$ctotal*100, 2) }}%</td>
                                    <td>{{ $cpendsdlaki }}</td>
                                    <td>{{ number_format($cpendsdlaki/$ctotal*100, 2) }}%</td>
                                    <td>{{ $cpendsdperempuan }}</td>
                                    <td>{{ number_format($cpendsdperempuan/$ctotal*100, 2) }}%</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>Pelajar/Mahasiswa</td>
                                    <td>{{ $cpendsmp }}</td>
                                    <td>{{ number_format($cpendsmp/$ctotal*100, 2) }}%</td>
                                    <td>{{ $cpendsmplaki }}</td>
                                    <td>{{ number_format($cpendsmplaki/$ctotal*100, 2) }}%</td>
                                    <td>{{ $cpendsmpperempuan }}</td>
                                    <td>{{ number_format($cpendsmpperempuan/$ctotal*100, 2) }}%</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>Pegawai Negeri Sipil (PNS)</td>
                                    <td>{{ $cpendsma }}</td>
                                    <td>{{ number_format($cpendsma/$ctotal*100, 2) }}%</td>
                                    <td>{{ $cpendsmalaki }}</td>
                                    <td>{{ number_format($cpendsmalaki/$ctotal*100, 2) }}%</td>
                                    <td>{{ $cpendsmaperempuan }}</td>
                                    <td>{{ number_format($cpendsmaperempuan/$ctotal*100, 2) }}%</td>
                                  </tr>
                                  <tr>
                                    <td>5</td>
                                    <td>Nelayan</td>
                                    <td>{{ $cpendd1 }}</td>
                                    <td>{{ number_format($cpendd1/$ctotal*100, 2) }}%</td>
                                    <td>{{ $cpendd1laki }}</td>
                                    <td>{{ number_format($cpendd1laki/$ctotal*100, 2) }}%</td>
                                    <td>{{ $cpendd1perempuan }}</td>
                                    <td>{{ number_format($cpendd1perempuan/$ctotal*100, 2) }}%</td>
                                  </tr>
                                  <tr>
                                    <td>6</td>
                                    <td>Petani</td>
                                    <td>{{ $cpendd2 }}</td>
                                    <td>{{ number_format($cpendd2/$ctotal*100, 2) }}%</td>
                                    <td>{{ $cpendd2laki }}</td>
                                    <td>{{ number_format($cpendd2laki/$ctotal*100, 2) }}%</td>
                                    <td>{{ $cpendd2perempuan }}</td>
                                    <td>{{ number_format($cpendd2perempuan/$ctotal*100, 2) }}%</td>
                                  </tr>
                                  <tr>
                                    <td>7</td>
                                    <td>Tambak</td>
                                    <td>{{ $cpendd3 }}</td>
                                    <td>{{ number_format($cpendd3/$ctotal*100, 2) }}%</td>
                                    <td>{{ $cpendd3laki }}</td>
                                    <td>{{ number_format($cpendd3laki/$ctotal*100, 2) }}%</td>
                                    <td>{{ $cpendd3perempuan }}</td>
                                    <td>{{ number_format($cpendd3perempuan/$ctotal*100, 2) }}%</td>
                                  </tr>
                                  <tr>
                                    <td>8</td>
                                    <td>Lain-lain</td>
                                    <td>{{ $cpends1 }}</td>
                                    <td>{{ number_format($cpends1/$ctotal*100, 2) }}%</td>
                                    <td>{{ $cpends1laki }}</td>
                                    <td>{{ number_format($cpends1laki/$ctotal*100, 2) }}%</td>
                                    <td>{{ $cpends1perempuan }}</td>
                                    <td>{{ number_format($cpends1perempuan/$ctotal*100, 2) }}%</td>
                                  </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- End Content --> 

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

    Highcharts.chart('pie-chart', {
      chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
      },
      title: {
        text: ''
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
          y: cpendn
        }, {
          name: 'Mengurus Rumah Tangga',
          y: cpendsd
        }, {
          name: 'Pelajar/Mahasiswa',
          y: cpendsmp
        }, {
          name: 'PNS',
          y: cpendsma
        }, {
          name: 'Nelayan',
          y: cpendd1
        }, {
          name: 'Petani',
          y: cpendd2
        }, {
          name: 'Tambak',
          y: cpendd3
        }, {
          name: 'Lain-lain',
          y: cpends1
        }]
      }]
    });
  </script>
@endsection