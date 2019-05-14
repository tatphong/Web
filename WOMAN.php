<?php require_once('php/common.php');
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>James Furlinn | Woman</title>
	<!-- Bootstrap -->
	<link rel="shortcut icon" type="image/png" href="Fetoria-black.png" />
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="slick/slick.css" rel="stylesheet">
	<link href="slick/slick-theme.css" rel="stylesheet">
	<link href="css/JF.css" rel="stylesheet">
	<link rel="stylesheet" href="css/WOMAN.css">
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
			<div class="banner col-12">
				<img src="hinh/45.jpg" alt="">
				<img src="WOMEN/banner_WOMAN.jpg" alt="">
				<img src="hinh/banner.jpg" alt="">
				<img src="WOMAN_IMG/lookbook_3.jpg" alt="">
			</div>
		</div>
	</div>
	<!--textcenter1-->
	<div class="container wow fadeInDown">
		<div class="row">
			<div class="section-heading col-12">
				<span>FURLINN’S DRESS LINE</span>
			</div>
			<div class="text col-12 d-none d-md-block col-md-12">
				Choose a dress to make your day!
			</div>
		</div>
	</div>
	<!--line1-->
	<div class="container wow fadeInUp">
		<div class="row">
			<div class="line1img1 col-6 col-md-7">
				<a href="details.php">
					<div class="imgline1img1 col-12"><img src="WOMAN_IMG/4786040971_1_1_1.jpg" alt=""></div>
					<div class="textline1img1 col-12"><b>Poppy Dress-Burgundy</b><br>$350</div>
				</a>
			</div>
			<div class="line1img2 col-6 col-md-5">
				<a href="details.php">
					<div class="imgline1img2 col-12"></div><img src="WOMAN_IMG/2038617800_9_2_1 copy.jpg" alt="">
					<div class="textline1img2 col-12"><b>Lolita Dress-Black</b><br>$350</div>
				</a>
			</div>
		</div>
	</div>
	<!--line2-->
	<div class="container wow fadeInUp">
		<div class="row">
			<div class="line2img1 col-12 col-md-7">
				<a href="details.php">
					<div class="imgline2img1 col-12"><img src="WOMAN_IMG/1198002251_9_2_1 copy.jpg" alt=""></div>
					<div class="textline2img1 col-12"><b>Celine Dress-Light Beige</b><br>$350</div>
				</a>
			</div>
			<div class="line2img2 d-none d-md-block col-md-5">
				<a href="details.php">
					<div class="imgline2img2 col-12"></div><img src="WOMAN_IMG/0097024330_2_1_1.jpg" alt="">
					<div class="textline2img2 col-12"><b>Mini Flowers jumpsuit-Black</b><br>$350</div>
				</a>
			</div>
		</div>
	</div>

	<!--textcenter2-->
	<div class="container wow fadeInDown">
		<div class="row">
			<div class="section-heading col-12">
				<span>FURLINN’S SHIRT LINE</span>
			</div>
			<div class="text col-12 d-none d-md-block col-md-12">
				Choose your shirt, choose your style!
			</div>
		</div>
	</div>
	<!--line3-->
	<div class="container wow fadeInUp">
		<div class="row">
			<div class="line3img1 d-none d-md-block col-md-5">
				<a href="details.php">
					<div class="imgline3img1 col-12"><img src="WOMAN_IMG/2235666251_2_1_1.jpg" alt=""></div>
					<div class="textline3img1 col-12"><b>White Lines Shirt</b><br>$350</div>
				</a>
			</div>
			<div class="line3img2 d-none d-md-block col-md-7">
				<a href="details.php">
					<div class="imgline3img2 col-12"></div><img src="WOMAN_IMG/0085335450_2_1_1.jpg" alt="">
					<div class="textline3img2 col-12"><b>Woman in Art Sweater</b><br>$350</div>
				</a>
			</div>
		</div>
	</div>
	<!--line4-->
	<div class="container  wow fadeInUp">
		<div class="row">
			<div class="line4img1 d-none d-md-block col-md-5 order-md-3 wow fadeInLeft">
				<a href="details.php">
					<div class="imgline4img1 col-12"><img src="WOMAN_IMG/3564060712_2_3_1.jpg" alt=""></div>
					<div class="textline4img1 col-12"><b>Celine Dress-Light Beige</b><br>$350</div>
				</a>
			</div>
			<div class="line4img2 col-12 col-md-7 order-1 order-md-4 wow fadeInRight">
				<a href="details.php">
					<div class="imgline4img2 col-12"></div><img src="WOMAN_IMG/9598009800_2_3_1.jpg" alt="">
					<div class="textline4img2 col-12"><b>Basic Black Shirt</b><br>$350</div>
				</a>
			</div>
		</div>
	</div>
	<!--line3-->
	<div class="container wow fadeInUp">
		<div class="row">
			<div class="line3img1 col-6 d-md-none">
				<a href="details.php">
					<div class="imgline3img1 col-12"><img src="WOMAN_IMG/2235666251_2_1_1.jpg" alt=""></div>
					<div class="textline3img1 col-12"><b>White Lines Shirt</b><br>$350</div>
				</a>
			</div>
			<div class="line3img2 col-6 d-md-none">
				<a href="details.php">
					<div class="imgline3img2 col-12"></div><img src="WOMAN_IMG/0085335450_2_1_1.jpg" alt="">
					<div class="textline3img2 col-12"><b>Woman in Art Sweater</b><br>$350</div>
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
				Your style, your choose!
			</div>
		</div>
	</div>
	<!--line5-->
	<div class="container  wow fadeInUp">
		<div class="row">
			<div class="line5img1 col-7">
				<a href="details.php">
					<div class="imgline5img1 col-12"><img src="WOMAN_IMG/1432004023_2_31_1.jpg" alt=""></div>
					<div class="textline5img1 col-12"><b>Leather Dark Beige Crossbody Bag</b><br>$350</div>
				</a>
			</div>
			<div class="line5img2 col-5">
				<a href="details.php">
					<div class="imgline5img2 col-12"></div><img src="WOMAN_IMG/3240001090_1_1_1.jpg" alt="">
					<div class="textline5img2 col-12"><b>Basic High Heels-Mustard</b><br>$350</div>
				</a>
			</div>
		</div>
	</div>
	<!--line6-->
	<div class="container wow fadeInUp">
		<div class="row">
			<div class="line6img2 col-12 d-md-none">
				<a href="details.php">
					<div class="imgline6img2 col-12"></div><img src="WOMAN_IMG/3370004102_2_5_1.jpg" alt="">
					<div class="textline6img2 col-12"><b>Beige Leather Bucket</b><br>$350</div>
				</a>
			</div>
			<div class="line6img1 col-12 col-md-7">
				<a href="details.php">
					<div class="col-6 line6img11">
						<div class="imgline6img1 col-12"><img src="WOMAN_IMG/7790304001_1_1_1.jpg" alt=""></div>
						<div class="textline6img1 col-12"><b>White Letter Clutch</b><br>$350</div>
					</div>
					<div class="col-6 line6img12">
						<div class="imgline6img1 col-12"><img src="WOMAN_IMG/3832001040_1_1_1.jpg" alt=""></div>
						<div class="textline6img1 col-12"><b>Velvet Bow Mules</b><br>$350</div>
					</div>
				</a>
			</div>
			<div class="line6img2 d-none d-md-block col-md-5">
				<a href="details.php">
					<div class="imgline6img2 col-12"></div><img src="WOMAN_IMG/3370004102_2_5_1.jpg" alt="">
					<div class="textline6img2 col-12"><b>Beige Leather Bucket</b><br>$350</div>
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
						<a href="index.php"><img src="img/JamesFurlinn-logo-ft.png"></a>
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