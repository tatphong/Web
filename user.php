<?php
require_once( 'php/dbo.php' );
require_once( 'php/common.php' );
session_start();
	
//add user
if ( isset( $_REQUEST[ 'btn_add' ] ) ) {
	if ( $_POST[ 'add_block' ] == "Active" )$block = 0;
	else $block = 1;
	if ( $_POST[ 'add_ad' ] == "User" )$admin = 0;
	else if ( $_POST[ 'add_ad' ] == "Manager" )$admin = 2;
	else $admin = 1;
	$element = "(`uid`,`username`,`email`,`phone`,`pwd`,`address`,`block`,`admin`)";
	$value = "(NULL,'" . $_POST[ 'add_name' ] . "','" . $_POST[ 'add_email' ] . "','" . $_POST[ 'add_phone' ] . "','" . password_hash( $_POST[ 'add_pwd' ], PASSWORD_DEFAULT ) . "','" . $_POST[ 'add_address' ] . "','" . $block . "','" . $admin . "')";
	dbo_insert( "`ql_user`", $element, $value );
	echo "<script>alert('New user successful added');</script>";
}

//delete user
if ( isset( $_REQUEST[ 'btn_del' ] ) ) {
	$target = "`uid`=" . $_GET[ 'del_uid' ];
	dbo_del( "ql_user", $target );
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>James Furlinn | Admin | User</title>
	<!-- Bootstrap -->
	<link rel="shortcut icon" type="image/png" href="Fetoria-black.png"/>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="slick/slick.css" rel="stylesheet">
	<link href="slick/slick-theme.css" rel="stylesheet">
	<link href="css/JF.css" rel="stylesheet">
	<link href="css/order.css" rel="stylesheet">
	<link href="css/all.css" rel="stylesheet">
	<link href="wow/animate.css" rel="stylesheet">
</head>

<body>


	<!--HEADER-->

	<div id="overlay-page" class=" d-md-none"></div>

	<div class="container-fluid hidden" id="inner-add">
		<div id="inner-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-12" id="inner-white">
					<form action="user.php" method="post">
						<br>
						<div class="offset-1 col-10 us2">
							<div class="col-lg-4 col-md-4 col-5">
								<p align="left"><b class="col-12"> User Name</b><br>
									<b class="col-12"> Password</b><br>
									<b class="col-12"> Phone</b><br>
									<b class="col-12"> Email</b><br>
									<b class="col-12"> Address</b><br>
									<b class="col-12"> Status</b><br>
									<b class="col-12"> Admin permission</b><br>
								</p>
							</div>

							<div class="col-lg-8 col-md-8 col-7">
								<input type="text" name="add_name" class="col-12" pattern="[^0-9]{2,}">
								<input type="password" name="add_pwd" class="col-12">
								<input type="text" name="add_phone" class="col-12" pattern="[0-9]{10,11}">
								<input type="email" name="add_email" class="col-12">
								<input type="text" name="add_address" class="col-12">
								<select name="add_block" class="col-12">
									<option>Active</option>
									<option>Block</option>
								</select>
								<select name="add_ad" class="col-12">
									<option>User</option>
									<option>Admin</option>
									<option>Manager</option>
								</select>
							</div>
						</div>
						<button type="submit" name="btn_add" class="offset-6 col-lg-3 add-inner">ADD</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">

		<div class="row" id="menu">
			<div class="container" id="menu-flex">

				<div class="nut-mobile col-2 d-md-none">
					<button id="toggle-menu">
						<div class="top"></div>
						<div class="middle"></div>
						<div class="bottom"></div>
					</button>
				</div>


				<div class="logo logo-head d-block col-6 col-md-2">
					<a href="index.php"><img src="img/JamesFurlinn-logo.png"></a>
				</div>


				<nav id="the-menu" class="the-menu col-md-8">
					<ul>
						<li id="men"><a href="dash.php">DASHBOARD</a>
						</li>
						<li id="woman"><a href="order.php">ORDER</a>
						</li>
						<li id="col"><a href="#">CATEGORY</a>
							<ul id="c">
								<li><a href="category.php?type=men"> Men</a>
								</li>
								<li><a href="category.php?type=woman"> Woman</a>
								</li>
								
							</ul>
						</li>
						<li id="up"><a href="#">PRODUCTS</a>
							<ul id="p">
								<?php show_menu_category(); ?>
							</ul>
						</li>
						<?php check_ad_permission(); ?>
						
					</ul>
				</nav>

				<div class="cart offset-1 col-3 offset-md-0 col-md-2">
					<div class="d-none d-lg-block offset-md-2"></div>
					<div class="d-block d-md-none col-4">
						<a href="#" title="#"></a>
					</div>
					<div class="col-4 col-lg-3 icon" id="srch" title="Search">
						<i class="fas fa-search"></i>
					</div>
					<div class="col-4 col-lg-3 icon">
						<a href="index.php" title="Log out"><i class="fas fa-sign-out-alt"></i></a>
					</div>
					<div class="d-none d-md-block col-lg-3 icon">
						<a href="#" title="Admin">ADMIN</a>
					</div>
				</div>


			</div>
		</div>



		<div class="row">
			<div class="hidden col-12" id="searchgia">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-9 col-lg-8 search-op">
							<font color="white">PRODUCT'S NAME:</font> &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="snc col-11 col-md-11">
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-md-9 col-lg-8 search-op" id="search-flex">
							<div class="col-6 col-md-5 col-lg-5 sl">
								<font color="white">SEX:</font> <br>
								<select class="snc col-12">
									<option>All</option>
									<option>Woman</option>
									<option>Men</option>
									<option>Unisex</option>
								</select>
							</div>

							<div class="col-6 col-md-5 offset-md-1 sl">
								<font color="white">COLLECTIONS:</font><br>
								<select class="snc col-11">
									<option>All</option>
									<option>Be My Valentine</option>
									<option>Back to Nature</option>
									<option>Shape of Beige</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-md-9 col-lg-8 search-op">
							<font color="white">PRICE: </font>
							<select class="snc col-11">
								<option>All</option>
								<option>$10.00 - $50.00</option>
								<option>$50.00 - $100.00</option>
								<option>$100.00 - $150.00</option>
								<option>Over $150.00</option>
							</select>
						</div>
					</div>
					<br>
					<div class="row"><button id="sm" class="col-6 col-md-4 col-lg-3">SEARCH</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- HEADER -->

	<!-- BANNER 1 + PR-INFO 1-->
	<br><br><br>

	<div class="container">

		<div class="row">
			<div class="col-5 offset-7 fil">

				<div class="offset-1 col-5">
					<form action="user.php" method="get">
						Filter:
						<select name="filter" class="sl-fil">
							<option><a href="user.php#filter=All">All</a>
							</option>
							<option>Active</option>
							<option>Blocked</option>
							<option>Admin</option>
							<option>Manager</option>
						</select>
					</form>
				</div>

				<div class="col-6">
					<button id="add">ADD NEW USER</button>
				</div>
			</div>

		</div>

		<br>
		<div class="row">


			<?php
			$result = "";
			$css_color = 0;
			$cond = "";
			if ( isset( $_REQUEST[ 'filter' ] ) )
				switch ( $_GET[ 'filter' ] ) {
					case "Blocked":
						$cond = "block='1'";
						break;
					case "Active":
						$cond = "block='0'";
						break;
					case "Admin":
						$cond = "admin='1'";
						break;
					case "Admin":
						$cond = "admin='2'";
						break;
					default:
						$cond = "";
						break;
				}

			dbo_select( '*', 'ql_user', $cond, $result );
			if ( $result->num_rows > 0 )
				while ( $row = $result->fetch_assoc() ) {
					?>
			<div class="col-12 wow fadeInLeft us 
			<?php if($row['admin']==1) echo " cam "; 
					else if ($row['admin']==0) echo "grey "?>">
				<div class="col-lg-3 col-md-3 col-12 info-or">
					<br class="d-block d-md-none">
					<i class="far fa-user"></i>
					<br class="d-none d-md-block">
					<h5>
						<?php echo $row['username']; ?>
					</h5>
					<h6>&nbsp;ID: <?php 
						switch($row['admin']){
							case 1: echo "AD";
								break;
							case 2: echo "MN";
								break;
							default: echo "US";
								break;
						} echo $row['uid']; 
						?></h6>
				</div>

				<div class="col-lg-7 col-md-7 col-12 us2">
					<div class="col-lg-3 col-md-4 col-5">

						<b> Phone</b><br>
						<b> Email</b><br>
						<b> Address</b><br>
						<b> Status</b><br>
					</div>

					<div class="col-lg-9 col-md-8 col-7">

						<?php echo $row['phone']; ?><br>
						<?php echo $row['email']; ?>
						<br>
						<?php echo $row['address']; ?> <br>
						<?php if ($row['block']) echo "Blocked"; else echo "Active"; ?>
						<br>
					</div>
				</div>

				<div class="col-lg-2 col-md-2 col-12 ico">
					<br>
					<p align="center">
						<form action="user.php" method="get">
							<input type="text" name="del_uid" value="<?php echo $row['uid']; ?>" style="display: none">
							<button type="submit" name="btn_del" class="btn-del" onClick="if (!confirm('Do you really want to delete?')) this.setAttribute('type','button')
							else this.setAttribute('type','submit');"><i class="far fa-trash-alt" title="Delete"></i></button>
						</form>
						<i class="fas fa-user-edit" title="Info" id="btn_edit_<?php echo $row['uid']; ?>"></i>
					</p>
					<br class="d-block d-md-none">
				</div>
			</div>


			<!--inner-->
			<div class="container-fluid hidden" id="inner_<?php echo $row['uid'] ?>">
				<div class="inner-overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-12" id="inner-white">
							<form action="php/btn_edit.php" method="post">
								<div class="col-12">
									<br>
									<div class="offset-1 col-10 us2">
										<div class="col-lg-4 col-md-4 col-5">
											<p align="left"><b class="col-12"> User Name</b><br>
												<b class="col-12"> ID</b><br>
												<b class="col-12"> Password</b><br>
												<b class="col-12"> Phone</b><br>
												<b class="col-12"> Email</b><br>
												<b class="col-12"> Address</b><br>
												<b class="col-12"> Status</b><br>
												<b class="col-12"> Admin permission</b><br>
											</p>
										</div>

										<div class="col-lg-8 col-md-8 col-7">
											<input type="text" name="uid" style="display: none" value="<?php echo $row['uid']; ?>">
											<input type="text" name="edit_name" class="col-12" value="<?php echo $row['username']; ?>">
											<input type="text" name="edit_id" class="col-12" value="<?php echo $row['uid']; ?>">
											<input type="password" name="edit_pwd" class="col-12">
											<input type="text" name="edit_phone" class="col-12" value="<?php echo $row['phone']; ?>">
											<input type="email" name="edit_email" class="col-12" value="<?php echo $row['email']; ?>">
											<input type="text" name="edit_address" class="col-12" value="<?php echo $row['address']; ?>">
											<select name="edit_block" class="col-12">
												<option>Active</option>
												<option>Block</option>
											</select>
											<select name="edit_ad" class="col-12">
												<option>User</option>
												<option>Admin</option>
												<option>Manager</option>
											</select>
										</div>
									</div>

									<button type="submit" class="offset-6 col-lg-3 add-inner">EDIT</button>
							</form>

							</div>
						</div>
					</div>
				</div>
				<script src="js/jquery.min.js"></script>
				<script>
					'use strict';
					$( '#btn_edit_<?php echo $row["uid"] ?>' ).click( function () {
						$( '#inner_<?php echo $row["uid"] ?>' ).removeClass( 'hidden' );
					} );
					$( '.inner-overlay' ).click( function () {
						$( '#inner_<?php echo $row["uid"] ?>' ).addClass( 'hidden' );
					} );
				</script>
			</div>

			<?php
			}
			?>

		</div>

	</div>


	<!-- FOOTER -->

	<footer id="footer" class="wow fadeInUp">
		<div class="container">
			<div class="row">
				<div class="col-12" id="footer-flex">
					<div class="logo logo-ft d-none d-md-block col-md-4 col-lg-4">
						<a href="index.php"><img src="img/JamesFurlinn-logo-ft.png"></a>
					</div>

					<div class="info col-6 col-md-4 col-lg-4">
						<strong>CUSTOMER CARE </strong><br> Customer Service<br> Promotions
						<br> Shipping & Tracking<br> Returns & Exchanges<br> Size Guide<br> Product Care<br>
						<br>
						<strong id="fu">FOLLOW US </strong>&nbsp;&nbsp;<br class="d-block d-md-none">
						<a href="https://www.behance.net/"><i class="fab fa-behance"></i></a>
						<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
						<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
					</div>

					<div class="col-6 col-md-4 col-lg-4 info-hid">
						<strong>POLICIES</strong><br> Terms of use <br> Privacy Policy<br> Cookies Policy<br>
						<br>
						<strong>FEEDBACK</strong><br> Share your comments and<br> Suggestions with us <br>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<footer id="footer-2">
		<div class="fb col-12  col-md-12 col-lg-12">
			© 2019 James Furlinn. All rights reserved. Terms & Conditions.
		</div>
	</footer>

	<!-- FOOTER -->

	<!-- SCRIPT -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate.min.js"></script>
	<script src="wow/wow.min.js"></script>
	<script src="wow/wow.js"></script>
	<script src="js/JF.js"></script>
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="slick/slick.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		new WOW().init();
	</script>

	<!-- SCRIPT -->
</body>

</html>