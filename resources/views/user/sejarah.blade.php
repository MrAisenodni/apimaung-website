@extends('layouts.user')

@section('title', 'Sejarah Desa')

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
                <h2>Sejarah Desa Tengkurak</h2>
                <ul class="breadcrumb">
                  <li><a href="{{ url('/') }}">home</a></li>
                  <li>sejarah desa</li>
                </ul>
              </div>
            </div>

            <!-- News 1 -->
            <article class="margin-bottom-50"> <a href="#.">  </a>
              <div class="news-detail">
                <div class="row">
                  <div class="col-md-11"> <a href="#.">Desa Tengkurak</a>
                    <p>Tengkurak adalah desa di kecamatan Tirtayasa, Serang, Banten, Indonesia.
                      <br> <br>
                      Desa Tengakurak merupakan bagian dari kecamatan Tirtayasa yang terletak sekitar 4,5 Km dari kantor kecamatan Tirtayasa atau sekitar 38 Km dari pusat kota Serang. Desa Tengkurak terletak didekat muara Sungai Ciujung.
                      <br> <br>
                      Sejarah nama Tengkurak sendiri masih simpang siur, karena ada dua versi yang beredar di masyarakat.
                      <br>
                      Pertama, nama tengkurak diambil dari saudagar Malaysia yang singgah dan menetap pertama kali di Desa Tengkurak, yaitu Tengku Perak, sehingga terinspirasi oleh nama pendiri desa ini maka nama Tengku Perak disingkat menjadi Tengkurak.
                      <br> <br>
                      Kedua, nama Tengkurak diambil dari sejarah pada masa penjajahan Belanda. Konon, desa ini banyak tengkorak manusia yang hanyut terbawa dari hulu Sungai Ciujung dan terdampar di muara Sungai Ciujung, sehingga karena banyak tengkorak maka nama desa ini disebut Tengkurak.
                      <br> <br>
                      Mata pencaharian warga Desa Tengkurak adalah pekerja tambak, petani dan nelayan. Sebagaian kecil masyarakat desa Tengkurak menjadi TKI (Tenaga Kerja Indonesia) di wilayah Arab.
                    </p>
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