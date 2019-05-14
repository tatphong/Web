<?php
require_once( 'php/dbo.php' );
require_once( 'php/common.php' );
session_start();
if ( isset( $_REQUEST[ 'btn_del' ] ) ) {
	$target = "`id_donhang`=" . $_GET[ 'del_id_dh' ];
	dbo_del( "qldh", $target );
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>James Furlinn | Admin | Order</title>
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


			<?php
			$result = "";
			$result2 = "";
			dbo_select( '*', 'qldh', "", $result );
			if ( $result->num_rows > 0 )
				while ( $row = $result->fetch_assoc() ) {
					dbo_select( '*', 'ql_user', "uid = '" . $row[ 'uid' ] . "'", $result2 );
					$row2 = $result2->fetch_assoc();
					?>
			<div class="col-12 wow fadeInLeft us <?php if (!$row['status']) echo " grey " ?>">
				<div class="col-lg-3 col-md-3 col-12 info-or">
					<br class="d-block d-md-none">
					<i class="far fa-user"></i>
					<br class="d-none d-md-block">
					<h5>
						<?php echo $row['username']; ?>
					</h5>
					<h6>Order code: #<?php echo $row['id_donhang'] ?></h6>
					<i class="fas fa-info-circle" title="User Info"></i>
				</div>

				<div class="col-lg-7 col-md-7 col-12 us2">
					<div class="col-lg-3 col-md-4 col-5">	
						<b> Phone</b><br>
						<b> Total Price</b><br>
						<b> Address</b><br>
						<b> Status</b><br>
						<b> Date Created</b><br>
					</div>

					<div class="col-lg-9 col-md-8 col-7">
						<?php echo $row2['phone']; ?><br>
						<?php echo $row['price']; ?>
						<br>
						<?php echo $row2['address']; ?> <br>
						<?php if ($row['status']) echo "Delivered"; else echo "Waiting"; ?>
						<br>
						<?php echo $row['date']; ?>
					</div>
				</div>

				<div class="col-lg-2 col-md-2 col-12">
					<br><br class="d-none d-md-block"><br class="d-none d-md-block">
					<p align="center">
						<form action="order.php" method="get">
							<input type="text" name="del_id_dh" value="<?php echo $row['id_donhang']; ?>" style="display: none">
							<button type="submit" name="btn_del" class="btn-del" onClick="if (!confirm('Do you really want to delete?')) this.setAttribute('type','button')
							else this.setAttribute('type','submit');"><i class="far fa-trash-alt" title="Delete"></i></button>
						</form>
						<i class="fas fa-info-circle" title="Info"></i>
					</p>
					<br class="d-block d-md-none">
				</div>
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