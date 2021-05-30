@extends('layouts.user')

@section('title', '404 Page Not Found')

@section('content')
  <!-- Content -->
  <div id="content"> 
    <!-- Contact  -->
    <section class="contact-us padding-top-100 padding-bottom-100">
      <div class="container">
        <div class="text-center">
          <h3 class="font-normal text-uppercase font-alegreya">Maaf halaman tidak ditemukan</h3>
          <img class="img-responsive margin-top-80" src="images/404-number.png" alt="" > <br>
          <a href="{{ url('/') }}" class="btn btn-orange margin-top-100">GO TO HOME</a> </div>
      </div>
    </section>
  </div>
  <!-- End Content --> 
@endsection