<?php
session_start();
if ( isset( $_REQUEST[ 'btnSubmitAD' ] ) ) {
	require_once( 'php/dbo.php' );
	$username = $_POST[ 'uname' ];
	$result = $conn->query( "select * from ql_user where username = '" . $username . "'" );
	if ( $result->num_rows > 0 ) {
		$rows = $result->fetch_assoc();
		if ( password_verify($_POST[ 'psw' ],$rows[ 'pwd' ]) ) {
			if ($rows['admin']>0)
			$_SESSION[ 'adlogin' ] = $rows['uid'];
			else echo "<script> alert('You do not have admin permission!!!') </script>";

		} else echo "<script> alert('Password incorrect!!!') </script>";
	}
	else echo "<script> alert('Admin name incorrect!!!') </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>James Furlinn | Admin Login</title>
	<!-- Bootstrap -->
	<link rel="shortcut icon" type="image/png" href="Fetoria-black.png"/>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="slick/slick.css" rel="stylesheet">
	<link href="slick/slick-theme.css" rel="stylesheet">
	<link href="css/JF.css" rel="stylesheet">
	<link href="css/all.css" rel="stylesheet">
	<link href="css/login.css" rel="stylesheet">
	<link href="wow/animate.css" rel="stylesheet">
</head>

<body>
	<?php
	if ( !empty( $_SESSION[ 'adlogin' ] ) ) {
		//echo 'Login success with ' . $_SESSION[ 'login' ] . '<br /> <a href="index.php"> Press here to continue</a>';
		header("location:http://localhost:".$_SERVER['SERVER_PORT']."/PRJ_Sem_2.1/dash.php");die();

		//session_destroy();
	} else {
		?>

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
					<div class="col-4 col-lg-7 icon">
						ADMIN
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

	<!-- BANNER 1 + PR-INFO 1-->
	<!--
<div class="row" >	
	<div class="col-5 wow fadeInDown logo-1st"><img src="img/JamesFurlinn-logo-1st.png"></div>
	<div class="firstbanner banner wow fadeInDown col-12">
		<img src="img/bannerIndex/bannerindex1.jpg" class="img-fluid">
		<img src="img/bannerIndex/bannerindex2.jpg" class="img-fluid">
		<img src="img/bannerIndex/bannerindex3.jpg" class="img-fluid">
		<img src="img/bannerIndex/bannerindex4.jpg" class="img-fluid">
		<img src="img/bannerIndex/bannerindex5.jpg" class="img-fluid">
		<img src="img/bannerIndex/bannerindex6.jpg" class="img-fluid">
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="pr-info col-12 wow fadeInLeft">
			
		</div>
	</div>
</div>
-->

	<!-- BANNER 1 + PR-INFO 1-->

	<!-- PR -->
	<!--<div class="container">
	<div class="row">
		<div class="col-12" id="pr-list">
		
		</div>
	</div>
</div>-->
	<!-- PR -->

	<!-- BANNER 2 + PR-INFO 2 -->
	<!--
	<br>
	<div class="container">
		<div class="row">
		<div class="pr-info col-12 wow fadeInUp">
			
		</div>
		</div>
	</div>
-->


	<!-- BANNER 2 + PR-INFO 2 -->
	<!------------------------------------------------------------------- CONTENT ------------------------------------------------------------------>


	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12 loginbox wow fadeInUp">
				<form action="adlogin.php" method="post">
					<div class="col-lg-12 col-md-12 col-12 logintitle">ADMIN SIGN IN</div>
					<div class="col-lg-12 col-md-12 d-none d-md-block connectnow">Connect now using</div>
					<div class="col-lg-12 col-md-12 d-none d-md-block loginbysociallink">
						<a href="https://www.facebook.com/" class="facebook btn">
         			<i class="fab fa-facebook-f"></i></a>
					





						<a href="https://www.google.com/" class="google btn">
         			<i class="fab fa-google-plus-g"></i></a>
					





					</div>
					<div class="col-lg-12 col-md-12 d-none d-md-block or">Or</div>
					<div class="col-lg-12 col-md-12 col-12">
						<!--<label class="username" for="uname"><b>User name:</b></label>-->
						<input class="user" type="text" placeholder="Email or username" name="uname" required><br><br>
						<!--<label class="password" for="psw"><b>Password:</b></label>-->
						<input class="pass" type="password" placeholder="Password" name="psw" required><br><br>
						<button type="submit" name="btnSubmitAD" id="loginbtn" class="d-none d-md-block">Sign in</button><br>

						<label class="checkboxcustom">Remember your account
					  	<input type="checkbox" checked="checked"><span class="checkmark"></span>
					</label>
						<p><a href="#" class="createaccount">Forgot username/password?</a>
						</p>
						<p><a href="register.php" class="createaccount">Create an account</a>
						</p>
					</div>
				</form>
			</div>
		</div>
	</div>




	<!--PHP check user pwd--!>
	
	


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

	<?php
	}
	?>
	
</body>

</html>
