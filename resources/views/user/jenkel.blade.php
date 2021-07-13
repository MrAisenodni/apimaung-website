@extends('layouts.user')

@section('title', 'Data Jenis Kelamin')

@section('content')
  <!--======= SUB BANNER =========-->
  <section class="sub-banner">
    <div class="container">
      <div class="position-center-center">
        <h2>Data Jenis Kelamin</h2>
        <ul class="breadcrumb">
          <li><a href="{{ url('/') }}">home</a></li>
          <li>data jenis kelamin</li>
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
                    <div id="pie-chart"></div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead class="center">
                                        <tr>
                                            <th width="10%">No</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Total</th>
                                            <th>Persentase</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>Laki-laki</td>
                                        <td>{{ $claki }}</td>
                                        <td>{{ number_format($claki/$ctotal*100, 2) }}%</td>
                                      </tr>
                                      <tr>
                                        <td>2</td>
                                        <td>Perempuan</td>
                                        <td>{{ $cperempuan }}</td>
                                        <td>{{ number_format($cperempuan/$ctotal*100, 2) }}%</td>
                                      </tr>
                                      <tr>
                                        <td colspan="2" class="text-bold">Total Penduduk</td>
                                        <td>{{ $ctotal }}</td>
                                        <td>100%</td>
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
    var countLaki       = <?php echo (number_format($claki/$ctotal*100, 2)) ?>;
    var countPerempuan  = <?php echo (number_format($cperempuan/$ctotal*100, 2)) ?>;

    Highcharts.chart('pie-chart', {
      chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
      },
      title: {
        text: '<b>Data Penduduk berdasarkan Jenis Kelamin</b>'
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
  </script>
@endsection