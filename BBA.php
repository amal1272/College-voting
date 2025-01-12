<?php
require_once("connect.php");
$query= "select * from bba";
$result = mysqli_query($con,$query);
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
            <span>SAHYA</span>JYOTHI
          </a></h1>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa icon-expand fa-bars"></span>
          <span class="fa icon-close fa-times"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="services.html">VOTE NOW</a>
            </li>
            <li>
              <a class="nav-link" href="http://localhost//mini/admin/index.php">Admin</a>
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
        <h2 class="title">VOTE NOW</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-angle-double-right mx-2" aria-hidden="true"></span> VOTE NOW </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
	<!--/services-sec-->
  
	<div class="w3-services py-5">
		<div class="container py-lg-4"> 

						   
			<div class="title-content text-left mb-lg-8 mb-6">
    
      <div class="row w3l-row">
        <?php
        $check_faculty= mysqli_num_rows($result)>0;
        if($check_faculty){
        while($row = mysqli_fetch_assoc($result)){
 ?>	<?php $nam=$row['vote'];?>
          <div style="margin-top: 100px; " class="col-lg-5 my-image pe-lg-5 mb-lg-0 mb-md-5 mb-4">
            
              <img src="<?php print 'admin/image/'.$row['image']?>" alt="" class="img-fluid">
          </div>
          
 
          <div style="margin-top: 100px;" class="col-lg-7 w3l-about-info px-lg-4 align-center">
              <h3 class="w3l-title-main mb-2">VOTE FOR <span style="color: #d90429;"><?php echo $row['name']?> </span></h3>
              <p class="my-4 pe-lg-5" style="color:  var(--heading-color);"><?php echo $row['dep']?></p>
              <div class="my-info mt-4">
                  <div class="single-info"><span style="font-weight: bold;color:var(--heading-color);">Name:</span>
                      <p style="font-weight: 20px;color:  var(--heading-color);"><?php echo $row['name']?> </p>
                  </div>
                  <div class="single-info"><span style="font-weight: bold;color: var(--heading-color);">From:</span>
                      <p style="font-weight: 20px;color:  var(--heading-color);"><?php echo $row['from']?></p>
                  </div>
                  <div class="single-info"><span style="font-weight: bold;color:  var(--heading-color);">Email:</span>
                      <p><a style="color:var(--heading-color);" href="mailto:christino@mail.com"><?php echo $row['email']?> </a></p>
                  </div>
                  <div class="single-info"><span style="font-weight: bold; color:var(--heading-color);">Phone:</span>
                  
                      <p><a style="color:var(--heading-color);" href="tel:+21 234 567 8901"><?php echo $row['phno']?> </a></p>
                  </div>
              </div>

              <!-- <ul class="follow-social mt-lg-5 mt-4">
                  <li>
                      <h5 class="me-md-3">Follow me on </h5>
                  </li>

                  <li><a href="https://Christino ronoldo"><img src="assets/images/p2.png" class="fa1"></a>
                  </li>

                  <li><a href="https://www.instagram.com/christino ronoldo"><img src="assets/images/p3.png" class="fa1"></a>
                  </li>

                  <li><a href="https://www.facebook.com/CRISTINO ronoldo" img>
                          <img src="assets/images/p1 (1).jpg" class="fa1"></a></li>

                  <li><a href="https://twitter.com/christino ronoldo"><img src="assets/images/p4.png" class="fa1"></a></li> -->

              </ul>
              <div class="w3l-btn" style="margin-bottom: 20%;" style="padding: 20%;">
                <form id="my-form1" action="http://localhost/mini/regester.php" name="form1" method="get">
                
                 <a style="margin-top: 30px;width: 200px;height: 50px;padding:13px;" href="regester.php?c_d=<?php echo $row['c_d']?>" class="btn btn-primary"a><span class="span4" style="font-weight: bold;">VOTE</span></a>
                 
                   
                  </div>
                </form>

              </div>
              <?php
  }
}else{  
  echo'facility found';
}
?>
<?php
                 if(isset($_POST['oncl'])){
                  $nam++;
                 $val=$row['c_d'];
                 $sql = "UPDATE bba SET vote=$nam where c_d=$val";
                 $con->query($sql);
                 }
                 ?>
          </div>
          
      </div>
      
      
        
      </div>
      
		</div>
    
	</div>
 
    
      
    
    </div>

      
      </div>
      			
  
		</div>
    

	</div>
	<!--//services-sec-->
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
    const form = document.getElementById('my-form');
const popupBox = document.getElementById('popup-box');
const closePopup = document.getElementById('close-popup');

form.addEventListener('submit', (e) => {
  e.preventDefault();
  popupBox.style.display = 'block';
});

closePopup.addEventListener('click', () => {
  popupBox.style.display = 'none';
});
function popup()
{
 /*if(confirm("Confirm vote"))
  {
  alert("vote sussfully");
  window.location="http://localhost/mini/vote.php";
  }else{
    return false;
  }*/

  
}
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>