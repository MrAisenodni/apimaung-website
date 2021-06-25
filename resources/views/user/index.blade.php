@extends('layouts.user')

@section('title', 'Beranda')

@section('content')   
  <!-- Content -->
  <div id="content"> 
    
    <!-- Infinity Solution -->
    <section class="light-gray-bg solution padding-top-100 padding-bottom-100">
      <div class="container"> 
        
        <!-- Tittle -->
        <div class="heading-block text-center margin-bottom-80">
          <h2>Selamat Datang di E-Government Tengkurak</h2>
          <span>E-Government Tengkurak merupakan sebuah wadah yang memberikan pelayanan terpadu kepada masyarakat di Desa Tengkurak Kabupaten Serang, Banten</span> 
        </div>
        <ul class="row text-center">
          
          <!-- Layanan Mandiri -->
          <li class="col-md-3"> <img src="{{ url('images/services/mandiri.png') }}" alt="Layanan Mandiri" width="100px" height="100px">
            <h6>Layanan Mandiri</h6>
            <p>Diberikan kepada masyarakat
              di Desa Tengkurak untuk memberikan
              pengaduan terhadap layanan yang
              diberikan oleh Pemerintah.
            </p>
          </li>
          
          <!-- Pengaduan Online -->
          <li class="col-md-3"> <img src="{{ url('images/services/complaint.png') }}" alt="Pengaduan Online" width="100px" height="100px">
            <h6>Pengaduan Online</h6>
            <p>Memudahkan masyarakat mengirimkan 
              berbagai keluhan terkait pelayanan 
              yang diberikan oleh Pemerintah.</p>
          </li>
          
          <!-- Surat Online -->
          <li class="col-md-3"> <img src="{{ url('images/services/mail.png') }}" alt="Surat Online" width="100px" height="100px">
            <h6>Surat Online</h6>
            <p>Layanan pembuatan surat untuk
              kebutuhan administrasi masyarakat 
              secara online.</p>
          </li>
          
          <!-- Kritik dan Saran -->
          <li class="col-md-3"> <img src="{{ url('images/services/chat.png') }}" alt="Kritik dan Saran" width="100px" height="100px">
            <h6>Kritik dan Saran</h6>
            <p>Memberikan wadah kepada masyarakat
              untuk menyampaikan aspirasi demi
              kemajuan desa.</p>
          </li>
        </ul>
      </div>
    </section>
    
    <!-- Google Front Page -->
    <section class="front-page padding-top-100 padding-bottom-100">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- End Content --> 
@endsection