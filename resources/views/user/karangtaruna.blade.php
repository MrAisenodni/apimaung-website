@extends('layouts.user')

@section('title', 'Karang Taruna')

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
                <h2>Karang Taruna</h2>
                <ul class="breadcrumb">
                  <li><a href="{{ url('/') }}">home</a></li>
                  <li>karang taruna</li>
                </ul>
              </div>
            </div>

            <!-- News 1 -->
            <article class="margin-bottom-50"> <a href="#.">  </a>
              <div class="news-detail">
                <div class="row">
                  <div class="col-md-11"> <a href="#.">Karang Taruna</a>
                    <div class="artikel-konten clearfix"><p style="text-align: center;" align="left"><strong>TUGAS &nbsp;KARANGTARUNA</strong></p>
                      <p style="text-align: justify;" align="left">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; menanggulangi berbagai masalah kesejahteraan sosial terutama yang dihadapi generasi muda, baik yang bersifat preventif, rehabilitatif, maupun pengembangan potensi generasi muda di lingkungannya</p>
                      <p style="text-align: center;" align="left"><strong>FUNGSI KARANGTARUNA</strong></p>
                      <ol>
                        <li style="text-align: justify;">
                          <p>penyelenggara usaha kesejahteraan sosial;</p>
                        </li>
                        <li style="text-align: justify;">
                          <p>penyelenggara pendidikan dan pelatihan bagi masyarakat;</p>
                        </li>
                        <li style="text-align: justify;">
                          <p>penyelenggara pemberdayaan masyarakat terutama generasi muda di lingkungannya secara komprehensif, terpadu dan terarah serta berkesinambungan;</p>
                        </li>
                        <li style="text-align: justify;">
                          <p>penyelenggara kegiatan pengembangan jiwa kewirausahaan bagi generasi muda di lingkungannya;</p>
                        </li>
                        <li style="text-align: justify;">
                          <p>penanaman pengertian, memupuk dan meningkatkan kesadaran tanggung jawab sosial generasi muda;</p>
                        </li>
                        <li style="text-align: justify;">
                          <p>penumbuhan dan pengembangan semangat kebersamaan, jiwa kekeluargaan, kesetiakawanan sosial dan memperkuat nilai-nilai kearifan dalam bingkai Negara Kesatuan Republik Indonesia;</p>
                        </li>
                        <li style="text-align: justify;">
                          <p>pemupukan kreatifitas generasi muda untuk dapat mengembangkan tanggung jawab sosial yang bersifat rekreatif, kreatif, edukatif, ekonomis produktif dan kegiatan praktis lainnya dengan mendayagunakan segala sumber dan potensi kesejahteraan sosial di lingkungannya secara swadaya;</p>
                        </li>
                        <li style="text-align: justify;">
                          <p>penyelenggara rujukan, pendampingan dan advokasi sosial bagi penyandang masalah kesejahteraan sosial;</p>
                        </li>
                        <li style="text-align: justify;">
                          <p>penguatan sistem jaringan komunikasi, kerjasama, informasi dan kemitraan dengan berbagai sektor lainnya;</p>
                        </li>
                        <li style="text-align: justify;">
                          <p>penyelenggara usaha-usaha pencegahan permasalahan sosial yang aktual;</p>
                        </li>
                        <li style="text-align: justify;">
                          <p>pengembangan kreatifitas remaja, pencegahan kenakalan, penyalahgunaan obat terlarang (narkoba) bagi remaja; dan</p>
                        </li>
                        <li>
                          <p style="text-align: justify;">penanggulangan masalah-masalah sosial, baik secara preventif, rehabilitatif dalam rangka pencegahan kenakalan remaja, penyalahgunaan obat terlarang (narkoba) bagi remaja.</p>
                        </li>
                      </ol>
                      <p align="left">&nbsp;</p>
                      <p align="center"><strong>DAFTAR NAMA PENGURUS KARANG TARUNA</strong></p>
                      <p align="center"><strong>MASA JABATAN  s/d </strong></p>
                      <p align="center"><strong>DESA TENGKURAK KECAMATAN TIRTAYASA KABUPATEN SERANG</strong></p>
                      <table style="margin-left: auto; margin-right: auto;" border="1" width="494" cellspacing="10" cellpadding="10px">
                        <tbody>
                          <tr>
                            <td style="text-align: center;" width="43"><strong>NO</strong></td>
                            <td style="text-align: center;" width="206"><strong>NAMA</strong></td>
                            <td style="text-align: center;" width="125"><strong>JABATAN</strong></td>
                            <td style="text-align: center;" width="120"><strong>ALAMAT</strong></td>
                          </tr>
                        </tbody>
                      </table>  
                    </div> 
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