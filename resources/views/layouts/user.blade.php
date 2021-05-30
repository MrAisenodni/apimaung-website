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
        <div class="logo"><a href="{{ URL('/') }}"><img src="images/logo.png" alt=""></a> </div>
        
        <!-- Nav -->
        <nav>
          <ul id="ownmenu" class="ownmenu">
            <li class="active"><a href="{{ URL('/') }}">BERANDA</a></li>
            <li><a href="{{ URL('/') }}">TENTANG KAMI</a>
              <ul class="dropdown">
                <li><a href="{{ URL('sejarah') }}">SEJARAH DESA</a></li>
                <li><a href="{{ URL('profil') }}">PROFIL WILAYAH DESA</a></li>
                <li><a href="{{ URL('peta') }}">PETA DESA</a></li>
              </ul>
            </li>
            <li><a href="{{ URL('pemerintah') }}">PEMERINTAH DESA</a></li>
            <li><a href="{{ URL('lem') }}">LEM MAS</a></li>
            <li><a href="{{ URL('desa') }}">DATA DESA</a></li>
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
    <div class="container">
      <div class="row">
        <div class="col-md-6 padding-top-50"> 
          
          <!-- News Letter -->
          <div class="news-letter">
            <h6>News Letter</h6>
            <form>
              <input type="email" placeholder="Enter your email..." >
              <button type="submit"><i class="fa fa-envelope-o"></i></button>
            </form>
          </div>
        </div>
        
        <!-- Folow Us -->
        <div class="col-md-6 padding-top-50">
          <div class="news-letter">
            <h6>Follow us</h6>
            <ul class="social_icons pull-left margin-left-50 margin-top-10">
              <li><a href="#."><i class="fa fa-facebook"></i></a></li>
              <li><a href="#."><i class="fa fa-twitter"></i></a></li>
              <li><a href="#."><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#."><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#."><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#."><i class="fa fa-skype"></i></a></li>
              <li><a href="#."><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Footer Info -->
    <div class="footer-info">
      <div class="container">
        <div class="row"> 
          
          <!-- About -->
          <div class="col-md-4"> <img class="margin-bottom-30" src="images/logo-footer.png" alt="" >
            <p>Aoluptas sit aspernatur aut odit aut fugit, sed elits quias consequuntur magni dolores eos qui ratione volust  luptatem sequi nesciunt. .</p>
            <ul class="personal-info">
              <li><i class="fa fa-map-marker"></i> 10th Floor,Washington Square Park, 
                NY, United States.</li>
              <li><i class="fa fa-envelope"></i> Support@domain.com</li>
              <li><i class="fa fa-phone"></i> (004)+ 124 45 78 678 </li>
            </ul>
          </div>
          
          <!-- Service provided -->
          <div class="col-md-4">
            <h6>Service provided</h6>
            <ul class="links">
              <li><a href="#.">SEO Services</a></li>
              <li><a href="#.">Pay per click</a></li>
              <li><a href="#.">Social Media</a></li>
              <li><a href="#.">Web Analytics</a></li>
              <li><a href="#.">Web Developement</a></li>
              <li><a href="#.">Content Management</a></li>
              <li><a href="#.">Blog Management</a></li>
              <li><a href="#.">Virtual Marketing</a></li>
              <li><a href="#.">Email Marketing</a></li>
              <li><a href="#.">Keyword Analytics</a></li>
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
        <p>Copyright © 2021 Posyandu. All Rights Reserved.</p>
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