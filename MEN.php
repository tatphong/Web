<?php require_once('php/common.php');
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>James Furlinn | Men</title>
	<!-- Bootstrap -->
	<link rel="shortcut icon" type="image/png" href="Fetoria-black.png" />
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="slick/slick.css" rel="stylesheet">
	<link href="slick/slick-theme.css" rel="stylesheet">
	<link href="css/JF.css" rel="stylesheet">
	<link rel="stylesheet" href="css/MEN.css">
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
						<li id="men"><a href="#">MEN</a>
							<ul id="m">
								<li><a href="MEN.php"> All</a></li>
								<li><a href="Pants.php"> Pants</a></li>
								<li><a href="Shirt.php"> Shirt</a></li>
								<li><a href="Accesories.php"> Accesories</a></li>
							</ul>
						</li>
						<li id="woman"><a href="#">WOMAN</a>
							<ul id="w">
								<li><a href="WOMAN.php"> All</a></li>
								<li><a href="Dress-wm.php"> Dress</a></li>
								<li><a href="Shirt-wm.php"> Shirt</a></li>
								<li><a href="Accesories-wm.php"> Accesories</a></li>
							</ul>
						</li>
						<li id="col"><a href="#">COLLECTIONS</a>
							<ul id="c">
								<li><a href="JamesFurlinn-All.php"> All</a></li>
								<li><a href="JamesFurlinn-BMV.php"> Be My Valentine</a></li>
								<li><a href="JamesFurlinn-BNT.php"> Back to Nature</a></li>
								<li><a href="JamesFurlinn-SOB.php"> Shape of Beige</a></li>
							</ul>
						</li>
						<li id="up"><a href="contact.php">CONTACT</a></li>
					</ul>
				</nav>

				<div class="cart offset-1 col-3 offset-md-0 col-md-2">
					<div class="col-4 col-lg-3 icon" id="srch" title="Search">
						<i class="fas fa-search"></i>
					</div>
					<div class="col-4 col-lg-3 icon">
						<a href="profile.php" title="Shopping Bag"><i class="fas fa-shopping-bag"></i></a>
					</div>
					<div class="col-4 col-lg-6 icon">
						<?php
						uname_logout();
						?>
					</div>
				</div>


			</div>
		</div>



		<div class="row">
			<div class="hidden col-12" id="searchgia">
				<div class="container">
					<form action="search.php" method="post">
						<div class="row">
							<div class="col-12 col-md-9 col-lg-8 search-op">
								<font color="white">PRODUCT'S NAME:</font> &nbsp;&nbsp;&nbsp;&nbsp;<input name="name" type="text" class="snc col-11 col-md-11">
							</div>
						</div>

						<div class="row">
							<div class="col-12 col-md-9 col-lg-8 search-op" id="search-flex">
								<div class="col-6 col-md-5 col-lg-5 sl">
									<font color="white">SEX:</font> <br>
									<select name="sex" class="snc col-12">
										<option>All</option>
										<option value="1">Woman</option>
										<option value="2">Men</option>
									</select>
								</div>

								<?php
								//php get category data from db
								$cate_data;
								dbo_select('*', '`category`', "", $cate_data);
								?>
								<div class="col-6 col-md-5 offset-md-1 sl">
									<font color="white">CATEGORY:</font><br>
									<select class="snc col-11" name="category">
										<option>All</option>
										<?php
										while ($cate_row = $cate_data->fetch_assoc()) {
											echo '<option value="' . $cate_row['cater_id'] . '">' . $cate_row['cater_name'] . '</option>';
										}
										?>
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
						<div class="row"><button id="sm" class="col-6 col-md-4 col-lg-3">SEARCH</button></div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- HEADER -->

	<!--banner-->
	<div class="container-fluid wow fadeInDown">
		<div class="row">
			<div class="firstbanner banner col-12">
				<img src="clothes men/MEN copy.jpg" alt="">
				<img src="clothes men/Men3.jpg" alt="">
				<img src="clothes men/15.jpg" alt="">
				<img src="clothes men/12.jpg" alt="">
			</div>
		</div>
	</div>
	<!--textcenter1-->
	<div class="container wow fadeInDown">
		<div class="row">
			<div class="section-heading col-12 ">
				<span>FURLINN’S SHIRT LINE</span>
			</div>
			<div class="text col-12 d-none d-md-block col-md-12">
				What do you think about the basic color shirt ?
			</div>
		</div>
	</div>
	<!--line1-->
	<div class="container  wow fadeInUp">
		<div class="row">
			<div class="line1img1 col-7">
				<a href="details.php"><img src="clothes men/1.jpg" alt=""></a>
			</div>
			<div class="boxline1img2 col-5">
				<div class="line1img2 col-12">
					<a href="details.php"><img src="clothes men/2.jpg" alt=""></a>
				</div>
				<div class="textline1 d-none d-md-block col-md-12"><a href="#">
						<p><b>Basic Embroided White Shirt</b><br>$350.00</p>
					</a></div>
			</div>
			<div class="textline11 col-12 d-md-none"><a href="details.php"><b>Basic Embroided White Shirt</b><br>$350.00</a></div>
		</div>
	</div>
	<!--line2-->
	<div class="container wow fadeInUp">
		<div class="row">
			<div class="line2img1 d-none d-md-block col-md-5">
				<a href="details.php">
					<div class="imgline2img1 col-12"><img src="clothes men/0975322400_2_1_1.jpg" alt=""></div>
					<div class="textline2img1 col-12"><b>Basic Denim Shirt</b><br>$350.00</div>
				</a>
			</div>
			<div class="line2img2 col-12 col-md-7">
				<a href="details.php">
					<div class="imgline2img2 col-12"></div><img src="clothes men/0072295305_2_1_1.jpg" alt="">
					<div class="textline2img2 col-12"><b>Navy Lines Shirt</b><br>$350.00</div>
				</a>
			</div>
		</div>
	</div>
	<!--line3-->
	<div class="container wow fadeInUp">
		<div class="row">
			<div class="line3 d-none d-md-block col-md-12">
				<a href="details.php">
					<div class="line3img col-12">
						<img src="clothes men/soft4_prev.jpg" alt="">
					</div>
					<div class="line3text col-12">
						<b>Black Oxford Sweater</b><br>$350.00
					</div>
				</a>
			</div>
		</div>
	</div>
	<!--textcenter2-->
	<div class="container wow fadeInDown">
		<div class="row">
			<div class="section-heading col-12 ">
				<span>FURLINN’S PANTS LINE</span>
			</div>
			<div class="text col-12 d-none d-md-block col-md-12">
				You look more perfect with our pants!
			</div>
		</div>
	</div>
	<!--line4-->
	<div class="container wow fadeInUp">
		<div class="row">
			<div class="line4img1 col-12 col-md-7">
				<a href="details.php">
					<div class="imgline4img1 col-12"><img src="clothes men/0706513401_2_4_1.jpg" alt=""></div>
					<div class="textline4img1 col-12"><b>Traveller Basic Pants</b><br>$350.00</div>
				</a>
			</div>
			<div class="line4img2 col-12 col-md-5">
				<a href="details.php">
					<div class="imgline4img2 col-12"></div><img src="clothes men/1608422401_2_1_1.jpg" alt="">
					<div class="textline4img2 col-12"><b>Skinny Pants</b><br>$350.00</div>
				</a>
			</div>
		</div>
	</div>
	<!--line5-->
	<div class="container wow fadeInUp">
		<div class="row">
			<div class="line5 d-none d-md-block col-md-12">
				<a href="details.php">
					<div class="line5img col-12">
						<img src="clothes men/ZARA-MAN-SPRINGSUMMER-2017-MENS-LOOKBOOK-04.jpg" alt="">
					</div>
					<div class="line5text col-12">
						<b>Oxford Traveller Skinny</b><br>$350.00
					</div>
				</a>
			</div>
		</div>
	</div>
	<!--textcenter3-->
	<div class="container wow fadeInDown">
		<div class="row">
			<div class="section-heading col-12 ">
				<span>FURLINN’S ACCESORIES</span>
			</div>
			<div class="text col-12 d-none d-md-block col-md-12">
				Choose your style, choose our accesories!
			</div>
		</div>
	</div>
	<!--line6-->
	<div class="container wow fadeInUp">
		<div class="row">
			<div class="line6img1 col-7">
				<a href="details.php">
					<div class="imgline6img1 col-12"><img src="clothes men/3212005090_9_2_1 copy.jpg" alt=""></div>
					<div class="textline6img1 col-12"><b>Leather Band Bag</b><br>$350.00</div>
				</a>
			</div>
			<div class="line6img2 col-5">
				<a href="details.php">
					<div class="imgline6img2 col-12"></div><img src="clothes men/white sneaker.jpg" alt="">
					<div class="textline6img2 col-12"><b>White Sneaker</b><br>$350.00</div>
				</a>
			</div>
		</div>
	</div>
	<!--line7-->
	<div class="container wow fadeInUp">
		<div class="row">
			<div class="line7img1 col-12 col-md-7 order-2 order-md-1">
				<a href="details.php">
					<div class="imgline7img1 col-12"><img src="clothes men/2615002202_9_2_1 copy.jpg" alt=""></div>
					<div class="textline7img1 col-12"><b>Light Mules</b><br>$350.00</div>
				</a>
			</div>
			<div class="line7img2 col-12 col-md-5 order-1 order-md-2">
				<a href="details.php">
					<div class="imgline7img2 col-12"></div><img src="clothes men/3245005040_9_2_1 copy.jpg" alt="">
					<div class="textline7img2 col-12"><b>Leather Basic Bag</b><br>$350.00</div>
				</a>
			</div>
		</div>
	</div>


	<!-- FOOTER -->

	<footer id="footer" class="wow fadeInUp">
		<div class="container">
			<div class="row">
				<div class="col-12" id="footer-flex">
					<div class="logo logo-ft d-none d-md-block col-md-4 col-lg-4">
						<a href="index.php"><img src="img/JamesFurlinn-logo-ft.png" alt=""></a>
					</div>

					<div class="info col-6 col-md-4 col-lg-4">
						<strong>CUSTOMER CARE </strong><br>
						Customer Service<br>
						Promotions<br>
						Shipping & Tracking<br>
						Returns & Exchanges<br>
						Size Guide<br>
						Product Care<br>
						<br>
						<strong id="fu">FOLLOW US </strong>&nbsp;&nbsp;<br class="d-block d-md-none">
						<a href="https://www.behance.net/"><i class="fab fa-behance"></i></a>
						<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
						<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
					</div>

					<div class="col-6 col-md-4 col-lg-4 info-hid">
						<strong>POLICIES</strong><br>
						Terms of use <br>
						Privacy Policy<br>
						Cookies Policy<br>
						<br>
						<strong>FEEDBACK</strong><br>
						Share your comments and<br>
						Suggestions with us <br>
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