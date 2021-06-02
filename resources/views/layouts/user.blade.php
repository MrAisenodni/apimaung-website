<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="M_Adnan" />
<!-- Document Title -->
<title>@yield('title')</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}" type="image/x-icon">
<link rel="icon" href="{{ URL::asset('images/favicon.ico') }}" type="image/x-icon">

<!-- FontsOnline -->
<link href='{{ URL::asset('https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800') }}' rel='stylesheet' type='text/css'>
<link href='{{ URL::asset('https://fonts.googleapis.com/css?family=Montserrat:400,700') }}' rel='stylesheet' type='text/css'>
<link href='{{ URL::asset('https://fonts.googleapis.com/css?family=Alegreya+Sans:400,500,700,800,900,300,100') }}' rel='stylesheet' type='text/css'>

<!-- StyleSheets -->
<link rel="stylesheet" href="{{ URL::asset('http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">

<!-- Custom CSS -->
<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('rs-plugin/css/settings.css') }}" media="screen" />

<!-- JavaScripts -->
<script src="{{ URL::asset('js/vendors/modernizr.js') }}"></script>
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
              <li><i class="fa fa-phone"></i> +62 8588-8978-4451</li>
              <li><i class="fa fa-envelope"></i> fikrialfayed@gmail.com</li>
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
        <div class="logo"><a href="{{ URL('/') }}"><img src="{{ url('images/logo.png') }}" alt="logo" width="35%" height="35%"></a> </div>
        
        <!-- Nav -->
        <nav>
          <ul id="ownmenu" class="ownmenu">
            <li><a href="{{ URL('/') }}">PROFIL DESA</a>
              <ul class="dropdown">
                <li><a href="{{ URL('sejarah') }}">Sejarah Desa</a></li>
                <li><a href="{{ URL('wilayah') }}">Profil Wilayah Desa</a></li>
                <li><a href="{{ URL('peta') }}">Peta Desa</a></li>
              </ul>
            </li>
            <li><a href="{{ URL('pemerintah') }}">PEMERINTAH DESA</a>
              <ul class="dropdown">
                <li><a href="{{ URL('visimisi') }}">Visi dan Misi</a></li>
                <li><a href="{{ URL('pemda') }}">Pemerintah Desa</a></li>
                <li><a href="{{ URL('bpd') }}">Badan Permusyawaratan Desa</a></li>
              </ul>
            </li>
            <li><a href="{{ URL('lem') }}">LEM MAS</a>
              <ul class="dropdown">
                <li><a href="{{ URL('lpm') }}">LPM</a></li>
                <li><a href="{{ URL('karang') }}">Karang Taruna</a></li>
                <li><a href="{{ URL('pkk') }}">PKK</a></li>
              </ul>
            </li>
            <li><a href="{{ URL('desa') }}">DATA DESA</a>
              <ul class="dropdown">
                <li><a href="{{ URL('dapen') }}">Data Pendidikan</a></li>
                <li><a href="{{ URL('dapek') }}">Data Pekerjaan</a></li>
                <li><a href="{{ URL('dajen') }}">Data Jenis Kelamin</a></li>
                <li><a href="{{ URL('daper') }}">Data Perkawinan</a></li>
              </ul>
            </li>
            <li><a href="{{ URL('pengaduan') }}">PENGADUAN</a></li>
            <li><a href="{{ URL('transparan') }}">TRANSPARANSI KEUANGAN</a></li>
            
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
  
  <!-- Footer -->
  <footer>
    <!-- Footer Info -->
    <div class="footer-info">
      <div class="container">
        <div class="row"> 
          
          <!-- About -->
          <div class="col-md-4"> <a class="margin-bottom-30" href="{{ URL('/') }}"><img src="{{ url('images/logo-footer.png') }}" alt="logo" width="85%" height="85%"></a>
            <p>Aoluptas sit aspernatur aut odit aut fugit, sed elits quias consequuntur magni dolores eos qui ratione volust  luptatem sequi nesciunt. .</p>
            <ul class="personal-info">
              <li><i class="fa fa-map-marker"></i> 10th Floor,Washington Square Park, 
                NY, United States.</li>
              <li><i class="fa fa-envelope"></i> fikrialfayed@gmail.com</li>
              <li><i class="fa fa-phone"></i> +62 858 8978 4451 </li>
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
            <div class="quote">
              <form>
                <input class="form-control" type="text" placeholder="Nama Lengkap">
                <input class="form-control" type="text" placeholder="No HP">
                <textarea class="form-control" placeholder="Pesan"></textarea>
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
<script src="{{ URL::asset('js/vendors/jquery/jquery.min.js') }}"></script> 
<script src="{{ URL::asset('js/vendors/wow.min.js') }}"></script> 
<script src="{{ URL::asset('js/vendors/bootstrap.min.js') }}"></script> 
<script src="{{ URL::asset('js/vendors/own-menu.js') }}"></script> 
<script src="{{ URL::asset('js/vendors/flexslider/jquery.flexslider-min.js') }}"></script> 
<script src="{{ URL::asset('js/vendors/jquery.countTo.js') }}"></script> 
<script src="{{ URL::asset('js/vendors/jquery.isotope.min.js') }}"></script> 
<script src="{{ URL::asset('js/vendors/jquery.bxslider.min.js') }}"></script> 
<script src="{{ URL::asset('js/vendors/owl.carousel.min.js') }}"></script> 
<script src="{{ URL::asset('js/vendors/jquery.sticky.js') }}"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="{{ URL::asset('rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script> 
<script src="{{ URL::asset('js/main.js') }}"></script> 
</body>
</html>