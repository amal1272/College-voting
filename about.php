<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
include("connect.php");
?>
<?php

$qu= "SELECT* from bsc";
$res = mysqli_query($con,$qu);
?>
<?php

$qu= "select * from ba";
$r= mysqli_query($con,$qu);
?>
<?php

$qu1= "select * from bba";
$res1 = mysqli_query($con,$qu1);
?>
<?php

$qu2= "select * from bsw";
$res2 = mysqli_query($con,$qu2);
?>
<?php

$qu3= "select * from bcom";
$res3= mysqli_query($con,$qu3);
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

<d>
  <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        
        <h1><a class="navbar-brand" href="index.html">
            <span>SAHYA</span>JYOTHI
          </a></h1>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa icon-expand fa-bars"></span>
          <span class="fa icon-close fa-times"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Home </a>
            </li>
            <li class="nav-item active">
              <a  class="nav-link" href="about.php">About</a>
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
                <span class="fa fa-search" aria-hidden="true"></span></a></li>
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
   <!-- about breadcrumb -->
   <section class="w3l-about-breadcrumb position-relative text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-lg-5 py-3">
        <h2 class="title">About Us</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-angle-double-right mx-2" aria-hidden="true"></span> About </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
  <!-- /content-6-->
	<section class="w3l-content-6">
		<!-- /content-6-main-->
		<div class="content-6-mian py-5">
			<div class="container py-lg-5">
				<div class="content-info-in row">
					<div class="col-lg-6">
						<img src="assets/images/Designer (1).png" alt="" class="img-fluid">
					</div>
					<div class="col-lg-6 mt-lg-0 mt-5 about-right-faq align-self  pl-lg-4">
						<div class="title-content text-left mb-2">
							<h6 class="sub-title">About ONLINE VOTING</h6>
							<h3 class="hny-title">Voting System.</h3>
						</div>
						<p class="mt-3">Voting System: A secure electronic voting system that allows students to cast their votes online. 
              This system should be designed to prevent fraud and ensure the integrity of the election process..</p>
						<a href="about.html" class="btn btn-style btn-primary mt-4">Read More</a>
					</div>
					<div class="col-lg-6 mt-5 about-right-faq align-self order2">
						<div class="title-content text-left mb-2">
							<h3 class="hny-title">Results Reporting:</h3>
						</div>
						<p class="mt-3">Transparent reporting of election results, 
              including the number of votes each candidate received and the outcome of the election.</p>
						<a href="about.html" class="btn btn-style btn-primary mt-4">Read More</a>
					</div>
					<div class="col-lg-6 mt-5 pl-lg-4">
						<img src="assets/images/Designer.png" alt="" class="img-fluid">
					</div>


				</div>
			</div>
	</section>
	<!-- //content-6-->
	<!-- /w3l-content-4 -->
	<section class="w3l-content-4">
		<!-- /content-6-section -->
		<div class="content-4-main py-5">
			<div class="container py-lg-4">
				<div class="content-info-in row">

					<div class="content-right col-lg-6">
						<img src="assets/images/Designer (2).png" class="img-fluid" alt="">
					</div>
					<div class="content-left col-lg-6 pl-lg-5">
						
						<h3 class="hny-title">
							Security Measures: 
</h3>
						<p class="mt-3">Implementation of robust security measures to protect the integrity of the voting process and prevent hacking or tampering. </p>

						<div class="content-4-bottom">
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //content-6-section -->

	<!--//content-5-->
	<div class="w3l-content-5 py-5">
		<div class="container py-lg-4">
			<div class="row content-5-grids">
				<div class="col-lg-4 col-md-6 content-5-one">
					<div class="content5-gd-ingf">
						<div class="icon-holder mb-3">
							<span class="fa fa-users service-icon" aria-hidden="true"></span>
						</div>
						<h4>Accessibility:</h4>
						<p>Ensuring that the website is accessible to all students, including those with disabilities, by adhering to web accessibility standards.</p>
						<!-- <a href="services.html" class="btn btn-style btn-primary mt-4">Read More</a> -->
					</div>
				</div>
				<div class="col-lg-4 col-md-6 content-5-one">
					<div class="content5-gd-ingf">
						<div class="icon-holder mb-3">
							<span class="fa fa-heart-o service-icon" aria-hidden="true"></span>
						</div>
						<h4>Voting Rules and Regulations</h4>
						<p>Clear guidelines outlining who is eligible to vote, how the voting process works, and any other relevant rules and regulations.</p>
						<!-- <a href="services.html" class="btn btn-style btn-primary mt-4">Read More</a> -->
					</div>
				</div>
				<div class="col-lg-4 col-md-6 content-5-one">
			

			</div>
		</div>
	</div>
	<!--//content-5-->

	<!-- team -->
	<section class="w3l-team-main py-5" id="team">
		< class="container py-lg-4">
			<div class="title-content text-center mb-lg-5 mb-4">
				<h3 class="hny-title">CANDIDATES</h3>
			</div>
      <div style="background:#d90429;margin-bottom: 7px;border-radius:7px; text-align:center">
      <h1 >B.Sc</h1> 
      </div> 	
			<div class="row inner-sec-w3layouts-w3pvt-lauinfo">
           <?php
      while($row=mysqli_fetch_assoc($res)){
    ?>
				<div class="col-md-3 col-6">
     
					<div class="team-grids text-center">
          
	<img src="<?php echo "admin/image/".$row['image']?>"style="width:300px;height:200px;" class="img-fluid" alt="">
						<div class="team-info">
							<div class="caption">
								<h4><?php echo $row['name']?></h4>
                <h4><?php echo $row['dep']?></h4>
							</div>
						</div>
         
					</div>
         
				</div>
        <?php }
          ?>		
			</div>
      <div style="background:#d90429;margin-bottom: 7px;margin-top:7px;border-radius:7px; text-align:center">
      <h1 >English</h1> 
      </div> 	
      <div style="margin-top: 40px;" class="row inner-sec-w3layouts-w3pvt-lauinfo">
      <?php
      while($ro=mysqli_fetch_assoc($r)){
    ?>
				<div class="col-md-3 col-6">
     
					<div class="team-grids text-center">
          
	<img src="<?php echo "admin/image/".$ro['image']?>"style="width:300px;height:200px;" class="img-fluid" alt="">
						<div class="team-info">
							<div class="caption">
								<h4><?php echo $ro['name']?></h4>
                <h4><?php echo $ro['dep']?></h4>
							</div>
						</div>
         
					</div>
         
				</div>
        <?php }
          ?>		
			</div>
      
      <div style="background:#d90429;margin-bottom: 7px;margin-top:7px;border-radius:7px; text-align:center">
      <h1 >BBA</h1> 
      </div> 
      <div class="row inner-sec-w3layouts-w3pvt-lauinfo">
      <?php
      while($ro=mysqli_fetch_assoc($res1)){
    ?>
				<div class="col-md-3 col-6">
     
					<div class="team-grids text-center">
          
	<img src="<?php echo "admin/image/".$ro['image']?>"style="width:300px;height:200px;" class="img-fluid" alt="">
						<div class="team-info">
							<div class="caption">
								<h4><?php echo $ro['name']?></h4>
                <h4><?php echo $ro['dep']?></h4>
							</div>
						</div>
         
					</div>
         
				</div>
        <?php }
          ?>		
			</div>

      
      <div style="background:#d90429;margin-bottom: 7px;margin-top:7px;border-radius:7px; text-align:center">
      <h1 >BSW</h1> 
      </div> 
      <?php
      while($ro2=mysqli_fetch_assoc($res2)){
    ?>
				<div class="col-md-3 col-6">
     
					<div class="team-grids text-center">
          
	<img src="<?php echo "admin/image/".$ro2['image']?>" style="width:300px;height:200px;" class="img-fluid" alt="">
						<div class="team-info">
							<div class="caption">
								<h4><?php echo $ro2['name']?></h4>
                <h4><?php echo $ro2['dep']?></h4>
							</div>
						</div>
         
					</div>
         
				</div>
        <?php }
          ?>		
		
			
      </div>
		</div>
	</section>
	<!-- team -->
  <!-- footer-66 -->
 
  <!--//footer-66 -->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
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