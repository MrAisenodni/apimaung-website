@extends('layouts.user');

@section('title', 'Sejarah Desa | E-Government');

@section('content')
  <!-- Content -->
  <div id="content"> 
    
    <!-- Intro -->
    <section class="light-gray-bg solution padding-top-100 padding-bottom-100">
      <div class="container"> 
        
        <!-- Tittle -->
        <div class="heading-block text-center margin-bottom-80">
          <h2>Welcome To Infinity Solution</h2>
          <span>Do you want to improve the online visibility of your brand and traffic to your website?</span> </div>
        <ul class="row text-center">
          
          <!-- Web Analytics -->
          <li class="col-md-3"> <img src="images/icon-1.png" alt="">
            <h6>Web Analytics</h6>
            <p>Duis posuere blandit orci sed tinc in 
              Curabitur porttitor nisi ac nunc 
              fringilla nisl blandit.</p>
          </li>
          
          <!-- Keyword Targeting -->
          <li class="col-md-3"> <img src="images/icon-2.png" alt="">
            <h6>Keyword Targeting</h6>
            <p>Duis posuere blandit orci sed tinc in 
              Curabitur porttitor nisi ac nunc 
              fringilla nisl blandit.</p>
          </li>
          
          <!-- Technical Service -->
          <li class="col-md-3"> <img src="images/icon-3.png" alt="">
            <h6>Technical Service</h6>
            <p>Duis posuere blandit orci sed tinc in 
              Curabitur porttitor nisi ac nunc 
              fringilla nisl blandit.</p>
          </li>
          
          <!-- Support Center -->
          <li class="col-md-3"> <img src="images/icon-4.png" alt="">
            <h6>Support Center</h6>
            <p>Duis posuere blandit orci sed tinc in 
              Curabitur porttitor nisi ac nunc 
              fringilla nisl blandit.</p>
          </li>
        </ul>
      </div>
    </section>
    
    <!-- Google Front Page -->
    <section class="front-page padding-top-100 padding-bottom-100">
      <div class="container">
        <div class="row">
          <div class="col-md-6"> <img class="img-responsive margin-top-30" src="images/ipad.jpg" alt=" "> </div>
          <div class="col-md-6"> 
            <!-- Tittle -->
            <div class="heading-block text-left margin-bottom-20">
              <h2>Get Appear On the Front
                Page of Google!</h2>
              <p>Monitor keyword rankings daily to strategise and forecast your digital marketing efforts. Track tens of thousands of keywords and manage valuable keyterms with easy-to-edit labels. intalyse Rankings also allows you to keep an eye on the  with  for comparison with your own keyword performance.</p>
            </div>
            
            <!-- List Style -->
            <ul class="list-style">
              <li>
                <p><img src="images/list-icon-1.png" alt=""> We deliver Top Rankings. </p>
              </li>
              <li>
                <p><img src="images/list-icon-2.png" alt=""> High customer retention rate. </p>
              </li>
              <li>
                <p><img src="images/list-icon-3.png" alt=""> We always return e-mails and calls within one business day. </p>
              </li>
              <li>
                <p><img src="images/list-icon-4.png" alt=""> Afordable pricing offers. </p>
              </li>
            </ul>
            
            <!-- Buttons --> 
            <a href="#." class="btn margin-top-20">Learn More</a> <a href="#." class="btn btn-orange margin-left-30 margin-top-20">Get a quote</a> </div>
        </div>
      </div>
    </section>
    
    <!-- Our Clients  -->
    <section class="clients padding-bottom-100 padding-top-100">
      <div class="container"> 
        
        <!-- Tittle -->
        <div class="heading-block white-text text-center margin-bottom-80">
          <h2>Our Clients </h2>
          <span class="intro-style">Do you want to improve the online visibility of your brand and 
          drive more relevant traffic to your website? </span> </div>
        
        <!-- Clients Images -->
        <ul class="col-5 text-center">
          <li> <img class="img-responsive" src="images/client-img-1.png" alt=""></li>
          <li> <img class="img-responsive" src="images/client-img-2.png" alt=""></li>
          <li> <img class="img-responsive" src="images/client-img-3.png" alt=""></li>
          <li> <img class="img-responsive" src="images/client-img-4.png" alt=""></li>
          <li> <img class="img-responsive" src="images/client-img-5.png" alt=""></li>
        </ul>
      </div>
    </section>
    
    <!-- Team  -->
    <section class="team padding-bottom-100 padding-top-100">
      <div class="container"> 
        
        <!-- Tittle -->
        <div class="heading-block text-center margin-bottom-80">
          <h2>Meet Our Creative Team </h2>
          <span class="intro-style">Do you want to improve the online visibility of your brand and 
          drive more relevant traffic to your website? </span> </div>
        
        <!-- Team Row -->
        <ul class="row">
        
        <!-- Team -->
          <li class="col-md-4">
            <article> <img class="img-responsive" src="images/team-1.jpg" alt="" >
              <div class="team-info">
                <h5 class="">Paul Walker</h5>
                <p class="font-italic">Front End Developer</p>
                <a href="#." class="cont"> <i class="fa fa-envelope-o"></i> </a> </div>
            </article>
          </li>
          
          <!-- Team  -->
          <li class="col-md-4">
            <article> <img class="img-responsive" src="images/team-2.jpg" alt="" >
              <div class="team-info">
                <h5 class="">Paul Walker</h5>
                <p class="font-italic">Front End Developer</p>
                <a href="#." class="cont"> <i class="fa fa-envelope-o"></i> </a> </div>
            </article>
          </li>
          
          <!-- Team  -->
          <li class="col-md-4">
            <article> <img class="img-responsive" src="images/team-3.jpg" alt="" >
              <div class="team-info">
                <h5 class="">Paul Walker</h5>
                <p class="font-italic">Front End Developer</p>
                <a href="#." class="cont"> <i class="fa fa-envelope-o"></i> </a> </div>
            </article>
          </li>
        </ul>
      </div>
    </section>
  </div>
  <!-- End Content --> 
@endsection