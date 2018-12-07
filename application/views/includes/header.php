<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>WebCreintors</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="<?php echo base_url()?>assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="<?php echo base_url()?>assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="<?php base_url()?>assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="<?php base_url()?>assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="<?php base_url()?>assets/css/animate.css"/> 
    <!-- Progress bar  -->
    <link rel="stylesheet" type="text/css" href="<?php base_url()?>assets/css/bootstrap-progressbar-3.3.4.css"/> 
     <!-- Theme color -->
    <link id="switcher" href="<?php base_url()?>assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Lato for Title -->
    <link href='//fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
 
      <!-- Start signup section -->
  <!-- End login modal window -->

  <!-- BEGIN MENU -->
  <section id="menu-area">      
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->

          <!-- TEXT BASED LOGO -->             
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="<?php echo base_url()?>"> <img src="<?php echo base_url()?>assets/images/logo233.png" height="70" width="70"alt="img" style="padding-bottom: 20px;"> </a> -->
          <a class="navbar-brand title-color" href="<?php echo base_url()?>"><b>WebCreintors</b></a> 
           <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li><a href="<?php echo base_url()?>service">Service</a></li>
            <li><a href="<?php echo base_url()?>company">Company</a></li>
           <!--  <li><a href="<?php echo base_url()?>works">Works</a></li> -->
            <li><a href="<?php echo base_url()?>portfolio">Portfolio</a></li>
            <li><a href="<?php echo base_url()?>contact">Contact</a></li>           
            <li><a href="https://docs.google.com/presentation/d/e/2PACX-1vQb2FkBJoYh0nDG5TVgguZUb4JijA3-J-tIhFTgbtk4lOikUw2opOxsEKSFt75GoM5VnnbBHf6beDKo/embed?start=true&loop=true&delayms=3000" frameborder="0" width="100%" height="100%" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" target="blank">Presentation</a></li>
          </ul>                     
        </div><!--/.nav-collapse -->
        <!-- <div>
          <script>
              (function() {
                var cx = '007245599005083080362:rknwqx_frx4';
                var gcse = document.createElement('script');
                gcse.type = 'text/javascript';
                gcse.async = true;
                gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(gcse, s);
              })();
          </script>
      <gcse:search></gcse:search>
        </div> -->
       <!--  <a href="#" id="search-icon">
          <i class="fa fa-search">            
          </i>
        </a> -->
      </div>     
    </nav>
  </section>
  <div style="padding-bottom: 50px">
  </div>
  <!-- END MENU --> 

  <?php
    if(isset($keep_slider)){
  ?>
  <!-- Start slider -->
  <section id="slider">
    <div class="main-slider">
      <div class="single-slide">
        <img src="<?php echo base_url()?>assets/images/slider-1.jpg" alt="img">
        <div class="slide-content">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="slide-article">
                  <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Web Application Development</h1>
                  <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s"></p>
                  <a class="read-more-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" href="<?php echo base_url()?>service">Read More</a>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="slider-img wow fadeInUp" style="padding-top: 50px;">
                  <!-- <img src="<?php echo base_url()?>assets/images/person1.png" alt="business man"> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="single-slide">
        <img src="<?php echo base_url()?>assets/images/slider-1.jpg" alt="img">
        <div class="slide-content">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="slide-article">
                  <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Mobile Application Development</h1>
                  <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s"></p>
                  <a class="read-more-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" href="<?php echo base_url()?>service">Read More</a>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="slider-img wow fadeInUp" style="padding-top: 150px;">
                  <!-- <img src="<?php echo base_url()?>assets/images/person2.png" alt="business man"> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="single-slide">
        <img src="<?php echo base_url()?>assets/images/slider-1.jpg" alt="img">
        <div class="slide-content">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="slide-article">
                  <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">ERP Implementation</h1>
                  <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s"></p>
                  <a class="read-more-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" href="<?php echo base_url()?>service">Read More</a>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="slider-img wow fadeInUp" style="padding-top: 60px;">
                 <!--  <img src="<?php echo base_url()?>assets/images/person3.png" alt="business man"> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>          
    </div>
  </section>
  <!-- End slider -->
  <?php
  }
  ?>