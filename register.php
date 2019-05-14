<?php
require_once( 'php/common.php' );
session_start();
require_once( 'php/dbo.php' );
if ( isset($_REQUEST[ 'btnSubmit' ]) ) {
	$value = "(NULL,'" . $_POST[ 'name' ] . "','" . $_POST[ 'email' ] . "','" . $_POST[ 'phone' ] . "','" . password_hash( $_POST[ 'pass' ], PASSWORD_DEFAULT ) . "','" . $_POST[ 'add' ] . "')";
	$elekey = "(`uid`,`username`,`email`,`phone`,`pwd`,`address`)";
	dbo_insert( "`ql_user`", $elekey, $value );
	$_SESSION[ 'login' ] = $_POST[ 'name' ];
}
if ( isLogined() )header( "Location:http://localhost/PRJ_Sem_2.1/" );
else{
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
						<a href="profile.php" title="Shopping Bag"><i class="fas fa-shopping-bag"></i></a>
					</div>
					<div class="col-4 col-lg-3 icon">
						<a href="login.php" title="Sign in"><i class="far fa-user"></i></a>
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

	<div class="container-fluid">
		<div class="row">
			<div class="web col-12">
				<div class="col-lg-6 d-none d-lg-block wow fadeInUp">
					<img src="img/4978008630_2_1_1.jpg" id="img">
				</div>
				<div id="banner" class="col-lg-6 offset-md-1 offset-lg-0 col-md-10 col-12 wow fadeInUp">
					<form method="post">
						<div id="form">
							<p id="text" align="center">
								<h2>
									<font color="#c77000">Sign Up</font>
								</h2>
							</p>
							Your name
							<br>
							<input pattern="[^0-9]{2,}" type="text" name="name" class="input col-12">
							<br><br> Your email
							<br>
							<input type="email" name="email" class="input col-12">
							<br><br> Phone number
							<br>
							<input type="text" pattern="[0-9]{10,11}" name="phone" class="input col-12">
							<br><br> Password
							<br>
							<input type="password" name="pass" class="input col-12">
							<br><br> Confirm Password
							<br>
							<input type="password" name="pass" class="input col-12">
							<br><br> Your Address
							<br>
							<input type="text" name="add" class="input col-12">
							<br><br> Gender
							<br>
							<input type="radio" name="Gen" checked> Male &nbsp;
							<input type="radio" name="Gen"> Female &nbsp;
							<input type="radio" name="Gen" checked> Different
							<br><br> Your Birthday
							<br><br>
							<select class="sl col-lg-2 col-3" id="dd">
								<!--cần file js đồ án trước thì inb :V -->
							</select>
							<select class="sl col-lg-2 col-3" id="mm" onChange="ddmmyy()">

				</select>

						






							<select class="sl col-lg-2 col-3" id="yy" onChange="ddmmyy()">

				</select>

						






							<br><br>
							<input type="checkbox" id="check"> &nbsp;Accept to our policy.
							<br><br>
							<a href="" id="link"><button type="submit" id="send" name="btnSubmit" onClick="dky()" class="col-6">CREATE ACCOUNT</button></a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!--PHP-->


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
<?php } ?>