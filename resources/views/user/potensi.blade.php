@extends('layouts.user')

@section('title', 'Potensi Desa')

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
                  <h2>Potensi Desa Tengkurak</h2>
                  <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">home</a></li>
                    <li>potensi desa</li>
                  </ul>
                </div>
              </div>

              <!-- News 2 -->
              <article class="margin-bottom-50"> <a href="#."> <img class="img-responsive" src="images/potensi/ikan bandeng.jpg" alt=""> </a>
                <div class="news-detail">
                  <div class="row">
                    <div class="col-md-3 text-center">
                      <div class="avatar"> <img class="img-circle" src="images/avatar.png" alt=""> </div>
                      <p>22 Juli 2021 </p>
                      <p><i class="fa fa-comment"></i>01 </p>
                    </div>
                    <div class="col-md-9"> <a href="#.">Potensi Ikan Bandeng</a>
                      <p>Ikan bandeng merupakan salah satu potensi terluas di Desa Tengkurak</p>
                    </div>
                  </div>
                </div>
              </article>
              
              <!-- News 1 -->
              <article class="margin-bottom-50"> <a href="#."> <img class="img-responsive" src="images/potensi/rumput laut.jpg" alt=""> </a>
                <div class="news-detail">
                  <div class="row">
                    <div class="col-md-3 text-center">
                      <div class="avatar"> <img class="img-circle" src="images/avatar.png" alt=""> </div>
                      <p>22 Juli 2021 </p>
                      <p><i class="fa fa-comment"></i>03 </p>
                    </div>
                    <div class="col-md-9"> <a href="#.">Potensi Rumput Laut</a>
                      <p>Rumput laut merupakan potensi terluas di Desa Tengkurak</p>
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