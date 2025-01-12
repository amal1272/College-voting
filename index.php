<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
include("connect.php");
?>
<?php

$qu = "SELECT* from bsc";
$res = mysqli_query($con, $qu);
?>
<?php

$qu = "select * from ba";
$r = mysqli_query($con, $qu);
?>
<?php

$qu1 = "select * from bba";
$res1 = mysqli_query($con, $qu1);
?>
<?php

$qu2 = "select * from bsw";
$res2 = mysqli_query($con, $qu2);
?>
<?php

$qu3 = "select * from bcom";
$res3 = mysqli_query($con, $qu3);
?>
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SAHYAJYOTHI ARTS AND SCIENCE COLLEGE,KUMILY</title>
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- Template CSS -->
</head>

<body>
  <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
      
      <nav class="navbar navbar-expand-lg navbar-light">
        <h1><a class="navbar-brand" href="index.html">
            <span>SAHYA</span>JOTHI
          </a></h1>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa icon-expand fa-bars"></span>
          <span class="fa icon-close fa-times"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="regester.html">VOTE NOW</a>
            </li>
            <li>
              <a class="nav-link" href="http://localhost//mini/admin/index.php">Admin</a>
          </ul>
          </ul>
          <ul class="navbar-nav search-right mt-lg-0 mt-2">
            <li class="nav-item mr-3" title="Search"><a href="#search" class="btn search-search">
                <span style="color:var(--heading-color);" class="fa fa-search" aria-hidden="true"></span></a></li>
            <li class="nav-item"><a href="contact.html" class="btn btn-primary d-none d-lg-block btn-style mr-2">Contact
                Us</a></li>
          </ul>

          <!-- //toggle switch for light and dark theme -->
          <!-- search popup -->
          <div id="search" class="pop-overlay">
            <div class="popup">
              <form action="#" method="GET" class="d-sm-flex">
                <input type="search" placeholder="Search.." name="search" required="required" autofocus>
                <button type="submit">Search</button>
                <a class="close" href="#url">&times;</a>
              </form>
            </div>
          </div>
          <!-- /search popup -->
        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
      </nav>
    </div>
  </header>
  <!--/header-->
  <!-- main-slider -->
  <section class="w3l-main-slider position-relative" id="home">
    <div class="companies20-content">
      <div class="owl-one owl-carousel owl-theme">
        <div class="item">
          <li>
            <div class="slider-info banner-view bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg">
                    <p class="mt-5">"Welcome to Sahyajyothi arts and science college, kumily Online Voting Platform!
                      Your voice matters, and here is where you can make it heard. Join us in shaping the future of our college community by participating in our online elections and voting events. Let's engage, empower, and enact positive change together. Happy voting!"</p>
                    <div class="banner-buttons">
                      <a class="btn btn-style btn-primary" href="regester.html">VOTE NOW</a>
                      <a href="#small-dialog" class="popup-with-zoom-anim play-view">

                      </a>
                      <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                      <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                        <iframe src="https://player.vimeo.com/video/425349644" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>

        <!-- //banner-slider-->
        <!-- //bottom-grids -->

        <!-- //bottom-grids -->
        <!-- /content-3-->
        <section class="w3l-content-3">
          <!-- /content-3-main-->
          <div class="content-3-mian py-5">
            <div class="container py-lg-5">
              <div class="content-info-in row">
                <div class="col-lg-6">
                  <img src="assets/images/OIG2.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5 about-right-faq align-self  pl-lg-5">
                  <div class="title-content text-left mb-2">
                    <h3 class="hny-title"> Purpose and Vision</h3>
                  </div>
                  <p class="mt-3">Our platform serves as the cornerstone of student governance, facilitating transparent and inclusive elections for various
                    leadership positions, initiatives, and campus-wide decisions. Whether it's electing student government officials,
                    choosing club leaders, or voting on critical campus policies, our goal is to foster a culture of active engagement and representation.</p>
                  <a href="about.html" class="btn btn-style btn-primary mt-md-5 mt-4">Read More</a>
                </div>
              </div>
            </div>
        </section>
        <!-- //content-3-->
        <!-- /features-4 -->
        <section class="features-4">
          <div class="features4-block py-5">
            <div class="container py-lg-4">
              <div class="title-content text-center mb-lg-5 mt-4">

                <h3 class="hny-title">CANDIDATES</h3>
                <div class="container py-md-5 py-4">



                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>
  <!--//features-4 -->

  <!-- /specification-6-->

  <!-- //specification-6-->

  <!-- middle -->

  <!-- //middle -->
  <!--/testimonials-->

  <!--//testimonials-->

  <!-- footer-66 -->

  <!--//footer-66 -->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <!-- disable body scroll which navbar is in active -->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });

      $('.popup-with-move-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
      });
    });
  </script>
  <!--//-->
  <script src="assets/js/theme-change.js"></script>
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for banner slider-->
  <script>
    $(document).ready(function() {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <!-- script for owlcarousel -->
  <script>
    $(document).ready(function() {
      $('.owl-testimonial').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
            nav: false
          }
        }
      })
    })
  </script>
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function() {
      $('.navbar-toggler').click(function() {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!-- stats number counter-->
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function() {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>