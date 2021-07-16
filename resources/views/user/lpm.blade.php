@extends('layouts.user')

@section('title', 'LPM')

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
                <h2>LPM</h2>
                <ul class="breadcrumb">
                  <li><a href="{{ url('/') }}">home</a></li>
                  <li>lpm</li>
                </ul>
              </div>
            </div>

            <!-- News 1 -->
            <article class="margin-bottom-50"> <a href="#.">  </a>
                <div class="news-detail">
                    <div class="row">
                        <div class="col-md-11"> <a href="#.">LPM</a>
                            <div class="artikel-konten clearfix"><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Lembaga Pemberdayaan Masyarakat (LPM) adalah salah satu lembaga kemasyaratan yang berada di desa. Lembaga Pemberdayaan Masyarakat mempunyai tugas menyusun rencana pembangunan secara partisipatif, menggerakkan swadaya gotong royong masyarakat, melaksanakan dan mengendalikan pembangunan.</p>
                             <p style="text-align: center;" align="left"><strong>FUNGSI LPM</strong></p>
                                <ol>
                                 <li>penampungan dan penyaluran aspirasi masyarakat dalam pembangunan;</li>
                                 <li>penanaman dan pemupukan rasa persatuan dan kesatuan masyarakat dalam kerangka memperkokoh Negara Kesatuan Republik Indonesia;</li>
                                 <li>peningkatan kualitas dan percepatan pelayanan pemerintah kepada masyarakat;</li>
                                 <li>penyusunan rencana, pelaksanaan, pelestarian dan pengembangan hasil-hasil pembangunan secara partisipatif;</li>
                                 <li>penumbuhkembangan dan penggerak prakarsa, partisipasi, serta swadaya gotong royong masyarakat; dan</li>
                                 <li>penggali, pendayagunaan dan pengembangan potensi sumber daya alam serta keserasian lingkungan hidup.</li>
                                </ol>
                                <p align="center"><strong>DAFTAR NAMA PENGURUS&nbsp; LEMBAGA PEMBERDAYAAN MASYARAKAT</strong></p>
                                <p align="center"><strong>MASA JABATAN  s/d </strong></p>
                                <p align="center"><strong>DESA TENGKURAK KECAMATAN TIRTAYASA KABUPATEN SERANG</strong></p>
                                <table style="margin-left: auto; margin-right: auto;" border="1">
                                    <tbody>
                                        <tr>
                                            <td width="208">
                                             <p>NO</p>
                                            </td>
                                            <td width="208">
                                             <p>NAMA</p>
                                            </td>
                                            <td width="208">
                                             <p>JABATAN</p>
                                            </td>
                                            <td width="208">
                                             <p>ALAMAT</p>
                                            </td>
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