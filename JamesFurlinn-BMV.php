<?php require_once('php/common.php'); session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>James Furlinn | Be My Valentine</title>
    <!-- Bootstrap -->
    <link rel="shortcut icon" type="image/png" href="Fetoria-black.png"/>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="slick/slick.css" rel="stylesheet">
	<link href="slick/slick-theme.css" rel="stylesheet">
	<link href="css/JF.css" rel="stylesheet">
	<link href="css/BMV.css" rel="stylesheet">
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
				<div class="col-4 col-lg-5 icon">
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
		<div class="row"><button id="sm" class="col-6 col-md-4 col-lg-3">SEARCH</button></div>
	</div>
</div>
</div>
</div>
<!-- HEADER -->

<!-- BANNER 1 + PR-INFO 1-->
<div class="container-fluid">
<div class="row" >	
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
		<div class="col-12 product-bst">
			<div class="text col-md-6 col-12">
			<div class="col-1 color-box  wow fadeInLeft"></div>
			<div class="col-11 txt  wow fadeInLeft">
				<h2>SPRING-19<br>
					<font color="#ba0013">BE MY VALENTINE</font>
				</h2>
				
				<p>
					Celebrate the season of love with FURLINN’s Valentine’s Day 2019 collection, which consists of unapologetically sweet and romantic fashion accessories that would delight anyone who loves love.
					<br><br>
					The fun and playful designs in this collection are inspired by the wonderful experience of falling in love. Go gaga for the eye-catching tote with a bright red acrylic heart-shaped handle, or the crossbody bag with an adorable cut-out heart detail. 
					<br><br>
					Whichever design you prefer, both make lovely arm candies that are perfect for a date night...
				</p>
				
			</div>
			</div>
			<div class="col-6  d-md-block d-none wow fadeInRight">
				<img src="img/charles-keith-spring-19-be-my-valentine-blog-desktop-slices-1-XL.jpg" class="img-fluid">
			</div>
		</div>
		
		<div class="col-12 d-md-none d-block wow fadeInRight">
				<br>
				<img src="img/charles-keith-spring-19-be-my-valentine-blog-desktop-slices-1-XL.jpg" class="img-fluid">
		</div>
	</div>
	
	<div class="row">
		<div class="col-12 product-bst">
			<div class="col-7 col-md-6 img-1  wow fadeInLeft">
				<img src="img/charles-keith-spring-19-be-my-valentine-blog-desktop-slices-5.jpg" class="img-fluid">
			</div>
			<div class="offset-5 col-7 img-2 wow fadeInRight">
				<img src="img/img-2.png" class="img-fluid">
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-12 product-bst row-2">
			<div class="col-12 col-md-7 wow fadeInLeft">
				<img src="img/bannercoll/charles-keith-emailer-valentine-day-2019-subscribers-exclusive-slices-3.jpg" class="img-fluid">
			</div>
			<div class="d-none d-md-block col-md-5 wow fadeInRight">
				<img src="img/charles-keith-spring-19-be-my-valentine-blog-desktop-slices-3.jpg" class="img-fluid img-4">
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-12 product-bst row-3">
			<div class="col-6  wow fadeInLeft">
				<img src="img/charles-keith-spring-19-be-my-valentine-blog-desktop-slices-6.jpg" class="img-fluid">
			</div>
			<div class="col-6 wow fadeInRight">
				<img src="img/charles-keith-spring-19-be-my-valentine-blog-desktop-slices-7.jpg" class="img-fluid">
			</div>
		</div>
	</div>
	
	<br>
	<div class="row">
		<div class="col-12 wow fadeInUp">
			<div class="col-12 product-bst discover">
				<hr class="col-1 col-md-3"><h4 class="col-10 col-md-6">DISCOVER OUR COLLECTION</h4><hr class="col-1 col-md-3">
			</div>
			
			<div class="col-12 wow fadeInUpBig">
				<div class="col-6 col-md-4 pr">
					<a href="#"><img src="img/CK2-50270175_BLACK-HEART-TOP-HANDLE-BAG.jpg" class="img-fluid">
					<p align="center">
						<strong>Heart-Shaped Top<br>Handle Bag</strong> <br>
								US$ 49.00
					</p>
					<button class="buy d-none d-md-none d-lg-block col-lg-6">See more</button></a>
				</div>
				
				<div class="col-6 col-md-4 pr">
					<a href="details.php"><img src="img/CK1-60900114_RED-HEART-DETAIL-PATENT-MARY-JANES.jpg" class="img-fluid">
					<p align="center">
						<strong>Heart Print Patent<br>Mary Janes</strong> <br>
								US$ 49.00
					</p>
					<button class="buy d-none d-md-none d-lg-block col-lg-6">See more</button></a>
				</div>
				
				<div class="col-6 col-md-4 pr">
					<a href="details.php"><img src="img/CK2-80270176_BLACK-HEART-HANDLE-CROSSBODY-BAG.jpg" class="img-fluid">
					<p align="center">
						<strong>Heart Handle<br>Crossbody Bag</strong> <br>
								US$ 49.00
					</p>
					<button class="buy d-none d-md-none d-lg-block col-lg-6">See more</button></a>
				</div>
				
				<div class="col-6 col-md-4 pr">
					<a href="details.php"><img src="img/CK1-71700024_PINK-LOVE-OVERSIZED-LACE-SNEAKERS.jpg" class="img-fluid">
					<p align="center">
						<strong>Heart Print Oversized Lace Sneakers</strong> <br>
								US$ 49.00
					</p>
					<button class="buy d-none d-md-none d-lg-block col-lg-6">See more</button></a>
				</div>
				
				<div class="col-6 col-md-4 pr">
					<a href="details.php"><img src="img/CK1-60580128_BLACK-PRINTED-BOW-KITTEN-HEELS.jpg" class="img-fluid">
					<p align="center">
						<strong>Printed Bow Kitten Heels</strong> <br>
								US$ 49.00
					</p>
					<button class="buy d-none d-md-none d-lg-block col-lg-6">See more</button></a>
				</div>
				
				<div class="col-6 col-md-4 pr">
					<a href="details.php"><img src="img/CK1-60280152_PINK-HEART-DETAIL-KITTEN-HEELS.jpg" class="img-fluid">
					<p align="center">
						<strong>Heart Print Kitten Heels</strong> <br>
								US$ 49.00
					</p>
					<button class="buy d-none d-md-none d-lg-block col-lg-6">See more</button></a>
				</div>
				
			</div>
		</div>
	</div>
</div>
<br><br>
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
				
				<div class="col-6 col-md-4 col-lg-4 info-hid" >
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