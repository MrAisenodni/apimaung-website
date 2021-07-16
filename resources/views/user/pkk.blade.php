@extends('layouts.user')

@section('title', 'PKK')

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
                <h2>PKK (Pembinaan Kesejahteraan Keluarga)</h2>
                <ul class="breadcrumb">
                  <li><a href="{{ url('/') }}">home</a></li>
                  <li>pkk</li>
                </ul>
              </div>
            </div>

            <!-- News 1 -->
            <article class="margin-bottom-50"> <a href="#.">  </a>
              <div class="news-detail">
                <div class="row">
                  <div class="col-md-11"> <a href="#.">PKK</a>
                    <p>(Pembinaan Kesejahteraan Keluarga), adalah organisasi kemasyarakatan yang memberdayakan wanita untuk turut berpartisipasi dalam pembangunan Indonesia. PKK terkenal akan "10 program pokok"-nya.
                      <br> <br>
                      Desa Tengakurak merupakan bagian dari kecamatan Tirtayasa yang terletak sekitar 4,5 Km dari kantor kecamatan Tirtayasa atau sekitar 38 Km dari pusat kota Serang. Desa Tengkurak terletak didekat muara Sungai Ciujung.
                      10 Program Pokok PKK pada hakekatnya merupakan kebutuhan dasar manusia, yaitu : Penghayatan dan Pengamalan Pancasila, Gotong Royong, Pangan, Sandang, Perumahan dan Tatalaksana Rumah Tangga, Pendidikan dan Ketrampilan, Kesehatan, Pengembangan Kehidupan, Berkoperasi, Kelestarian Lingkungan Hidup, Perencanaan Sehat
                    <p style="text-align: center;">&nbsp;</p>
                    <p style="text-align: center;"><strong>SUSUNAN PENGURUS</strong></p>
                    <p style="text-align: center;"><strong>TIM PENGGERAK PKK DESA TENGKURAK</strong></p>
                    <p style="text-align: center;"><strong>TA </strong></p>
                    <p style="text-align: center;">&nbsp;</p>
                    <table style="margin-left: auto; margin-right: auto;" border="1">
                     <tbody>
                      <tr>
                       <td width="208">
                        <p>JABATAN</p>
                       </td>
                       <td width="208">
                        <p>NAMA</p>
                       </td>
                       <td width="208">
                        <p>ALAMAT</p>
                       </td>
                      </tr>
                     </tbody>
                    </table>
                    <p style="text-align: center;">&nbsp;</p>
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