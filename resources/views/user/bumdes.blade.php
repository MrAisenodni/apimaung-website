@extends('layouts.user')

@section('title', 'Bum Desa')

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
                <h2>Bum Desa</h2>
                <ul class="breadcrumb">
                  <li><a href="{{ url('/') }}">home</a></li>
                  <li>bumdes</li>
                </ul>
              </div>
            </div>

            <!-- News 1 -->
            <article class="margin-bottom-50"> <a href="#.">  </a>
                <div class="news-detail">
                    <div class="row">
                        <div class="col-md-11"> <a href="#.">BUMDes</a>
                            <h5 class="text-center">NAMA, TEMPAT/KEDUDUKAN DAN DAERAH KERJA</h5>
                            <p>
                              Badan Usaha Milik Desa Tengkurak Badan Usaha Milik Desa Tengkurak Raya yang selanjutnya disingkat "BUMDes Tengkurak"
                              BUMDes Wukirraya berkedudukan di Desa Tengkurak,.
                              Daerah kerja BUMDes Wukirraya berada di Desa Tengkurak,.
                            </p><br>

                            <h5 class="text-center">MAKSUD DAN TUJUAN PEMBENTUKAN BUM DESA</h5>
                            <p>
                              Pendirian BUM Desa dimaksudkan sebagai upaya menampung seluruh kegiatan di bidang ekonomi 
                              dan/atau pelayanan umum yang dikelola oleh Desa dan/atau kerja sama antar-Desa.
                              Tujuan pembentukan BUM Desa adalah <br>
                              <ol>
                                <li>1. meningkatkan perekonomian Desa;</li>
                                <li>2. mengoptimalkan aset Desa agar bermanfaat untuk kesejahteraan Desa;</li>
                                <li>3. meningkatkan usaha masyarakat dalam pengelolaan potensi ekonomi Desa;</li>
                                <li>4. mengembangkan rencana kerja sama usaha antar desa dan/atau dengan pihak ketiga;</li>
                                <li>5. menciptakan peluang dan jaringan pasar yang mendukung kebutuhan layanan umum warga;</li>
                                <li>6. membuka lapangan kerja;</li>
                                <li>7. meningkatkan kesejahteraan masyarakat melalui perbaikan pelayanan umum, pertumbuhan dan pemerataan ekonomi Desa; dan</li>
                                <li>8. meningkatkan pendapatan masyarakat Desa dan Pendapatan Asli Desa.</li>
                              </ol>
                            </p><br>

                            <h5 class="text-center">VISI DAN MISI</h5>
                            <p>
                              Visi BUMDes Wukirraya adalah mewujudkan kesejahteraan masyarakat Desa Tengkurak melalui 
                              pengembangan usaha ekonomi dan pelayanan sosial. Misi BUMDes Wukirraya <br>
                              <ol>
                                <li>1. Meningkatkan usaha ekonomi masyarakat melalui pengembangan jaringan kerjasama dengan berbagai pihak;</li>
                                <li>2. Meningkatkan layanan sosial bagi rumah tangga miskin;</li>
                                <li>3. Memanfaatkan sumber daya alam untuk peningkatan kesejahteraan masyarakat yang berbasis lingkungan; dan</li>
                                <li>4. Mendayagunakan potensi  kelembagaan ekonomi masyarakat yang berdaya saing.</li>
                              </ol>
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