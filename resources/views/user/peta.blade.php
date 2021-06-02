@extends('layouts.user')

@section('title', 'Peta Desa | E-Government Tengkurak')

@section('content')
  <!--======= SUB BANNER =========-->
  <section class="sub-banner">
    <img src="{{ url('images/bg/peta-subbg.jpg') }}" alt="Peta" width="100%" height="100%">
    <div class="container">
      <div class="position-center-center">
        <h2>Peta Desa</h2>
        <ul class="breadcrumb">
          <li><a href="{{ url('/') }}">home</a></li>
          <li>peta desa</li>
        </ul>
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Contact  -->
    <section class="contact-us light-gray-bg">
      <div class="container-fluid">
        <div class="row">
         <!-- MAP -->
          <div class="col-md-12">
            <div id="map" class="padding-20">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31744.538341151918!2d106.33324778626793!3d-5.985472772530961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41e554ecd051d3%3A0xc8d329aa7ae67622!2sTengkurak%2C%20Tirtayasa%2C%20Serang%2C%20Banten!5e0!3m2!1sid!2sid!4v1622615885651!5m2!1sid!2sid" width="100%" height="100%" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- End Content --> 
@endsection