@extends('layouts.user')

@section('title', 'Data Pekerjaan')

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
                    <h1 class="mt-4">Data Jenis Kelamin</h1>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No KK</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>327505091199010</td>
                                            <td>327505100102110</td>
                                            <td>Robert Downey Junior</td>
                                            <td>Laki-laki</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>327505091199010</td>
                                            <td>327505107052110</td>
                                            <td>Ikhsan Cangcuter</td>
                                            <td>Laki-laki</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>327505091199010</td>
                                            <td>327505220599110</td>
                                            <td>Afi Maung</td>
                                            <td>Setengah Perempuan</td>
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
@endsection