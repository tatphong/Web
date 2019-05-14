<?php
require_once('php/common.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>James Furlinn | Search</title>
	<!-- Bootstrap -->
	<link rel="shortcut icon" type="image/png" href="Fetoria-black.png" />
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="slick/slick.css" rel="stylesheet">
	<link href="slick/slick-theme.css" rel="stylesheet">
	<link href="css/JF.css" rel="stylesheet">
	<link rel="stylesheet" href="css/menwomen.css">
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
	<div class="container-fluid wow fadeInUp">
		<div class="row">
			<div class="banner col-12 clearfix">
				<img src="WOMAN_IMG/tamara-bellis-631034-unsplash.jpg" alt="">
			</div>
		</div>
	</div>
	<!--boxlink-->
	<div class="ccontainer-fluid wow fadeInUp">
		<div class="row">
			<div class="boxlink d-none d-md-block col-md-5">
				Search results
			</div>
			<div class="tamgiac d-none d-md-block col-md-1"></div>
		</div>
	</div>
	<!--textcenter-->
	<div class="container wow fadeInUp">
		<div class="row">
			<div class="section-heading col-12 ">
				<span>FURLINN’S SEARCH</span>
			</div>
			<div class="text col-12 d-none d-md-block col-md-12">
				Choose your style, choose our products!
			</div>
		</div>
		<div class="row">
			<div class="shape d-none d-md-block offset-md-10 col-md-2"></div>
		</div>
	</div>

	<?php
	require_once("php/dbo.php");
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$sex = isset($_POST['sex']) ? $_POST['sex'] : null;
	$category = isset($_POST['category']) ? $_POST['category'] : null;
	$price1 = isset($_POST['price1']) ? $_POST['price1'] : null;
	$price2 = isset($_POST['price2']) ? $_POST['price2'] : null;
	$and = 0; //cờ hiệu;
	function get_name($name)
	{
		if ($name != null) {
			$GLOBALS['and'] = 1;
			return " `tensp` like '%$name%' ";
		}
	}
	function get_sex($sex)
	{
		$aand = '';
		if ($GLOBALS['and']) $aand = ' AND ';
		if ($sex == 2) {
			$GLOBALS['and'] = 1;
			return $aand . " `maloai` like '2%' ";
		}
		if ($sex == 1) {
			$GLOBALS['and'] = 1;
			return $aand . "  `maloai` like '1%' ";
		}
	}
	function get_category($category)
	{
		//this function take data from $cate_data
		$aand = '';
		$cate_return = null;

		if ($GLOBALS['and']) {
			$aand = ' AND ';
		}

		if ($category != null) {
			$category_data = "";
			dbo_select('*', '`category`', "", $category_data);
			while ($row = $category_data->fetch_assoc()) {
				if ($row['cater_id'] == $category) {
					$cate_return = "`maloai` like '%" . $row['cater_id'] . "'";
					break;
				}
			}
		}

		if ($cate_return!=null){
			$GLOBALS['and'] = 1;
			return $aand . $cate_return;
		}
	}
	function get_price($price1, $price2)
	{
		$aand = '';
		$condition_return = null;

		if ($GLOBALS['and']) {
			$aand = ' AND ';
		}

		if ($price1 != null && $price2 != null)
			$condition_return = " `gia` between $price1 and $price2 ";
		else if ($price1 != null)
			$condition_return = " `gia` between $price1 and 1000000000000 ";
		else if ($price2 != null)
			$condition_return = " `gia` between 0 and $price2 ";

		if ($condition_return != null) {
			$GLOBALS['and'] = 1;
			return $aand . $condition_return;
		}
	}
	$where="";
	$where = get_name($name) . get_sex($sex) . get_category($category) . get_price($price1, $price2);
	//echo $where;
	$_SESSION['where'] = $where;
	$result = "";
	dbo_select('*', '`ds_sanpham`', $where, $result);
	$page_amount = ceil($result->num_rows / 6);
	?>
	<div id="root" class='container'></div>

	<script src="js/axios.js"></script>

	<script>
		phantrang(1);
		async function phantrang(trang) {
			const res = await axios.post('/PRJ_Sem_2.1/php/getdata.php', {
				trang: trang
			});
			document.querySelector('#root').innerHTML = res.data;
		}
		// ham pre-next;
		function getpage(trangcuoi) {

			var laquo = document.getElementById('laquo');
			var raquo = document.getElementById('raquo');
			var page = parseInt(window.location.href.split('#page=')[1] || 1);


			if (page > 1 && page <= trangcuoi) {
				laquo.onclick = function() {
					phantrang(page - 1);
					laquo.href = '#page=' + (page - 1);
				};
			}
			if (page >= 1 && page < trangcuoi) {
				raquo.onclick = function() {
					phantrang(page + 1);
					raquo.href = '#page=' + (page + 1);
				};
			}
		}
	</script>
	<div class="container wow fadeInUp">
		<div class="row">
			<div class="pagination">
				<a id="laquo" onclick="getpage(<?php echo $page_amount ?>)" href="#page=">&laquo;</a>
				<?php
				for ($i = 1; $i <= $page_amount; $i++) {
					echo "<a onclick = \"phantrang($i)\" href=\"#page=$i\" class=\"active\"> $i </a>";
				}
				?>
				<a id="raquo" onclick="getpage(<?php echo $page_amount ?>)" href="#page=">&raquo;</a>
			</div>
		</div>
	</div>
	<script>
		getpage(<?php echo $page_amount ?>);
	</script>
	<?php
	?>

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
	<script src="js/pr_detail.js"></script>
	<script>
		new WOW().init();
	</script>
	<!-- SCRIPT -->
</body>

</html>