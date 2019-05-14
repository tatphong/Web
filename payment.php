<?php
require_once( 'php/dbo.php' );
require_once( 'php/common.php' );
session_start();
$total = $_GET[ 'total_price' ];

//get user data
$result = "";
dbo_select( '*', 'ql_user', "uid='" . $_SESSION[ 'login' ] . "'", $result );
$user_data = $result->fetch_assoc();

//submit bill to database
if (isset($_REQUEST['btn_check_out'])){
	$element="(`id_donhang`,`uid`,`username`,`address`,`phone`,`date`,`price`,`status`)";
	$values="(NULL,'".$user_data['uid']."','".$user_data['username']."','".$user_data['address']."','".$user_data['phone']."','".date('Y-m-d')."','".$total."','0')";
	dbo_insert('`qldh`',$element,$values);
	header('location:http://localhost:'.$_SERVER['SERVER_PORT'].'/PRJ_Sem_2.1/profile.php?tks=1');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>James Furlinn</title>
	<!-- Bootstrap -->
	<link rel="shortcut icon" type="image/png" href="Fetoria-black.png"/>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="slick/slick.css" rel="stylesheet">
	<link href="slick/slick-theme.css" rel="stylesheet">
	<link href="css/JF.css" rel="stylesheet">
	<link href="css/all.css" rel="stylesheet">
	<link href="css/register.css" rel="stylesheet">
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
						<li id="men"><a href="#">MEN</a>
							<ul id="m">
								<li><a href="MEN.php"> All</a>
								</li>
								<li><a href="Pants.php"> Pants</a>
								</li>
								<li><a href="Shirt.php"> Shirt</a>
								</li>
								<li><a href="Accesories.php"> Accesories</a>
								</li>
							</ul>
						</li>
						<li id="woman"><a href="#">WOMAN</a>
							<ul id="w">
								<li><a href="WOMAN.php"> All</a>
								</li>
								<li><a href="Dress-wm.php"> Dress</a>
								</li>
								<li><a href="Shirt-wm.php"> Shirt</a>
								</li>
								<li><a href="Accesories-wm.php"> Accesories</a>
								</li>
							</ul>
						</li>
						<li id="col"><a href="#">COLLECTIONS</a>
							<ul id="c">
								<li><a href="JamesFurlinn-All.php"> All</a>
								</li>
								<li><a href="JamesFurlinn-BMV.php"> Be My Valentine</a>
								</li>
								<li><a href="JamesFurlinn-BNT.php"> Back to Nature</a>
								</li>
								<li><a href="JamesFurlinn-SOB.php"> Shape of Beige</a>
								</li>
							</ul>
						</li>
						<li id="up"><a href="contact.php">CONTACT</a>
						</li>
					</ul>
				</nav>

				<div class="cart offset-1 col-3 offset-md-0 col-md-2">
					<div class="d-none d-lg-block offset-md-2"></div>
					<div class="col-4 col-lg-3 icon" id="srch" title="Search">
						<i class="fas fa-search"></i>
					</div>
					<div class="col-4 col-lg-3 icon">
						<a href="#" title="Shopping Bag"><i class="fas fa-shopping-bag"></i></a>
					</div>
					<?php uname_logout(); ?>
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
							<div class="col-12 col-md-12 col-lg-8 search-op">
								<font color="white">PRICE: </font><br>
								<font color="white">From &nbsp;&nbsp;&nbsp;</font>
								<input type="text" name="price1" value="0" class="col-3 col-md-2 col-lg-4">
								<font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To &nbsp;&nbsp;&nbsp;</font>
								<input type="text" name="price2" class="col-3 col-md-2 col-lg-4">
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



	<!------------------------------------------------------------------- CONTENT ------------------------------------------------------------------>
	<br><br>

	<div class="container">
		<div class="row">
			<div class="web col-12">
				<div class="col-lg-6 d-none d-lg-block wow fadeInUp">
					<img src="img/tks.jpg" id="img">
				</div>
				<div id="banner" class="col-lg-6 offset-md-2 offset-lg-0 col-md-10 col-12 wow fadeInUp">

					<p id="text" align="center" class="col-12">
						<h2>
							<font color="#c77000">PAYMENT</font>
						</h2>
					</p>
					<div id="pay" class="col-md-11">
						<div class="client col-md-5 col-4">
							<h4>BILL ID :</h4><br> Name :<br> Phone:
							<br> Address:
							<br> Email:
							<br><br> Payment Method :<br>
						</div>
						<div class="client col-md-7 col-8">
							<h3>F1234-08</h3><br>
							<?php echo $user_data['username']; ?><br>
							<?php echo $user_data['phone']; ?><br>
							<?php echo $user_data['address']; ?><br>
							<?php echo $user_data['email']; ?><br><br>
							<button type="#" class="the col-3"><i class="fab fa-cc-visa t"></i></button>
							<button type="#" class="the col-3"><i class="fab fa-paypal t"></i></button>
							<button type="#" class="the col-3"><i class="fas fa-ship t"></i></button><br>
						</div>
					</div>

					<div id="ship" class="col-12">
						<br>
						<button type="#" class="shipbt col-md-5 col-12"><i class="fas fa-shipping-fast shico"></i><br>FREE SHIPPING <br>OVER $50</button>
						<button type="#" class="shipbt col-md-5 col-12"><i class="fas fa-exchange-alt shico"></i><br>HASSLE-FREE <br>RETURNS</button>
						<button type="#" class="shipbt col-md-10 col-12"><i class="far fa-credit-card shico"></i><br>PAY LATER WITH AFTERPAY</button>
					</div>
					<br>
					<form method="get" action="payment.php">
						<div id="total" class="col-10">
							<b class="col-6">SHIPPING : <br><h3>0</h3></b>
							<b class="col-6">SUB TOTAL :<br><h3>$<?php echo $total; ?></h3></b>
						</div>
						<br><br>
						<div id="tinhtien" class="col-12">
							<button type="submit" id="bt2" class="col-md-5 col-12">VIEW BAG</button>
							<input type="number" name="total_price" value="<?php echo $total; ?>" style="display: none">
							<button type="submit" name="btn_check_out" id="bt" class="col-md-5 col-lg-6 col-12">EXPRESS CHECK OUT</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>


	<!-- FOOTER -->

	<footer id="footer" class="wow fadeInUp">
		<div class="container">
			<div class="row">
				<div class="col-12" id="footer-flex">
					<div class="logo logo-ft d-none d-md-block col-md-4 col-lg-4">
						<a href="#"><img src="img/JamesFurlinn-logo-ft.png"></a>
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