@extends('layouts.user')

@section('title', 'Visi Misi')

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
                <h2>Visi dan Misi Desa Tengkurak</h2>
                <ul class="breadcrumb">
                  <li><a href="{{ url('/') }}">home</a></li>
                  <li>visi dan misi</li>
                </ul>
              </div>
            </div> 
            
            <!-- News 1 -->
            <div class="artikel-konten clearfix"><p style="text-align: center;"><strong>VISI DAN MISI DESA TENGKURAK</strong></p>
              <p style="text-align: center;"><strong>&nbsp;Visi</strong>&nbsp;</p>
              <p style="text-align: center;">Visi Desa Tengkurak : "TERWUJUDNYA MASYARAKAT YANG BERKUALITAS MENUJU KABUPATEN SERANG YANG AGAMIS, ADIL DAN SEJAHTERA".</p>
              <p style="text-align: center;">&nbsp;</p>
              <p style="text-align: center;"><strong>Misi</strong></p>
              <p style="text-align: center;">Misi Desa Tengkurak:</p>
              <p style="text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1. MEMANTAPKAN PERAN AGAMA SEBAGAI LANDASAN MORAL DALAM KEHIDUPAN INDIVIDU, BERMASYARAKAT & BERNEGARA.</p>
              <p style="text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 2. MENINGKATKAN KUALITAS SUMBER DAYA MANUSIA YANG SEHAT, CERDAS, BERAKHLAKUL KARIMAH DAN BERBUDAYA.</p>
              <p style="text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 3. MENINGKATKAN KUANTITAS DAN KUALITAS SARANA, PRASARANA DAN FASILITAS PELAYANAN DASAR DISEMUA WILAYAH.</p>
              <p style="text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 4. MENINGKATKAN KUALITAS PENGELOLAAN LINGKUNGAN HIDUP</p>
            </div> 
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