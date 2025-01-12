<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require_once("../connect.php");
$query = "select * from vote";
$result = mysqli_query($con, $query);
?>
<?php
require_once("../connect.php");
$qu = "SELECT* from bsc";
$res = mysqli_query($con, $qu);
?>
<?php
require_once("../connect.php");
$qur = "select * from admin";
$re = mysqli_query($con, $qur);
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
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
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
								<li><a href="main-page.php"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
				</li>
				<li>
					<a href="#"> <i class="fa fa-file-text-o" aria-hidden="true"></i>Forms <i class="fa fa-angle-down" aria-hidden="true"></i></a>
					<ul class="gn-submenu">
						<li class="mini_list_agile"><a href="insert.php"><i class="fa fa-caret-right" aria-hidden="true"></i> insert data to user table</a></li>
						<li class="mini_list_agile"><a href="insert2.php"><i class="fa fa-caret-right" aria-hidden="true"></i> insert data to admin table</a></li>
						<li class="mini_list_agile"><a href="insert3.php"><i class="fa fa-caret-right" aria-hidden="true"></i> insert data B.SC Table</a></li>
						<li class="mini_list_agile"><a href="insertba.php"><i class="fa fa-caret-right" aria-hidden="true"></i> insert data to BA Table</a></li>
						<li class="mini_list_agile"><a href="insertbcom.php"><i class="fa fa-caret-right" aria-hidden="true"></i> insert data to B.com Table</a></li>
						<li class="mini_list_agile"><a href="insertbba.php"><i class="fa fa-caret-right" aria-hidden="true"></i> insert data to BBA Table</a></li>
						<li class="mini_list_agile"><a href="insertbsw.php"><i class="fa fa-caret-right" aria-hidden="true"></i> insert data to BSW Table</a></li>
					</ul>

				</li>
				<li><a href="table.php"> <i class="fa fa-table" aria-hidden="true"></i> Tables</a></li>
				</li>
			</ul>
		</div><!-- /gn-scroller -->
		</nav>
		</li>
		<!-- //nav_agile_w3l -->

		<li class="second top_bell_nav">


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

					<li>Tables</li>
				</ul>
			</div>
		</div>
		<!-- //breadcrumbs -->

		<div class="inner_content_w3_agile_info two_in">
			<h2 class="w3_inner_tittle">Tables</h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 <h3 class="w3_inner_tittle two">Users detiles</h3>
										 <table id="table">
											<thead>
												<tr>
													<th>Name</th>
													<th>Email</th>
													<th>DEP</th>
													<th>Password</th>
													<th>Edit</th>
													<th>delete</th>
												</tr>
											</thead>
											<tr>
                                            <?php

while ($row = mysqli_fetch_assoc($result)) {
?>
    <td><?php echo $row['name'] ?> </td>
    <td><?php echo $row['email'] ?> </td>
    <td><?php echo $row['dep'] ?> </td>
    <td><?php echo $row['password'] ?> </td>
    <td><a href="regester-edit.php?email=<?php echo $row['email'] ?>" class="btn btn-primary">Edit</td>
    <form name="form1" method="post" action="../regester.php">
        <td><button type="submit" name="submit2" value="<?= $row['email'] ?>" class="btn btn-danger">delete</button></td>
    </form>
</tr>
<?php
							}
					?>
						
										</table>
									  
								</div>
								<div class="w3l-table-info agile_info_shadow">
                                <h3 class="w3_inner_tittle two">Vote Count Department of Computer Science</h3>
									  <table id="table-breakpoint">
                                      <table id="table-breakpoint">
					<thead>
						<tr>
						
						<tr>
							<th>C_ID</th>
							<th>C_Name</th>
							<th>Vote Count</th>
							<th>email</th>
							<th>phno</th>
							<th>dep</th>
							<th>from</th>
							<th>image</th>
							<th>Edit</th>
							<th>deletet</th>
						</tr>

						</tr>
					</thead>
					<tr>
						<?php
						require_once("../connect.php");
						$qu1 = "select * from bsc";
						$r6 = mysqli_query($con, $qu1);
						?>
						<?php

						while ($ro6 = mysqli_fetch_assoc($r6)) {
						?>
							<td><?php echo $ro6['c_id'] ?> </td>
							<td><?php echo $ro6['name'] ?> </td>
							<td><?php echo $ro6['vote'] ?> </td>
							<td><?php echo $ro6['email'] ?> </td>
							<td><?php echo $ro6['phno'] ?> </td>
							<td><?php echo $ro6['dep'] ?> </td>
							<td><?php echo $ro6['from'] ?> </td>
							<td><img src="<?php echo "image/" . $ro6['image'] ?>" style="width:100px;" class="img-fluid"></td>
							<td><a href="c-edit.php?c_id=<?php echo $ro6['c_id'] ?>" class="btn btn-primary">Edit</a></td>
							<form name="form1" method="post" action="../regester.php">
								<td><button type="submit" name="sub34" value="<?= $ro6['c_id'] ?>" class="btn btn-danger">delete</button></td>
							</form>
					</tr>
				<?php
						}
				?>

				</table>

									
									  </div>
									  <div class="w3l-table-info agile_info_shadow">
                                      <h3 class="w3_inner_tittle two">Vote Count Department of English</h3>

									 
                                       <table id="table-breakpoint">
				<thead>
					<tr>

					<tr>
						<th>C_ID</th>
						<th>C_Name</th>
						<th>Vote Count</th>
						<th>email</th>
						<th>phno</th>
						<th>dep</th>
						<th>from</th>
						<th>image</th>
						<th>Edit</th>
						<th>deletet</th>
					</tr>

					</tr>
				</thead>
				<tr>
					<?php
					require_once("../connect.php");
					$qu = "select * from ba";
					$r = mysqli_query($con, $qu);
					?>
					<?php

					while ($ro = mysqli_fetch_assoc($r)) {
					?>
						<td><?php echo $ro['c'] ?> </td>
						<td><?php echo $ro['name'] ?> </td>
						<td><?php echo $ro['vote'] ?> </td>
						<td><?php echo $ro['email'] ?> </td>
						<td><?php echo $ro['phno'] ?> </td>
						<td><?php echo $ro['dep'] ?> </td>
						<td><?php echo $ro['from'] ?> </td>
						<td><img src="<?php echo "image/" . $ro['image'] ?>" style="width:100px;" class="img-fluid"></td>
						<td><a href="ba-edit.php?c=<?php echo $ro['c'] ?>" class="btn btn-primary">Edit</a></td>
						<form name="form1" method="post" action="../regester.php">
							<td><button type="submit" name="submit5" value="<?= $ro['c'] ?>" class="btn btn-danger">delete</button></td>
						</form>
				</tr>
			<?php
					}
			?>

			</table>
									 

									  </div>
									  <div class="w3l-table-info agile_info_shadow">
                                      <h3 class="w3_inner_tittle two">Vote Count Department of Business Administration</h3>
                                      <table id="table-breakpoint">
				<thead>

					<tr>
						<th>C_ID</th>
						<th>C_Name</th>
						<th>Vote Count</th>
						<th>email</th>
						<th>phno</th>
						<th>dep</th>
						<th>from</th>
						<th>image</th>
						<th>Edit</th>
						<th>deletet</th>
					</tr>

				</thead>
				<tr>
					<?php
					require_once("../connect.php");
					$qu1 = "select * from bba";
					$res1 = mysqli_query($con, $qu1);
					?>
					<?php

					while ($row1 = mysqli_fetch_assoc($res1)) {
					?>
						<td><?php echo $row1['c_d'] ?> </td>
						<td><?php echo $row1['name'] ?> </td>
						<td><?php echo $row1['vote'] ?> </td>
						<td><?php echo $row1['email'] ?> </td>
						<td><?php echo $row1['phno'] ?> </td>
						<td><?php echo $row1['dep'] ?> </td>
						<td><?php echo $row1['from'] ?> </td>
						<td><img src="<?php echo "image/" . $row1['image'] ?>" style="width:100px;" class="img-fluid"></td>
						<td><a href="bba-edit.php?c_d=<?php echo $row1['c_d'] ?>" class="btn btn-primary">Edit</td>
						<form name="form1" method="post" action="../regester.php">
							<td><button type="submit" name="submit6" value="<?= $row1['c_d'] ?>" class="btn btn-danger">delete</button></td>
						</form>
				</tr>
			<?php
					}
			?>

			</table>

									 
								</div>
								<div class="w3l-table-info agile_info_shadow">
                                <h3 class="w3_inner_tittle two">Vote Count Department of Social Work</h3>
			<table id="table-breakpoint">
				<thead>
					<tr>

					<tr>
						<th>C_ID</th>
						<th>C_Name</th>
						<th>Vote Count</th>
						<th>email</th>
						<th>phno</th>
						<th>dep</th>
						<th>from</th>
						<th>image</th>
						<th>Edit</th>
						<th>deletet</th>
					</tr>

					</tr>
				</thead>
				<tr>
					<?php
					require_once("../connect.php");
					$qu2 = "select * from bsw";
					$res2 = mysqli_query($con, $qu2);
					?>


					<?php

					while ($row2 = mysqli_fetch_assoc($res2)) {
					?>
						<td><?php echo $row2['id'] ?> </td>
						<td><?php echo $row2['name'] ?> </td>
						<td><?php echo $row2['vote'] ?> </td>
						<td><?php echo $row2['email'] ?> </td>
						<td><?php echo $row2['phno'] ?> </td>
						<td><?php echo $row2['dep'] ?> </td>
						<td><?php echo $row2['from'] ?> </td>
						<td><img src="<?php echo "image/" . $row2['image'] ?>" style="width:100px;" class="img-fluid"></td>
						<td><a href="bsw-edit.php?id=<?php echo $row2['id'] ?>" class="btn btn-primary">Edit</td>
						<form name="form1" method="post" action="../regester.php">
							<td><button type="submit" name="submit7" value="<?= $row2['id'] ?>" class="btn btn-danger">delete</button></td>
						</form>
				</tr>
			<?php
					}
			?>

			</table>
            

								
									</div>
                                    <div class="w3l-table-info agile_info_shadow">
			<h3 class="w3_inner_tittle two">Vote Count Department of Commerse</h3>
			<table id="table-breakpoint">
				<thead>
					<tr>

					<tr>
						<th>C_ID</th>
						<th>C_Name</th>
						<th>Vote Count</th>
						<th>email</th>
						<th>phno</th>
						<th>dep</th>
						<th>from</th>
						<th>image</th>
						<th>Edit</th>
						<th>deletet</th>
					</tr>

					</tr>
				</thead>
				<tr>
					<?php
					require_once("../connect.php");
					$qu3 = "select * from bcom";
					$res3 = mysqli_query($con, $qu3);
					?>
					<?php

					while ($row3 = mysqli_fetch_assoc($res3)) {
					?>
						<td><?php echo $row3['c_i'] ?> </td>
						<td><?php echo $row3['name'] ?> </td>
						<td><?php echo $row3['vote'] ?> </td>
						<td><?php echo $row3['email'] ?> </td>
						<td><?php echo $row3['phno'] ?> </td>
						<td><?php echo $row3['dep'] ?> </td>
						<td><?php echo $row3['from'] ?> </td>
						<td><img src="<?php echo "image/" . $row3['image'] ?>" style="width:100px;" class="img-fluid"></td>
						<td><a href="bcom-edit.php?c_i=<?php echo $row3['c_i'] ?>" class="btn btn-primary">Edit</td>
						<form name="form1" method="post" action="../regester.php">
							<td><button type="submit" name="submit8" value="<?= $row3['c_i'] ?>" class="btn btn-danger">delete</button></td>
						</form>
				</tr>
			<?php
					}
			?>

			</table>
		</div>
		<div class="w3l-table-info agile_info_shadow">
			<h3 class="w3_inner_tittle two">Admin Table</h3>
			<table id="table-breakpoint">
				<thead>
					<tr>
						<th>AD_NAME</th>
						<th>Email</th>
						<th>Password</th>
						<th>Edit</th>
						<th>deletet</th>
					</tr>
				</thead>
				<tr>
					<?php

					while ($row = mysqli_fetch_assoc($re)) {
					?>
						<td><?php echo $row['name'] ?> </td>
						<td><?php echo $row['email'] ?> </td>
						<td><?php echo $row['pass'] ?> </td>
						<td><a href="admin-edit.php?email=<?php echo $row['email'] ?>" class="btn btn-primary">Edit</td>
						<form name="form1" method="post" action="../regester.php">
							<td><button type="submit" name="submit4" value="<?= $row['email'] ?>" class="btn btn-danger">delete</button></td>
						</form>
				</tr>
			<?php
					}
			?>

			</table>
		</div>
									
									
									</div>
						</div>
							<!-- //tables -->
					
							<!-- /social_media-->
						  
													
						</div>
						<!-- //social_media-->
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2017 Esteem. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
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