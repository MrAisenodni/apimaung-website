@extends('layouts.user')

@section('title', 'Badan Permusyarawaratan Desa')

@section('content')
  <!--======= SUB BANNER =========-->
  <section class="sub-banner">
    <img src="{{ url('images/bg/peta-subbg.jpg') }}" alt="foto" width="100%" height="100%">
  </section>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Latest News -->
    <section class="latest-news blog blog-single padding-top-100 padding-bottom-100">
      <div class="container"> 
        
        <!-- Blog Side -->
        <div class="row">
          <div class="col-md-9"> 
            <div class="container">
              <div class="position-left-left">
                <h2>Badan Permusyarawaratan Desa</h2>
                <ul class="breadcrumb">
                  <li><a href="{{ url('/') }}">home</a></li>
                  <li>badan permusyawaratan desa</li>
                </ul>
              </div>
            </div>

            <!-- News 1 -->
            <article class="margin-bottom-50"> <a href="#.">  </a>
              <div class="news-detail text-center">
                <div class="row margin-left-100 margin-right-100 margin-top-20">
                  <div class="col-md-10 col-xs-12">
                      <h5>STRUKTUR ORGANISASI BADAN PERMUSYAWARATAN DESA</h5>
                      <h5>DESA TENGKURAK KABUPATEN SERANG BANTEN</h5>

                      <table class="table table-info margin-top-20" id="dataTable" width="100%" cellspacing="0">
                          <thead class="bg-info">
                              <tr>
                                  <th class="text-center">No</th>
                                  <th class="text-center">Nama</th>
                                  <th class="text-center">Jabatan</th>
                                  <th class="text-center">Alamat</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($angbpd as $data)
                              <tr>
                                  <td class="text-center">{{ $loop->iteration }}</td>
                                  <td>{{ $data->nama }}</td>
                                  <td>{{ $data->jabatan }}</td>
                                  <td>{{ $data->alamat }}</td>
                              </tr>
                            @endforeach
                          </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </article> 
          </div>
    
          
          <!-- Side Bar -->
          <div class="col-md-3">
            <div class="side-bar"> 
              
              <!-- Categories -->
              <h5 class="font-alegreya ">Arsip</h5>
              <ul class="cate bg-defult">
                <li><a href="#.">Januari 2020 <span>(10)</span></a></li>
                <li><a href="#.">Februari 2020<span>(20)</span></a></li>
                <li><a href="#.">Maret 2020<span>(28)</span></a></li>
                <li><a href="#.">April 2020<span>(18)</span></a></li>
                <li><a href="#."><span>View All <i class="fa fa-long-arrow-right"></i></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- End Content --> 
@endsection