@extends('layouts.user')

@section('title', 'Profil Wilayah Desa')

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
                <h2>Profil Wilayah Desa Tengkurak</h2>
                <ul class="breadcrumb">
                  <li><a href="{{ url('/') }}">home</a></li>
                  <li>profil wilayah desa</li>
                </ul>
              </div>
            </div>

            <!-- News 1 -->
            <article class="margin-bottom-50"> <a href="#.">  </a>
              <div class="news-detail text-center">
                <div class="row margin-left-100 margin-right-100 margin-top-30">
                  <div class="col-md-10 col-xs-12">
                    <table class="table table-bordered">
                      <tbody class="text-center">
                        <tr>
                          <th colspan="2" class="text-center text-bold font-18px">
                            TENGKURAK
                          </th>
                        </tr>
                        <tr>
                          <td colspan="2" class="text-center text-bold bg-info">
                            DESA
                          </td>
                        </tr>
                        <tr class="mergedtoprow"> 
                          <th scope="row"><a href="#." title="negara">Negara</a></th> 
                          <td>
                            <span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/23px-Flag_of_Indonesia.svg.png" decoding="async" width="23" height="15" class="thumbborder" data-file-width="900" data-file-height="600">&nbsp;</span><a href="#." title="Indonesia">Indonesia</a>
                          </td>
                        </tr>
                        
                        <tr class="mergedrow"><th scope="row"><a href="#." class="mw-redirect" title="Daftar kabupaten dan kota Indonesia">Provinsi</a></th>
                          <td><a href="#." title="">Banten</a></td>
                        </tr>

                        <tr class="mergedrow"><th scope="row"><a href="#." class="mw-redirect" title="">Kabupaten</a></th>
                          <td><a href="#." title="Tengkorak">Serang</a> </td>
                        </tr>
                        
                        <tr class="mergedrow"> 
                          <th scope="row"><a href="#." title="Banten">Kecamatan</a></th>
                          <td>
                            <a href="#." title="Tirtayasa, Serang">Tirtayasa</a>
                          </td>
                        </tr>
                                        
                        <tr class="mergedtoprow"> <th scope="row">Kode Kemendagri</th>
                          <td>36.04.13.2011 
                            <span class="penicon" data-bridge-edit-flow="single-best-value">
                              <a href="#." decoding="async" width="10" height="10" style="vertical-align: baseline"  data-file-width="20" data-file-height="20"></a>
                            </span>
                          </td>
                        </tr>
                        
                        <tr class="mergedtoprow">
                          <th scope="row">Luas</th>
                            <td>653Ha</td>
                        </tr>
                        
                        <tr class="mergedrow">
                          <th scope="row">Jumlah penduduk</th>
                            <td>2500 orang</td>
                        </tr>
                        
                        <tr class="mergedrow">
                          <th scope="row">Kepadatan</th>
                          <td>-</td>
                        </tr>
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