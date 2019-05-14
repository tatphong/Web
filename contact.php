<?php require_once('php/common.php');
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>James Furlinn | Contact Us</title>
	<!-- Bootstrap -->
	<link rel="shortcut icon" type="image/png" href="Fetoria-black.png" />
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="slick/slick.css" rel="stylesheet">
	<link href="slick/slick-theme.css" rel="stylesheet">
	<link href="css/JF.css" rel="stylesheet">
	<link href="css/all.css" rel="stylesheet">
	<link href="css/contact.css" rel="stylesheet">
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

	<!-- BANNER 1 + PR-INFO 1-->
	<!--<div class="row" >	
	<div class="col-5 wow fadeInDown logo-1st"><img src="img/JamesFurlinn-logo-1st.png"></div>
	<div class="firstbanner banner wow fadeInDown col-12">
		<img src="img/charles-keith-spring-19-be-my-valentine-blog-desktop-slices-1.jpg" class="img-fluid">
		<img src="img/Untitled-1.jpg" class="img-fluid">
		<img src="img/21.jpg" class="img-fluid">
		<img src="img/3.jpg" class="img-fluid">
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="pr-info col-12 wow fadeInLeft">
			
		</div>
	</div>
</div>-->

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
	<!--<br>
	<div class="container">
		<div class="row">
		<div class="pr-info col-12 wow fadeInUp">
			
		</div>
		</div>
	</div>
-->

	<!-- BANNER 2 + PR-INFO 2 -->
	<!------------------------------------------------------------------- CONTENT ------------------------------------------------------------------>

	<div class="container-fluid content wow fadeInDown">
		<div class="col-lg-12 col-md-12 contactbackground">
			<div class="row">
				<div class="col-lg-6 col-md-6 d-none d-md-block hinh1">
					<img src="img/showroom.jpg" alt="" class="img-fluid">
				</div>

				<div class="col-lg-5 col-md-6 otherway">
					<div class="col-lg-12 col-md-12 contactus">
						CONTACT US
					</div>
					<div class="col-lg-12 col-md-12 quote">
						For work, credentials, please feel free to get in touch.<br>
						We'd love to hear from you.
					</div>

					<form method="post">
						<!---User Name--->
						<div class="row info">
							<div class="col-lg-12 headline">
								<label for="user">Your name:</label>
							</div>
							<div class="col-lg-12">
								<input type="text" class="user" required>
							</div>
							<div class="clearfix"></div>
						</div>
						<!---Email--->
						<div class="row info">
							<div class="col-lg-12 headline">
								<label for="mail">Your email:</label>
							</div>
							<div class="col-lg-12">
								<input type="email" class="email" required>
							</div>
							<div class="clearfix"></div>
						</div>

						<!---Noi dung--->
						<div class="row info">
							<div class="col-lg-12 headline">
								<label for="com">Your message:</label>
							</div>
							<div class="col-lg-12">
								<input type="email" class="d-none d-md-none d-lg-block email" required>
								<input type="email" class="d-none d-md-none d-lg-block email" required>
								<input type="email" class="d-none d-md-none d-lg-block email" required>
								<input type="email" class="d-none d-md-none d-lg-block email" required>
								<input type="email" class="d-lg-none d-md-block d-none email" required>
								<input type="email" class="d-lg-none d-md-block d-none email" required>

								<input type="email" class="d-lg-none d-md-none email" required>
								<input type="email" class="d-lg-none d-md-none email" required>
								<input type="email" class="d-lg-none d-md-none email" required>
							</div>
							<div class="clearfix"></div>
						</div>
						<!---Phone--->
						<div class="row info">
							<div class="col-lg-12">
								<input type="submit" value="Send" class="sendbtn">
								<input type="reset" value="Reset" class="resetbtn">
							</div>
						</div>
					</form>
				</div>
				<!--<div class="col-lg-12 col-md-12 bypost">
					BY POST:
				</div>
				<div class="col-lg-12 col-md-12 d-none d-md-block ">
					<b>Customer Service Manager:</b> <br>
					100 Phoenix Avenue <br>
					Enfield, Connecticut 06082
				</div>
				<div class="col-lg-12 col-md-12 d-md-none ">
					<b>Customer Service Manager:</b> <br>
					100 Phoenix Avenue
					Enfield, Connecticut 06082
				</div>
				<div class="col-lg-12 col-md-12 byphone">
					BY PHONE:
				</div>
				<div class="col-lg-12 col-md-12 d-none d-md-block">
					<b>Within The U.S:</b> <br>
					<b>Phone:</b> 1.800.274.1815 <br>
					
					<b>Sunday - Saturday:</b><br>
					8am-9pm, ET <br>
					
					<b>Fax:</b> 1.800.274.1010 <br>
					
					<b>International:</b> <br>
					1.860.741.4800
				</div>
				<div class="col-lg-12 col-md-12 d-md-none">
					<b>Within The U.S:</b> <br>
					<b>Phone:</b> 1.800.274.1815 <br>
					
					<b>Sunday - Saturday:</b>
					8am-9pm, ET <br>
					
					<b>Fax:</b> 1.800.274.1010 <br>
					
					<b>International:</b>
					1.860.741.4800
				</div>-->
			</div>
		</div>
	</div>
	<!----------------------Form Contact  ---------------------------->
	<div class="container">
		<div class="col-lg-12 col-md-12 store">
			<div class="row wow fadeInLeft">
				<div class="offset-lg-1 offset-0 col-lg-4 col-md-6 us">
					<div class="row">
						<div class="col-lg-12 col-md-12 storename">
							FURLINN IN U.S
						</div>
						<div class="col-lg-12 col-md-12 address">
							Address: 8584 Valley Rd.Menomonee Falls.<br>
							Phone: +82454857274<br>
							Website: furlinnus.com
						</div>
					</div>
				</div>
				<div class="offset-lg-1 offset-0 col-lg-6 col-md-6 d-none d-md-block hinh">
					<img src="img/2.jpg" alt="">
				</div>
			</div>
			<div class="row wow fadeInRight">
				<div class="col-lg-6 col-md-6 d-none d-md-block hinh">
					<img src="img/NYCshowroom3.jpg" alt="">
				</div>
				<div class="offset-lg-1 offset-0 col-lg-4 col-md-6 vietnam">
					<div class="row">
						<div class="col-lg-12 col-md-12 storename">
							FURLINN IN VIETNAM
						</div>
						<div class="col-lg-12 col-md-12 address">
							Address: 102 Cach Mang Thang 8, Phuong 8, Quan 3, TP.HCM<br>
							Phone: +823857274<br>
							Website: furlinnvn.com
						</div>
					</div>
				</div>
			</div>
			<div class="row wow fadeInLeft">
				<div class="offset-lg-1 offset-0 col-lg-4 col-md-6 korea">
					<div class="row">
						<div class="col-lg-12 col-md-12 storename">
							FURLINN IN KOREA
						</div>
						<div class="col-lg-12 col-md-12 address">
							Address: Seoul-teukbyeolsi, Jongno-gu<br>
							Phone: +823857274<br>
							Website: furlinnkr.com
						</div>
					</div>
				</div>
				<div class="offset-lg-1 offset-0 col-lg-6 col-md-6 d-none d-md-block hinh">
					<img src="img/organisation-showrooms-fashion-week 2.jpg" alt="">
				</div>
			</div>
			<div class="row wow fadeInRight">
				<div class="col-lg-6 col-md-6 d-none d-md-block hinh">
					<img src="img/Poslovni-prostor-kompanije-Luna-Salt-Water-1.jpg" alt="">
				</div>
				<div class="offset-lg-1 offset-0 col-lg-4 col-md-6 france">
					<div class="row">
						<div class="col-lg-12 col-md-12 storename">
							FURLINN IN FRANCE
						</div>
						<div class="col-lg-12 col-md-12 address">
							Address: Cpt.Jean luc PICARD 52 RUE DES FLEURS 33500 LIBOURNE<br>
							Phone: +823857274<br>
							Website: furlinnfrance.com
						</div>
					</div>
				</div>
			</div>
			<div class="row wow fadeInLeft">
				<div class="offset-lg-1 offset-0 col-lg-4 col-md-6 germany">
					<div class="row">
						<div class="col-lg-12 col-md-12 storename">
							FURLINN IN GERMANY
						</div>
						<div class="col-lg-12 col-md-12 address">
							Address: Cpt.Jean luc PICARD 52 RUE DES FLEURS 33500 LIBOURNE<br>
							Phone: +823857274<br>
							Website: furlinngermany.com
						</div>
					</div>
				</div>
				<div class="offset-lg-1 offset-0 col-lg-6 col-md-6 d-none d-md-block hinh">
					<img src="img/germany.png" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div> <!-- Container Content -->


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