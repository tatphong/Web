<?php
//session login
require_once('php/common.php');
session_start();
if (!isLogined()) {
	header("location:http://localhost:" . $_SERVER['SERVER_PORT'] . "/PRJ_Sem_2.1/login.php");
}
//get data
require_once('php/dbo.php');
//get user
$user_res = "";
dbo_select("*", "ql_user", "uid='" . $_SESSION['login'] . "'", $user_res);
$row = $user_res->fetch_assoc();

//get dh
$dh_res = "";
dbo_select("*", "qldh", "uid='" . $row['uid'] . "'", $dh_res);
//return $row_dh at line 325

//thanks after check out and clear cart
if (isset($_REQUEST['tks'])) {
	echo "<script>alert('THANKS YOU')</script>";
	echo "<script>
				localStorage.clear();
		</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>James Furlinn | Profile</title>
	<!-- Bootstrap -->
	<link rel="shortcut icon" type="image/png" href="Fetoria-black.png" />
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="slick/slick.css" rel="stylesheet">
	<link href="slick/slick-theme.css" rel="stylesheet">
	<link href="css/JF.css" rel="stylesheet">
	<link href="css/profile.css" rel="stylesheet">
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
	<div class="container-fluid hidden" id="inner-add">
		<div id="inner-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-12" id="inner-white">
					<form action="php/user_change.php" method="post">
						<br>
						<div class="col-12">
							<img src="img/JamesFurlinn-logo.png" class="logo-inner">
						</div>
						<div class="offset-lg-1 col-lg-10 col-md-12 us2">
							<div class="offset-lg-0 col-lg-4 offset-md-1 col-md-3 col-12">
								<p align="left">
									<b class="col-12"> User Name</b><br>
									<input type="text" name="add_name" class="col-12 d-block d-md-none" pattern="[A-Za-z]{1,}">
									<b class="col-12"> Password</b><br>
									<input type="password" name="add_pwd" class="col-12 d-block d-md-none">
									<b class="col-12"> Phone</b><br>
									<input type="text" name="add_phone" class="col-12 d-block d-md-none" pattern="[0-9]{10,11}">
									<b class="col-12"> Email</b><br>
									<input type="email" name="add_email" class="col-12 d-block d-md-none">
									<b class="col-12"> Address</b><br>
									<input type="text" name="add_address" class="col-12 d-block d-md-none">
								</p>
							</div>

							<div class="col-lg-8 col-md-8 d-none d-md-block">
								<input type="text" name="edit_id" style="display: none" value="<?php echo $row['uid'] ?>">
								<input type="text" name="edit_name" class="col-12" pattern="[A-Za-z]{1,}">
								<input type="password" name="edit_pwd" class="col-12">
								<input type="text" name="edit_phone" class="col-12" pattern="[0-9]{10,11}">
								<input type="email" name="edit_email" class="col-12">
								<input type="text" name="edit_address" class="col-12">
							</div>
						</div>

						<button type="submit" name="btn_edit" class="offset-lg-6 col-lg-3 offset-md-5 col-md-5 col-11 add-inner">EDIT</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<img src="img/henry-co-1047241-unsplash.jpg" class="img-fluid banner">
		<div class="container">

			<div class="row">
				<div class="offset-5 col-lg-2 col-md-3 col-4 ">
					<i class="fas fa-circle col-12 cir-pro"></i>
					<i class="far fa-user fa-user-pro"></i>
				</div>
				<h3 class="user-na-pro col-12">
					<?php echo $row['username']; ?>
				</h3>
				<p align="center" class="col-12">
					<font color="#c77000">Joined on 30-02-2001</font>
				</p>
				<i class="fas fa-gem col-12" title="Diamond"></i>
			</div>
		</div>

		<!---------- show user info ------------->
		<div class="row">
			<div class="col-12 pro-info">
				<div class="col-12 btn-pro">
					<i class="fas fa-shopping-bag col-md-1 col-2" title="My Shopping Bag"></i>|&nbsp;<i class="fas fa-history col-md-1 col-2" title="History"></i>|<i class="fas fa-edit col-md-1 col-2" title="Edit Profile" id="edit"></i>
				</div>
				<div class="col-12 info-user">
					<div class="offset-lg-4 col-lg-1 col-4 offset-md-3 col-md-2">
						<br> &nbsp;&nbsp;User ID:<br> &nbsp;&nbsp;Phone:
						<br> &nbsp;&nbsp;Address:
						<br> &nbsp;&nbsp;Email:
						<br> &nbsp;&nbsp;Level:
						<br>
						<br>
					</div>
					<div class="col-lg-5 col-md-5 col-8 us">
						<br> &nbsp;&nbsp;
						<?php
						if ($row['admin'] == '1') echo "AD-";
						else if ($row['admin'] == '2') echo "MN-";
						else echo "US-";
						echo $row['uid'];
						?><br> &nbsp;&nbsp;
						<?php echo $row['phone'] ?><br> &nbsp;&nbsp;
						<?php echo $row['address'] ?><br> &nbsp;&nbsp;
						<?php echo $row['email'] ?>
						<br> &nbsp;&nbsp;201 - Diamond<br>
						<br>
					</div>
				</div>
			</div>
		</div>



	</div>
	<div class="container-fluid sho-bag">
		<div class="col-12 product-bst discover">
			<hr class="col-1 col-md-3">
			<h2 class="col-10 col-md-6 mysh">MY SHOPPING BAG</h2>
			<hr class="col-1 col-md-3">
		</div>
		<p class="col-12" align="center">Choose your clothes, choose your style</p>

		<div class="row bg">
			<div class="container" id="pr_array_content">

				<!-- CART_PROFILE.JS PRINT CONTENT HERE -->

			</div>
			<div class="offset-lg-7 col-lg-5 col-md-6 offset-md-6 col-12">
				<div class="total col-12">
					<h4>
						<font color="#c77000">TOTAL PRICE:</font>
					</h4>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<h4 class="tt" id="total">$ 0.00</h4>
				</div>

				<button class="col-lg-10 col-md-11 proceed"><a href="payment.php" onClick="
					var total_price=parseInt(document.getElementById('total').innerHTML.split(' ',)[1]);
						if (total_price==0) {
							alert('YOU DID NOT CHOOSE ANY THINGS TO BUY!!!');
							this.setAttribute('href','#');
						}
						else this.setAttribute('href','payment.php?total_price='+total_price)">PROCEED TO SECURE CHECKOUT</a></button>
			</div>
		</div>
	</div>


	<!-------------        -HISTORY-        ------------>
	<div class="container-fluid hidden history">
		<div class="col-12 product-bst discover">
			<hr class="col-1 col-md-3">
			<h2 class="col-10 col-md-6 mysh">HISTORY</h2>
			<hr class="col-1 col-md-3">
		</div>
		<?php
		while ($row_dh = $dh_res->fetch_assoc()) {
			?>
			<div class="row bg">
				<div class="container">
					<div class="col-12 pr-us">
						<div class="col-md-1 d-none d-md-block d-lg-block decor"></div>
						<div class="col-lg-3 col-md-3 col-12 img-3">
							<img src="img/manuel-cosentino-670480-unsplash.jpg" class="img-fluid">
						</div>
						<div class="offset-md-0 col-lg-4 col-md-5 offset-1 col-11 pr-his">
							<h4>
								<font color="#c77000">ORDER HISTORY:</font>
							</h4>
							Date Created:
							<?php echo $row_dh['date']; ?> <br> Brand : James Furlinn <br> User Name:
							<?php echo $row_dh['username']; ?> <br> Phone :
							<?php echo $row_dh['phone']; ?> <br> Address :
							<?php echo $row_dh['address']; ?> <br> Discount: None<br> Total Price: $
							<?php echo $row_dh['price']; ?> <br>
							<div class="col-2 d-block d-md-none price1">
								<i class="fas fa-info-circle"></i>
							</div>
						</div>
						<div class="col-lg-3 col-md-2 col-12 cost1">
							<h4 class="col-12"><?php if ($row_dh['status']) echo "Delivered";
												else echo "Processing"; ?></h4>
							<div class="col-md-12 d-md-block d-lg-block d-none price1">
								<i class="fas fa-info-circle"></i>
							</div>
						</div>
						<div class="col-md-1 d-none d-md-block d-lg-block decor"></div>
					</div>
				</div>
			</div>
		<?php } ?>
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
			� 2019 James Furlinn. All rights reserved. Terms & Conditions.
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
	<!-- SHOW CART-PR-->
	<script src="js/cart_profile.js"></script>
	<!-- SCRIPT -->
</body>

</html>