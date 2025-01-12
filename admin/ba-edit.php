<?php
include("../connect.php");
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Welcome to Admin Panal</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <!-- /nav-->
		  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
				  		 <!-- /nav_agile_w3l -->
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller scrollbar1">
							<ul class="gn-menu agile_menu_drop">
								<li><a href="main-page.html"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
								<li>
									
								</li>
								<li>
									<a href="#"> <i class="fa fa-file-text-o" aria-hidden="true"></i>Forms <i class="fa fa-angle-down" aria-hidden="true"></i></a> 
									<ul class="gn-submenu">
									<li class="mini_list_agile"><a href="insert.php"><i class="fa fa-caret-right" aria-hidden="true"></i> insert data to user table</a></li>
										<li class="mini_list_agile"><a href="insert2.php"><i class="fa fa-caret-right" aria-hidden="true"></i> insert data to admin table</a></li>
									<li class="mini_list_agile"><a href="insert3.php"><i class="fa fa-caret-right" aria-hidden="true"></i> insert data  B.SC Table</a></li>
									<li class="mini_list_agile"><a href="insertba.php"><i class="fa fa-caret-right" aria-hidden="true"></i> insert data to BA Table</a></li>
                                    <li class="mini_list_agile"><a href="insertbcom.php"><i class="fa fa-caret-right" aria-hidden="true"></i> insert data to B.com Table</a></li>
                                    <li class="mini_list_agile"><a href="insertbba.php"><i class="fa fa-caret-right" aria-hidden="true"></i> insert data to BBA Table</a></li>
                                    <li class="mini_list_agile"><a href="insertbsw.php"><i class="fa fa-caret-right" aria-hidden="true"></i> insert data to BSW Table</a></li>
                                
									</ul>
								</li>
								<li><a href="table.php"> <i class="fa fa-table" aria-hidden="true"></i> Tables</a></li>
								
								</li>
								
								</li>
								
								</li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<!-- //nav_agile_w3l -->
                <li class="second logo"><h1><a href="main-page.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i>amsteem </a></h1></li>
					

			</ul>
			<!-- //nav -->
			
		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="main-page.html">Home</a><span>«</span></li>
									
									<li>Edit table</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->
                    <?php
                    if(isset($_GET["c"]))
                    {
                        $c_id= $_GET["c"];
                        $users="SELECT *FROM ba WHERE c='$c_id'";
                        $users_run =mysqli_query($con,$users);
                    }
                    if(mysqli_num_rows($users_run)>0)
                    {
                        foreach($users_run as $user)
                        {
                        ?>
                     
					<form action="..//regester.php" method="post" enctype="multipart/form-data">
                    <div class="col-md-2 mb-3">
                    
                        <input style="height:20%;" type="hidden" name="c" value="<?=$user['c'];?>" class="form-control">
                        </div>
                    <div class="row"></div>
                    <div class="col-md-2 mb-3">
                        <labal for="">Name </labal>
                        <input style="height:20%;" type="text" name="name" value="<?=$user['name'];?>" class="form-control">
                    </div>
                    
                    <div class="col-md-2 mb-3">
                        <labal for="">Phno</labal>
                        <input style="height:20%;" type="text" name="phno" value="<?=$user['phno'];?>" class="form-control">
                    </div> <div class="col-md-2 mb-3">
                        <labal for="">Email</labal>
                        <input style="height:20%;" type="text" name="email" value="<?=$user['email'];?>" class="form-control">
                    </div>
					<div class="col-md-2 mb-3">
                        <labal for="">image</labal>
                        <input style="height:20%;" type="file" name="img" value="<?='admin\image'.$user['image'];?>" class="form-control">
                    </div>
					<div class="col-md-2 mb-3">
                        <labal for="">From</labal>
                        <input style="height:20%;" type="text" name="from" value="<?=$user['from'];?>" class="form-control">
                    </div>
					</div>
					<div class="col-md-2 mb-3">
                        <input style="height:20%;" type="hidden" name="vote" value="<?=$user['vote'];?>" class="form-control">
                    </div>
					<div class="col-md-2 mb-3">
                        <label style="margin-top:10%;" for=""></label><br>
                        <button type="submit" name="update4" class="btn btn-primary">submit/update</button>
                    </div>
				</div>
                        </form>
                           
                        <?php
                    }
                }else{
                    ?>
                    <h4>No Record Found</h4>
                    <?php
                }
                ?>

		<!-- //inner_content-->
<!--copy rights start here-->

<!--copy rights end here-->
<!-- js -->

          <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		  <script src="js/modernizr.custom.js"></script>
		
		   <script src="js/classie.js"></script>
		  <script src="js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>
<!-- tables -->

<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //js -->
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>