<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Afiani Maulidiyah" />
<!-- Document Title -->
<title>@yield('title') | E-Government Tengkurak</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ url('images/favicon.ico') }}" type="image/x-icon">
<link rel="icon" href="{{ url('images/favicon.ico') }}" type="image/x-icon">

<!-- FontsOnline -->
<link href='{{ url('https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800') }}' rel='stylesheet' type='text/css'>
<link href='{{ url('https://fonts.googleapis.com/css?family=Montserrat:400,700') }}' rel='stylesheet' type='text/css'>
<link href='{{ url('https://fonts.googleapis.com/css?family=Alegreya+Sans:400,500,700,800,900,300,100') }}' rel='stylesheet' type='text/css'>

<!-- StyleSheets -->
<link rel="stylesheet" href="{{ url('http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ url('css/bootstrap/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ url('css/main.css') }}">
<link rel="stylesheet" href="{{ url('css/style.css') }}">
<link rel="stylesheet" href="{{ url('css/responsive.css') }}">

<!-- Custom CSS -->
<link rel="stylesheet" href="{{ url('css/custom.css') }}">

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="{{ url('rs-plugin/css/settings.css') }}" media="screen" />

<!-- JavaScripts -->
<script src="{{ url('js/vendors/modernizr.js') }}"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- LOADER ===========================================-->
<div id="loader">
  <div class="loader">
    <div class="position-center-center">
      <div id="preloader6"> <span></span> <span></span> <span></span> <span></span> </div>
    </div>
  </div>
</div>

<!-- Page Wrapper -->
<div id="wrap"> 
  
  <!-- Top bar -->
  <div class="container">
    <div class="row">
      <div class="col-md-2 noo-res"></div>
      <div class="col-md-10">
        <div class="top-bar">
          <div class="col-md-3">
            <ul class="social_icons">
              <li><a href="#."><i class="fa fa-facebook"></i></a></li>
              <li><a href="#."><i class="fa fa-twitter"></i></a></li>
              <li><a href="#."><i class="fa fa-google"></i></a></li>
            </ul>
          </div>
          
          <!-- Social Icon -->
          <div class="col-md-9">
            <ul class="some-info font-montserrat">
              <li><i class="fa fa-phone"></i> (021)</li>
              <li><i class="fa fa-envelope"></i> desatengkurak@gmail.com</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Header -->
  <header class="header coporate-header">
    <div class="sticky">
      <div class="container">
        <div class="logo"><a href="{{ url('/') }}"><img src="{{ url('images/logo.png') }}" alt="logo" width="35%" height="35%"></a> </div>
        
        <!-- Nav -->
        <nav>
          <ul id="ownmenu" class="ownmenu">
            <li><a href="{{ url('/') }}">PROFIL DESA</a>
              <ul class="dropdown">
                <li><a href="{{ url('sejarah') }}">Sejarah Desa</a></li>
                <li><a href="{{ url('wilayah') }}">Profil Wilayah Desa</a></li>
                <li><a href="{{ url('peta') }}">Peta Desa</a></li>
              </ul>
            </li>
            <li><a href="{{ url('pemda') }}">PEMERINTAH DESA</a>
              <ul class="dropdown">
                <li><a href="{{ url('pemda') }}">Pemerintah Desa</a></li>
                <li><a href="{{ url('visimisi') }}">Visi dan Misi</a></li>
                <li><a href="{{ url('bpd') }}">Badan Permusyawaratan Desa</a></li>
              </ul>
            </li>
            {{-- <li><a href="{{ url('lem') }}">LEM MAS</a>
              <ul class="dropdown">
                <li><a href="{{ url('lpm') }}">LPM</a></li>
                <li><a href="{{ url('karangtaruna') }}">Karang Taruna</a></li>
                <li><a href="{{ url('pkk') }}">PKK</a></li>
              </ul>
            </li> --}}
            <li><a href="#">DATA DESA</a>
              <ul class="dropdown">
                <li><a href="{{ url('dapen') }}">Data Pendidikan</a></li>
                <li><a href="{{ url('dapek') }}">Data Pekerjaan</a></li>
                <li><a href="{{ url('dajen') }}">Data Jenis Kelamin</a></li>
                <li><a href="{{ url('daper') }}">Data Perkawinan</a></li>
              </ul>
            </li>
            <li><a href="{{ url('pengaduan/create') }}">PENGADUAN</a></li>
            {{-- <li><a href="{{ url('transparan') }}">TRANSPARANSI KEUANGAN</a></li> --}}
            
            <!--======= SEARCH ICON =========-->
            <li class="search-nav right"><a href="#."><i class="fa fa-search"></i></a>
              <ul class="dropdown">
                <li>
                  <form>
                    <input type="search" class="form-control" placeholder="Enter Your Keywords..." required>
                    <button type="submit"> SEARCH </button>
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <!-- End Header --> 
  
  @yield('content')
  @yield('sidebar')
  
  <!-- Footer -->
  <footer>
    <!-- Footer Info -->
    <div class="footer-info">
      <div class="container">
        <div class="row"> 
          
          <!-- About -->
          <div class="col-md-4"> <a class="margin-bottom-30" href="{{ URL('/') }}"><img src="{{ url('images/logo-footer.png') }}" alt="logo" width="85%" height="85%"></a>
            <p>Bismillah bisa menyelesaikan Skripsi tepat waktu dan dosen pengujinya tidak memberikan revisi yang memberatkan saya Aamiin.</p>
            <ul class="personal-info">
              <li><i class="fa fa-map-marker"></i> Desa Tengkurak, Tirtayasa, Benten.</li>
              <li><i class="fa fa-envelope"></i> desatengkurak@gmail.com</li>
              <li><i class="fa fa-phone"></i> (021)</li>
            </ul>
          </div>
          
          <!-- Service provided -->
          <div class="col-md-4">
            <h6>Memberikan Pelayanan</h6>
            <ul class="links">
              <li><a href="#.">Layanan Mandiri</a></li>
              <li><a href="#.">Pengaduan Online</a></li>
              <li><a href="#.">Surat Online</a></li>
              <li><a href="#.">Kritik dan Saran</a></li>
            </ul>
          </div>
          
          <!-- Quote -->
          <div class="col-md-4">
            <h6>Kritik dan Saran</h6>
            @if (session('status'))
              <div class="m-3 alert alert-success">
                {{ session('status') }}
              </div>
            @endif
            <div class="quote">
              <form method="POST" action="/kritiksaran">
                @csrf
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <input class="form-control @error('nama') is-invalid @enderror" type="text" placeholder="Nama Lengkap" name="nama">
                @error('no_hp')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <input class="form-control @error('no_hp') is-invalid @enderror" type="text" placeholder="No HP" name="no_hp">
                @error('pesan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <textarea class="form-control @error('pesan') is-invalid @enderror" placeholder="Pesan" name="pesan"></textarea>
                <button type="submit" class="btn btn-orange">KIRIM</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Rights -->
    <div class="rights">
      <div class="container">
        <p>Copyright © 2021 E-Government Tengkurak. All Rights Reserved.</p>
      </div>
    </div>
  </footer>
</div>
<!-- End Page Wrapper --> 

<!-- JavaScripts --> 
<script src="{{ url('js/vendors/jquery/jquery.min.js') }}"></script> 
<script src="{{ url('js/vendors/wow.min.js') }}"></script> 
<script src="{{ url('js/vendors/bootstrap.min.js') }}"></script> 
<script src="{{ url('js/vendors/own-menu.js') }}"></script> 
<script src="{{ url('js/vendors/flexslider/jquery.flexslider-min.js') }}"></script> 
<script src="{{ url('js/vendors/jquery.countTo.js') }}"></script> 
<script src="{{ url('js/vendors/jquery.isotope.min.js') }}"></script> 
<script src="{{ url('js/vendors/jquery.bxslider.min.js') }}"></script> 
<script src="{{ url('js/vendors/owl.carousel.min.js') }}"></script> 
<script src="{{ url('js/vendors/jquery.sticky.js') }}"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="{{ url('rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script> 
<script type="text/javascript" src="{{ url('rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script> 
<script src="{{ url('js/main.js') }}"></script> 
</body>
</html>