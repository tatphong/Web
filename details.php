<?php 
require_once('php/dbo.php');
require_once('php/common.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>James Furlinn | Detail</title>
    <!-- Bootstrap -->
    <link rel="shortcut icon" type="image/png" href="Fetoria-black.png"/>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="slick/slick.css" rel="stylesheet">
	<link href="slick/slick-theme.css" rel="stylesheet">
	<link href="css/JF.css" rel="stylesheet">
	<link href="css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="css/details.css">

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
<!--	<br>
	<div class="container">
		<div class="row">
		<div class="pr-info col-12 wow fadeInUp">
			
		</div>
		</div>
	</div>-->


<!-- BANNER 2 + PR-INFO 2 -->
<!------------------------------------------------------------------- CONTENT ------------------------------------------------------------------>
   	
   	<div class="container-fluid content d-none d-md-none">
   		<div class="row">
   			<div class="col-lg-3 col-md-3 d-none d-md-block path">
   				<div class="container">Men/Shirts/Chain Print Shirt</div>
   			</div>
   			<div class="col-lg-1 col-md-1 path polygon"></div>
   		</div>
   	</div>
   	<div class="container content">
   		<div class="d-md-none productdetailslider"><!----------------slider-mobile-------------------->
				<div class="multi-slider1">
					<div class="productdetail">
						<div class="row">
							<div class="col-12 mobileslider">
								<img src="img/SHIRTS/CHAIN PRINT SHIRT/4115498402_1_1_1.jpg" alt="">
								
							</div>
						</div>
					</div>
					<div class="productdetail">
						<div class="row">
							<div class="col-12 mobileslider">
								<img src="img/SHIRTS/CHAIN PRINT SHIRT/4115498402_2_2_1.jpg" alt="">
								
							</div>
						</div>
					</div>
					<div class="productdetail">
						<div class="row">
							<div class="col-12 mobileslider">
								<img src="img/SHIRTS/CHAIN PRINT SHIRT/4115498402_2_1_1.jpg" alt="">
								
							</div>
						</div>
					</div>
					<div class="productdetail">
						<div class="row">
							<div class="col-12 mobileslider">
								<img src="img/SHIRTS/CHAIN PRINT SHIRT/4115498402_2_3_1.jpg" alt="">
								
							</div>
						</div>
					</div>
					<div class="productdetail">
						<div class="row">
							<div class="col-12 mobileslider">
								<img src="img/SHIRTS/CHAIN PRINT SHIRT/4115498402_2_6_1.jpg" alt="">
								
							</div>
						</div>
					</div>
					<div class="productdetail">
						<div class="row">
							<div class="col-12 mobileslider">
								<img src="img/SHIRTS/CHAIN PRINT SHIRT/4115498402_6_1_1.jpg" alt="">
								
							</div>
						</div>
					</div>
				</div>
			</div><!----------------slider-mobile-------------------->
   		<div class="row">
   			<div class="col-lg-7 col-md-7 d-none d-md-block hinh1">
   				<img src="img/SHIRTS/CHAIN PRINT SHIRT/4115498402_1_1_1.jpg" alt="">
   			</div>

   			<div class="col-lg-5 col-md-5 col-12 detailboxtext">
   				<div class="row">
					<div class="col-lg-12 col-md-12 tensanpham">
						<h4>CHAIN PRINT SHIRT</h4>
					</div>
					<div class="col-lg-12 col-md-12 masanpham">
						#JF00255
					</div>
					<div class="col-lg-12 col-md-12 cost">
						$55.00
					</div>
					<div class="col-lg-12 col-md-12 color clearfix">
						<ul>
							<li>COLOR:</li>
							<li class="color1"></li>
							<li class="color2"></li>
						</ul> 
					</div>
		
					<div class="col-lg-12 col-md-12">
						<div class="row">
							<div class="col-lg-6 col-md-6 size">
							SIZE
							</div>
							<div class="col-lg-6 col-md-6 dropdown">
								<select>
									<option value="S">S</option>
									<option value="M">M</option>
									<option value="L">L</option>
									<option value="XL">XL</option>
									<option value="XXL">XXL</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 sizeguide">
						<ins><a href="#">What's my size?</a></ins>
					</div>
					<div class="col-lg-12 col-md-12">
						( If the desired size is not available, select the product to know when it will be back in stock! ) 
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="row">
							<div class="col-lg-6 col-md-6 quantity">
							QUANTITY:
							</div>
							<div class="col-lg-6 col-md-6 dropdown">
								<select>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-lg-12 addtocart clearfix">
						<a href="#">ADD TO CART</a>
					</div>
  					<div class="col-lg-12 addtowistlist">
						<a href="#">ADD TO WIST LIST</a>
					</div>
  				</div>
   				</div>
   			</div>
   			<div class="row">
   				<div class="col-lg-6 col-md-6 d-none d-md-block hinh2">
   					<img src="img/SHIRTS/CHAIN PRINT SHIRT/4115498402_2_2_1.jpg" alt="">
   				</div>
   				<div class="col-lg-6 col-md-6 ">
   					<div class="discription">DESCRIPTION:</div>
   					Straight off the catwalk, the DNA Evolution fashion 
					show was inspired by Sicilian tradition,reworked to
					convey a new ironic and innovative vision.
					<br><br>
					Three-piece suit in pinstripe stretch wool:<br>
					• Slim Sicilia fit<br>
					• Jacket with peak lapels, flap pockets and a 
					breast pocket<br>
					• Single-breasted fastening with a single button 
					and lined<br>
					• V-neck vest with four buttons<br>
					• Pants with front slant pockets andrear buttoned 
					welt pockets
   				</div>
   			</div>
   			<div class="row">
   				<div class="col-lg-6 col-md-6 d-none d-md-block hinh3">
   					<img src="img/SHIRTS/CHAIN PRINT SHIRT/4115498402_2_1_1.jpg" alt="">
   				</div>
   				<div class="col-lg-6 col-md-6 d-none d-md-block hinh4">
   					<img src="img/SHIRTS/CHAIN PRINT SHIRT/4115498402_6_1_1.jpg" alt="">
   				</div>
   			</div>
			<div class="row">
  				<div class="col-lg-12 col-md-12 abc ">
   				
   					<div class="col-lg-4 col-md-4 col-3"><hr color="#000" width="100%"></div>
   					<div class="col-lg-4 col-md-4 col-6 youmayalsolike">YOU MAY ALSO LIKE</div>
   					<div class="col-lg-4 col-md-4 col-3"><hr color="#000" width="100%"></div>
   				</div>   				
   			</div>
   			<div class="youmayalsolikeslider ">
				<div class="multi-slider2">
					<div class="alsolikeproduct">
						<div class="row">
							<div class="col-12">
								<a href="details.php"><img src="img/SHIRTS/PIQUÉ SHIRT WITH STAND-UP COLLAR/6264320403_1_1_1.jpg" alt=""></a>
								
							</div>
							<div class="col-12 alsolikeproductname">
								<b>Piqué Shirt With Stand-up Collar</b><br>
								$50.00
							</div>
						</div>
					</div>
					<div class="splq2">
						<div class="row">
							<div class="col-12">
								<a href="details.php"><img src="img/SHIRTS/RELAXED FIT OVERSHIRT/8062410505_1_1_1.jpg" alt=""></a>
								
							</div>
							<div class="col-12 alsolikeproductname">
							<b>Relaxed Fit Overshirt</b><br>
								$50.00
							</div>
						</div>
					</div>
					<div class="splq3">
						<div class="row">
							<div class="col-12 ">
								<a href="details.php"><img src="img/SHIRTS/SHIRT/4128476400_1_1_1.jpg" alt=""></a>
								
							</div>
							<div class="col-12 alsolikeproductname">
								<b>Relaxed Fit Overshirt</b><br>
								$60.00
							</div>
						</div>
					</div>
					<div class="splq1">
						<div class="row">
							<div class="col-12">
								<a href="details.php"><img src="img/SHIRTS/SHIRT WITH SLEEVE TABS/7545402250_1_1_1.jpg" alt=""></a>
								
							</div>
							<div class="col-12 alsolikeproductname">
								<b>Shirt With Sleeve Tabs</b><br>
								$45.00
							</div>
						</div>
					</div>
					<div class="splq2">
						<div class="row">
							<div class="col-12">
								<a href="details.php"><img src="img/SHIRTS/STRIPED SHIRT/0975423800_1_1_1.jpg" alt=""></a>
								
							</div>
							<div class="col-12 alsolikeproductname">
								<b>Striped Shirt</b><br>
								$48.00
							</div>
						</div>
					</div>
					<div class="splq3">
						<div class="row">
							<div class="col-12">
								<a href="details.php"><img src="img/SHIRTS/STRIPED SHIRT WITH SLEEVE TABS/7545405250_1_1_1.jpg" alt=""></a>
								
							</div>
							<div class="col-12 alsolikeproductname">
								<b>Striped Shirt With Sleeve Tabs</b><br>
								$50.00
							</div>
						</div>
					</div>
				</div>
				<button class="prevbtn"><i class="fas fa-angle-left"></i></button>
				<button class="nextbtn"><i class="fas fa-angle-right"></i></button>
			</div>
  <hr width="100%" color="#777"> 
  			<div class="col-lg-12 col-12">
  				<div class="row">
					<div class="col-lg-7 col-md-7 col-12 reviews">
						REVIEWS
					</div>
					<div class="col-lg-5 col-md-5 d-none d-md-block writereview">
						WRITE REVIEW
   					</div>
   				</div>
   			</div>
   			<div class="row">
   				<div class="col-lg-7 col-md-7 col-12 reviewcontentbox">
   					<div class="row">
						<div class="col-lg-12 col-md-12 col-12 reviewcontent">
							<b>Steve-Rogers · 5 months ago</b><br>
							LOOK GRATE!!! <br>
							I ordered the blue suit. Looks great. Haven't worn it yet but even
							before tailoring it looked good; had it tailored and it looks fantastic.
							Fit of the pants was trim without being tight . . . something to 
							consider if you have stocky legs.
						</div>
						<div class="col-lg-12 col-md-12 col-12 reviewcontent">
							<b>Mr.Stark · 6 months ago</b><br>
							Fantastic Look, Perfect Classic Cut & High Quality <br>
							Just purchased from Brooks Brothers Shop in Dubai. It's my first suit from BB although I have many sports coats and blazers made by BlackBerry even Own Make series. Very high quality wool in sharkskin shade. Tailoring is amazing as it should be expected from BB, jacket was perfectly fit at size 40 R on me but just I did alteration on the pants waist and made 1" larger.
						</div>
						<div class="col-lg-12 col-md-12 col-12 reviewcontent">
							<b>Natasha_Romanoff · 7 months ago</b><br>
							Exceptionally GOOD <br>
							I purchased this suit in Aug. and start to wearing for a month. It's a traditional suit that is moderate in every aspect, no exaggeration, nor ostentation. Still makes me feel confident and well-arranged. I ordered 38S, which automatically makes my pant size 32(waist). Fit is great, comfortable, no need to adjustment for me (My measurement - 5' 8", 143 pounds). Highly recommended. Thanks...
						</div>
						<div class="col-lg-12 col-md-12 col-12 ">
							<ins><em><a href="contact.php" class="morereview">More reviews</a></em></ins>
						</div>
  					</div>
   				</div>
   				<div class="col-lg-5 col-md-5 d-none d-md-block writereviewbox">
   					<form method="post">
   						<!---Noi dung--->
						<div class="row margin10">
							<div class="col-lg-12 col-md-12 d-md-none d-lg-block">
								<textarea cols="40" rows="15" id="com" required></textarea>
							</div>
							<div class="col-lg-12 col-md-12 d-lg-none">
								<textarea cols="30" rows="15" id="com2" required></textarea>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="row margin10">
						<div class="col-lg-12 col-md-12">
							<input type="submit" value="SEND" class="sendbtn">
							<input type="reset" value="RESET" class="resetbtn">
						</div>
					</div>  
					</form>	
   				</div>
   				<div class="col-lg-5 col-md-5 col-12 d-md-none writereview">
						WRITE REVIEW
   				</div>
   			</div>
  			<div class="col-lg-12 col-md-12 ">
   				<div class="row">
   					<div class="col-lg-4 col-md-4 col-3"><hr color="#000" width="100%"></div>
   					<div class="col-lg-4 col-md-4 col-6 recentlyviewed">RECENTLY VIEWED</div>
   					<div class="col-lg-4 col-md-4 col-3"><hr color="#000" width="100%"></div>
   				</div>   				
   			</div>
   			<div class="recentlyviewedsklider">
				<div class="multi-slider3">
					<div class="recentlyproduct">
						<div class="row">
							<div class="col-12 ">
								<a href="details.php"><img src="img/SHIRTS/TRAVELLER COLLECTION SHIRT/5445450800_1_1_1.jpg" alt=""></a>
								
							</div>
							<div class="col-12 recentlyproductname">
								<b>Traveller Collection Shirt</b><br>
								$40.00
							</div>
						</div>
					</div>
					<div class="recentlyproduct">
						<div class="row">
							<div class="col-12 ">
								<a href="details.php"><img src="img/SHIRTS/FLOWING STRIPED SHIRT 03/3057429615_1_1_1.jpg" alt=""></a>
								
							</div>
							<div class="col-12 recentlyproductname">
								<b>Flowing Striped Shirt</b><br>
								$40.00
							</div>
						</div>
					</div>
					<div class="recentlyproduct">
						<div class="row">
							<div class="col-12 ">
								<a href="details.php"><img src="img/SHIRTS/TECHNICAL SHIRT/4280222505_1_1_1.jpg" alt=""></a>
								
							</div>
							<div class="col-12 recentlyproductname">
								<b>Technical Shirt</b><br>
								$50.00
							</div>
						</div>
					</div>
					<div class="recentlyproduct">
						<div class="row">
							<div class="col-12">
								<a href="details.php"><img src="img/SHIRTS/TECHNICAL SHIRT 02/4280222800_1_1_1.jpg" alt=""></a>
								
							</div>
							<div class="col-12 recentlyproductname">
							<b>Technical Shirt</b><br>
								$45.00
							</div>
						</div>
					</div>
					<div class="recentlyproduct">
						<div class="row">
							<div class="col-12 ">
								<a href="details.php"><img src="img/SHIRTS/TEXTURED WEAVE TWILL SHIRT/5445454250_1_1_1.jpg" alt=""></a>
								
							</div>
							<div class="col-12 recentlyproductname">
								<b>Texture Weave Twill Shirt</b><br>
								$60.00
							</div>
						</div>
					</div>
					<div class="recentlyproduct">
						<div class="row">
							<div class="col-12">
								<a href="details.php"><img src="img/SHIRTS/RELAXED FIT OVERSHIRT/8062410505_1_1_1.jpg" alt=""></a>
							</div>
							<div class="col-12 recentlyproductname">
								<b>Relaxed Fit Overshirt</b>
								<br>
								$55.00
							</div>
						</div>
					</div>
				</div>
				<button class="prevbtn"><i class="fas fa-angle-left"></i></button>
				<button class="nextbtn"><i class="fas fa-angle-right"></i></button>
			</div>
   			
   			
   </div><!-- Container -->

    


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
<script src="js/related-item.js"></script>
<script src="js/related-item2.js"></script>
<script src="js/related-item3.js"></script>
<script>
	  new WOW().init();
</script>
 <!-- SCRIPT -->
  </body>
</html>