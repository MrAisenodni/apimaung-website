@extends('layouts.user')

@section('title', 'Data Pendidikan')

@section('content')
  <!--======= SUB BANNER =========-->
  <section class="sub-banner">
    <div class="container">
      <div class="position-center-center">
        <h2>Data Pendidikan</h2>
        <ul class="breadcrumb">
          <li><a href="{{ url('/') }}">home</a></li>
          <li>data pendidikan</li>
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
                    <h1 class="mt-4 text-center">Data Pendidikan</h1>
                    <div id="pie-chart"></div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Pendidikan</th>
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
                                        <td>Tidak/Belum Sekolah</td>
                                        <td>{{ $cpendn }}</td>
                                        <td>{{ number_format($cpendn/$ctotal*100, 2) }}%</td>
                                        <td>{{ $cpendnlaki }}</td>
                                        <td>{{ number_format($cpendnlaki/$ctotal*100, 2) }}%</td>
                                        <td>{{ $cpendnperempuan }}</td>
                                        <td>{{ number_format($cpendnperempuan/$ctotal*100, 2) }}%</td>
                                      </tr>
                                      <tr>
                                        <td>2</td>
                                        <td>SD/Sederajat</td>
                                        <td>{{ $cpendsd }}</td>
                                        <td>{{ number_format($cpendsd/$ctotal*100, 2) }}%</td>
                                        <td>{{ $cpendsdlaki }}</td>
                                        <td>{{ number_format($cpendsdlaki/$ctotal*100, 2) }}%</td>
                                        <td>{{ $cpendsdperempuan }}</td>
                                        <td>{{ number_format($cpendsdperempuan/$ctotal*100, 2) }}%</td>
                                      </tr>
                                      <tr>
                                        <td>3</td>
                                        <td>SMP/SLTP/Sederajat</td>
                                        <td>{{ $cpendsmp }}</td>
                                        <td>{{ number_format($cpendsmp/$ctotal*100, 2) }}%</td>
                                        <td>{{ $cpendsmplaki }}</td>
                                        <td>{{ number_format($cpendsmplaki/$ctotal*100, 2) }}%</td>
                                        <td>{{ $cpendsmpperempuan }}</td>
                                        <td>{{ number_format($cpendsmpperempuan/$ctotal*100, 2) }}%</td>
                                      </tr>
                                      <tr>
                                        <td>4</td>
                                        <td>SMA/SLTA/Sederajat</td>
                                        <td>{{ $cpendsma }}</td>
                                        <td>{{ number_format($cpendsma/$ctotal*100, 2) }}%</td>
                                        <td>{{ $cpendsmalaki }}</td>
                                        <td>{{ number_format($cpendsmalaki/$ctotal*100, 2) }}%</td>
                                        <td>{{ $cpendsmaperempuan }}</td>
                                        <td>{{ number_format($cpendsmaperempuan/$ctotal*100, 2) }}%</td>
                                      </tr>
                                      <tr>
                                        <td>5</td>
                                        <td>Diploma I (D1)</td>
                                        <td>{{ $cpendd1 }}</td>
                                        <td>{{ number_format($cpendd1/$ctotal*100, 2) }}%</td>
                                        <td>{{ $cpendd1laki }}</td>
                                        <td>{{ number_format($cpendd1laki/$ctotal*100, 2) }}%</td>
                                        <td>{{ $cpendd1perempuan }}</td>
                                        <td>{{ number_format($cpendd1perempuan/$ctotal*100, 2) }}%</td>
                                      </tr>
                                      <tr>
                                        <td>6</td>
                                        <td>Diploma II (D2)</td>
                                        <td>{{ $cpendd2 }}</td>
                                        <td>{{ number_format($cpendd2/$ctotal*100, 2) }}%</td>
                                        <td>{{ $cpendd2laki }}</td>
                                        <td>{{ number_format($cpendd2laki/$ctotal*100, 2) }}%</td>
                                        <td>{{ $cpendd2perempuan }}</td>
                                        <td>{{ number_format($cpendd2perempuan/$ctotal*100, 2) }}%</td>
                                      </tr>
                                      <tr>
                                        <td>7</td>
                                        <td>Diploma III (D3)</td>
                                        <td>{{ $cpendd3 }}</td>
                                        <td>{{ number_format($cpendd3/$ctotal*100, 2) }}%</td>
                                        <td>{{ $cpendd3laki }}</td>
                                        <td>{{ number_format($cpendd3laki/$ctotal*100, 2) }}%</td>
                                        <td>{{ $cpendd3perempuan }}</td>
                                        <td>{{ number_format($cpendd3perempuan/$ctotal*100, 2) }}%</td>
                                      </tr>
                                      <tr>
                                        <td>8</td>
                                        <td>Diploma IV/Strata I (D4/S1)</td>
                                        <td>{{ $cpends1 }}</td>
                                        <td>{{ number_format($cpends1/$ctotal*100, 2) }}%</td>
                                        <td>{{ $cpends1laki }}</td>
                                        <td>{{ number_format($cpends1laki/$ctotal*100, 2) }}%</td>
                                        <td>{{ $cpends1perempuan }}</td>
                                        <td>{{ number_format($cpends1perempuan/$ctotal*100, 2) }}%</td>
                                      </tr>
                                      <tr>
                                        <td>9</td>
                                        <td>Strata II (S2)</td>
                                        <td>{{ $cpends2 }}</td>
                                        <td>{{ number_format($cpends2/$ctotal*100, 2) }}%</td>
                                        <td>{{ $cpends2laki }}</td>
                                        <td>{{ number_format($cpends2laki/$ctotal*100, 2) }}%</td>
                                        <td>{{ $cpends2perempuan }}</td>
                                        <td>{{ number_format($cpends2perempuan/$ctotal*100, 2) }}%</td>
                                      </tr>
                                      <tr>
                                        <td>10</td>
                                        <td>Strata III (S3)</td>
                                        <td>{{ $cpends3 }}</td>
                                        <td>{{ number_format($cpends3/$ctotal*100, 2) }}%</td>
                                        <td>{{ $cpends3laki }}</td>
                                        <td>{{ number_format($cpends3laki/$ctotal*100, 2) }}%</td>
                                        <td>{{ $cpends3perempuan }}</td>
                                        <td>{{ number_format($cpends3perempuan/$ctotal*100, 2) }}%</td>
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
    var cpends2      = <?php echo (number_format($cpends2/$ctotal*100, 2)) ?>;
    var cpends3      = <?php echo (number_format($cpends3/$ctotal*100, 2)) ?>;

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
  </script>
@endsection