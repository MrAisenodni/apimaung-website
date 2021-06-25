@extends('layouts.user')

@section('title', 'Pemerintah Desa')

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
                <h2>Pemerintah Desa Tengkurak</h2>
                <ul class="breadcrumb">
                  <li><a href="{{ url('/') }}">home</a></li>
                  <li>pemerintah desa</li>
                </ul>
              </div>
            </div>
            
            <!-- News 1 -->
            <div class="artikel-konten clearfix"><p style="text-align: center;"><strong>SUSUNAN ORGANISASI DAN TATA KERJA PEMERINTAH DESA</strong></p>
              <p style="text-align: center;"><strong>DESA TENGKURAK KECAMATAN TIRTAYASA KABUPATEN SERANG </strong></p>
              <p>&nbsp;&nbsp;</p>
              <p style="text-align: justify;"><strong>Kepala Desa bertugas menyelenggarakan Pemerintahan Desa, melaksanakan pembangunan, pembinaan kemasyarakatan, dan pemberdayaan masyarakat. Untuk melaksanakan tugas Kepala Desa memiliki fungsi-fungsi sebagai berikut:</strong></p>
              <ol style="text-align: justify;">
              <li>Menyelenggarakan Pemerintahan Desa, seperti tata praja Pemerintahan, penetapan peraturan di desa, pembinaan masalah pertanahan, pembinaan ketentraman dan ketertiban, melakukan upaya perlindungan masyarakat, administrasi kependudukan, dan penataan dan pengelolaan wilayah.</li>
              <li>Melaksanakan pembangunan, seperti pembangunan sarana prasarana perdesaan, dan pembangunan bidang pendidikan, kesehatan.</li>
              <li>Pembinaan kemasyarakatan, seperti pelaksanaan hak dan kewajiban masyarakat, partisipasi masyarakat, sosial budaya masyarakat, keagamaan, dan ketenagakerjaan.</li>
              <li>Pemberdayaan masyarakat, seperti tugas sosialisasi dan motivasi masyarakat di bidang budaya, ekonomi, politik, lingkungan hidup, pemberdayaan keluarga, pemuda, olahraga, dan karang taruna.</li>
              <li>Menjaga hubungan kemitraan dengan lembaga masyarakat dan lembaga lainnya.</li>
              </ol>
              <p style="text-align: usti;">&nbsp;<strong>Sekretaris Desa berkedudukan sebagai unsur pimpinan Sekretariat Desa. Sekretaris Desa bertugas membantu Kepala Desa dalam bidang administrasi pemerintahan. Untuk melaksanakan tugas, Sekretaris Desa mempunyai fungsi:</strong></p>
              <ol style="text-align: justify;">
              <li>Melaksanakan urusan ketatausahaan seperti tata naskah, administrasi surat menyurat, arsip, dan ekspedisi.</li>
              <li>Melaksanakan urusan umum seperti penataan administrasi perangkat desa, penyediaan prasarana perangkat desa dan kantor, penyiapan rapat, pengadministrasian aset, inventarisasi, perjalanan dinas, dan pelayanan umum.</li>
              <li>Melaksanakan urusan keuangan seperti pengurusan administrasi keuangan, administrasi sumber-sumber pendapatan dan pengeluaran, verifikasi administrasi keuangan, dan admnistrasi penghasilan Kepala Desa, Perangkat Desa, BPD, dan lembaga pemerintahan desa lainnya.</li>
              <li>Melaksanakan urusan perencanaan seperti menyusun rencana anggaran pendapatan dan belanja desa, menginventarisir data-data dalam rangka pembangunan, melakukan monitoring dan evaluasi program, serta penyusunan laporan.</li>
              </ol>
              <p style="text-align: justify;"><strong>Kepala urusan berkedudukan sebagai unsur staf sekretariat. Kepala urusan bertugas membantu Sekretaris Desa dalam urusan pelayanan administrasi pendukung pelaksanaan tugas-tugas pemerintahan. Untuk melaksanakan tugas kepala urusan mempunyai fungsi:</strong></p>
              <ol style="text-align: justify;">
              <li>Kepala urusan tata usaha dan umum memiliki fungsi seperti melaksanakan urusan ketatausahaan seperti tata naskah, administrasi surat menyurat, arsip, dan ekspedisi, dan penataan administrasi perangkat desa, penyediaan prasarana perangkat desa dan kantor, penyiapan rapat, pengadministrasian aset, inventarisasi, perjalanan dinas, dan pelayanan umum.</li>
              <li>Kepala urusan keuangan memiliki fungsi seperti melaksanakan urusan keuangan seperti pengurusan administrasi keuangan, administrasi sumber-sumber pendapatan dan pengeluaran, verifikasi administrasi keuangan, dan admnistrasi penghasilan Kepala Desa, Perangkat Desa, BPD, dan lembaga pemerintahan desa lainnya.</li>
              <li>Kepala urusan perencanaan memiliki fungsi mengoordinasikan urusan perencanaan seperti menyusun rencana anggaran pendapatan dan belanja desa, menginventarisir data-data dalam rangka pembangunan, melakukan monitoring dan evaluasi program, serta penyusunan laporan.</li>
              </ol>
              <p style="text-align: justify;"><strong>Kepala Kewilayahan atau sebutan lainnya berkedudukan sebagai unsur satuan tugas kewilayahan yang bertugas membantu Kepala Desa dalam pelaksanaan tugasnya di wilayahnya. Untuk melaksanakan tugas Kepala Kewilayahan/Kepala Dusun memiliki fungsi:</strong></p>
              <ol style="text-align: justify;">
              <li>Pembinaan ketentraman dan ketertiban, pelaksanaan upaya perlindungan masyarakat, mobilitas kependudukan, dan penataan dan pengelolaan wilayah.</li>
              <li>Mengawasi pelaksanaan pembangunan di wilayahnya.</li>
              <li>Melaksanakan pembinaan kemasyarakatan dalam meningkatkan kemampuan dan kesadaran masyarakat dalam menjaga lingkungannya.</li>
              <li>Melakukan upaya-upaya pemberdayaan masyarakat dalam menunjang kelancaran penyelenggaraan pemerintahan dan pembangunan.</li>
              </ol>
              <p style="text-align: justify;"><strong>Kepala seksi berkedudukan sebagai unsur pelaksana teknis. Kepala seksi bertugas membantu Kepala Desa sebagai pelaksana tugas operasional. Untuk melaksanakan tugas Kepala Seksi mempunyai fungsi:</strong></p>
              <ol>
              <li style="text-align: justify;">Kepala seksi pemerintahan mempunyai fungsi melaksanakan manajemen tata praja Pemerintahan, menyusun rancangan regulasi desa, pembinaan masalah pertanahan, pembinaan ketentraman dan ketertiban, pelaksanaan upaya perlindungan masyarakat, kependudukan, penataan dan pengelolaan wilayah, serta pendataan dan pengelolaan Profil Desa.</li>
              <li style="text-align: justify;">Kepala seksi kesejahteraan mempunyai fungsi melaksanakan pembangunan sarana prasarana perdesaan, pembangunan bidang pendidikan, kesehatan, dan tugas sosialisasi serta motivasi masyarakat di bidang budaya, ekonomi, politik, lingkungan hidup, pemberdayaan keluarga, pemuda, olahraga, dan karang taruna.</li>
              <li style="text-align: justify;">Kepala seksi pelayanan memiliki fungsi melaksanakan penyuluhan dan motivasi terhadap pelaksanaan hak dan kewajiban masyarakat, meningkatkan upaya partisipasi masyarakat, pelestarian nilai sosial budaya masyarakat, keagamaan, dan ketenagakerjaan.</li>
              </ol>
              <p><strong>Sumber : PERMENDAGRI NOMOR 84 TAHUN 2015 TENTANG SUSUNAN ORGANISASI DAN TATA KERJA PEMERINTAH DESA</strong></p>
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