@extends('layouts.user')

@section('title', 'Data Pekerjaan')

@section('content')
  <!--======= SUB BANNER =========-->
  <section class="sub-banner">
    <div class="container">
      <div class="position-center-center">
        <h2>Data Perkawinan</h2>
        <ul class="breadcrumb">
          <li><a href="{{ url('/') }}">home</a></li>
          <li>data perkawinan</li>
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
                    <h1 class="mt-4 text-center">Data Perkawinan</h1>
                    <div id="pie-chart"></div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                  <thead>
                                    <tr>
                                        <th rowspan="2">No</th>
                                        <th rowspan="2">Status Pernikahan</th>
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
                                      <td>Menikah</td>
                                      <td>{{ $cstatusnikah }}</td>
                                      <td>{{ number_format($cstatusnikah/$ctotal*100, 2) }}%</td>
                                      <td>{{ $cstatusnikahlaki }}</td>
                                      <td>{{ number_format($cstatusnikahlaki/$ctotal*100, 2) }}%</td>
                                      <td>{{ $cstatusnikahperempuan }}</td>
                                      <td>{{ number_format($cstatusnikahperempuan/$ctotal*100, 2) }}%</td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>Lajang</td>
                                      <td>{{ $cstatuslajang }}</td>
                                      <td>{{ number_format($cstatuslajang/$ctotal*100, 2) }}%</td>
                                      <td>{{ $cstatuslajanglaki }}</td>
                                      <td>{{ number_format($cstatuslajanglaki/$ctotal*100, 2) }}%</td>
                                      <td>{{ $cstatuslajangperempuan }}</td>
                                      <td>{{ number_format($cstatuslajangperempuan/$ctotal*100, 2) }}%</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>Duda</td>
                                      <td>{{ $cstatusduda }}</td>
                                      <td>{{ number_format($cstatusduda/$ctotal*100, 2) }}%</td>
                                      <td>{{ $cstatusdudalaki }}</td>
                                      <td>{{ number_format($cstatusdudalaki/$ctotal*100, 2) }}%</td>
                                      <td>{{ $cstatusdudaperempuan }}</td>
                                      <td>{{ number_format($cstatusdudaperempuan/$ctotal*100, 2) }}%</td>
                                    </tr>
                                    <tr>
                                      <td>4</td>
                                      <td>Janda</td>
                                      <td>{{ $cstatusjanda }}</td>
                                      <td>{{ number_format($cstatusjanda/$ctotal*100, 2) }}%</td>
                                      <td>{{ $cstatusjandalaki }}</td>
                                      <td>{{ number_format($cstatusjandalaki/$ctotal*100, 2) }}%</td>
                                      <td>{{ $cstatusjandaperempuan }}</td>
                                      <td>{{ number_format($cstatusjandaperempuan/$ctotal*100, 2) }}%</td>
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
    var cstatusnikah    = <?php echo (number_format($cstatusnikah/$ctotal*100, 2)) ?>;
    var cstatuslajang   = <?php echo (number_format($cstatuslajang/$ctotal*100, 2)) ?>;
    var cstatusduda     = <?php echo (number_format($cstatusduda/$ctotal*100, 2)) ?>;
    var cstatusjanda    = <?php echo (number_format($cstatusjanda/$ctotal*100, 2)) ?>;

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
          name: 'Menikah',
          y: cstatusnikah
        }, {
          name: 'Lajang',
          y: cstatuslajang
        }, {
          name: 'Duda',
          y: cstatusduda
        }, {
          name: 'Janda',
          y: cstatusjanda
        }]
      }]
    });
  </script>
@endsection