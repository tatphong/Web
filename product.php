<?php
require_once('php/dbo.php');
require_once('php/common.php');
session_start();
//get all 

//get all category from db
$result = "";
dbo_select('*', 'category', "", $result);

//add product
if (isset($_REQUEST['btn_add'])) {

	$target_dir = "img/upload/";
	$target_file = $target_dir . basename($_FILES['add_img']["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if (isset($_REQUEST["btn_add"])) {
		$check = getimagesize($_FILES['add_img']["tmp_name"]);
		if ($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}
	// Check if file already exists
	$file_exist = "";
	if (file_exists($target_file)) {
		$file_exist = "File already exists.";
		$uploadOk = 2;
	}
	// Check file size
	$file_size_err = "";
	if ($_FILES["add_img"]["size"] > 1000000) {
		$file_size_err = "Your file is too large. ";
		$uploadOk = 0;
	}
	// Allow certain file formats
	$file_type_err = "";
	if (
		$imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif"
	) {
		$file_type_err = "Only JPG, JPEG, PNG & GIF files are allowed. ";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk != 1) {
		echo "<script>alert('Error: " . $file_exist . $file_size_err . $file_type_err . "')</script>";
		// if everything is ok, try to upload file
	} else {
		(move_uploaded_file($_FILES['add_img']["tmp_name"], $target_file));
	}

	//send info to db
	if ($uploadOk != 0) {
		if ($_POST['add_sex'] == "Men") $sex = 2;
		else $sex = 1;
		while ($row = $result->fetch_assoc()) {
			if ($_POST['add_category'] == $row['cater_name']) {
				$maloai = $sex * 10 + $row['cater_id'];
				break;
			}
		}
		$element = "(`masp`,`tensp`,`gia`,`img`,`maloai`)";
		$value = "(NULL,'" . $_POST['add_name'] . "','" . $_POST['add_price'] . "','" . $target_file . "','" . $maloai . "')";
		dbo_insert("`ds_sanpham`", $element, $value);
		echo "<script>alert('Product successful added!')</script>";
	}
}

//del product
if (isset($_REQUEST['btn_del'])) {
	dbo_del('ds_sanpham', '`masp`=' . $_GET['del_target']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>James Furlinn | Products | Pants</title>
	<!-- Bootstrap -->
	<link rel="shortcut icon" type="image/png" href="Fetoria-black.png" />
	<link href="css/bootstrap.css" rel="stylesheet" />
	<link href="slick/slick.css" rel="stylesheet" />
	<link href="slick/slick-theme.css" rel="stylesheet" />
	<link href="css/JF.css" rel="stylesheet" />
	<link href="css/cate.css" rel="stylesheet" />
	<link href="css/all.css" rel="stylesheet" />
	<link href="wow/animate.css" rel="stylesheet" />
</head>

<body>
	<!--HEADER-->
	<div id="overlay-page" class=" d-md-none"></div>

	<div class="container-fluid hidden" id="inner-add">
		<div id="inner-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-12" id="inner-white">
					<form action="product.php" method="post" enctype="multipart/form-data">
						<br>
						<div class="offset-lg-1 col-lg-10 offset-md-0 col-12 us2">
							<div class="col-lg-4 col-md-4 col-11">
								<p align="left">
									<b class="col-12"> Product Name</b><br>
									<input type="text" name="add_name" class="col-12 d-block d-md-none">
									<b class="col-12"> Image</b><br>
									<input type="file" name="add_img" id="add_img" class="col-12 d-block d-md-none">
									<b class="col-12"> Price</b><br>
									<input type="text" name="add_price" class="col-12 d-block d-md-none" pattern="[0-9]{1,}" value="0">
									<b class="col-12"> Category</b><br>
									<select name="add_category" class="col-12 d-block d-md-none">
										<?php
										dbo_select('*', 'category', "", $result);
										while ($row = $result->fetch_assoc()) {
											echo "<option>" . $row['cater_name'] . "</option>";
										}
										?>
									</select>
									<b class="col-12"> Sex</b><br>
									<select name="add_sex" class="col-12 d-block d-md-none">
										<option>Men</option>
										<option>Woman</option>
									</select>
								</p>
							</div>

							<div class="col-lg-8 col-md-7 d-md-block d-none">
								<input type="text" name="cater_id_submit" value="<?php echo $_REQUEST['cater_id_submit']; ?>" style="display: none">
								<input type="text" name="add_name" class="col-12">
								<input type="file" name="add_img" class="col-12">
								<input type="text" name="add_price" class="col-12" pattern="[0-9]{1,}" value="0">
								<select name="add_category" class="col-12">
									<?php
									dbo_select('*', 'category', "", $result);
									while ($row = $result->fetch_assoc()) {
										echo "<option>" . $row['cater_name'] . "</option>";
									}
									?>
								</select>
								<select name="add_sex" class="col-12">
									<option>Men</option>
									<option>Woman</option>
								</select>
							</div>
						</div>
						<br>
						<button type="submit" name="btn_add" class="offset-md-4 col-lg-4 col-md-4 col-10 offset-0 add-inner">ADD</button>
					</form>
				</div>
			</div>
		</div>
	</div>

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
					<a href="index.php"><img src="img/JamesFurlinn-logo.png" /></a>
				</div>

				<nav id="the-menu" class="the-menu col-md-8">
					<ul>
						<li id="up"><a href="dash.php">DASHBOARD</a>
						</li>
						<li id="woman"><a href="order.php">ORDER</a>
						</li>
						<li id="col">
							<a href="#">CATEGORY</a>
							<ul id="c">
								<li><a href="category.php?type=men"> Men</a>
								</li>
								<li><a href="category.php?type=woman"> Woman</a>
								</li>
								
							</ul>
						</li>
						<li id="men">
							<a href="#">PRODUCTS</a>
							<ul id="m">
								<?php
								show_menu_category();
								?>
							</ul>
						</li>
						<?php check_ad_permission(); ?>
					</ul>
				</nav>

				<div class="cart offset-1 col-3 offset-md-0 col-md-2">
					<div class="d-none d-lg-block offset-md-2"></div>
					<div class="d-block d-md-none col-4">
						<a href="#" title="#"></a>
					</div>
					<div class="col-4 col-lg-3 icon" id="srch" title="Search">
						<i class="fas fa-search"></i>
					</div>
					<div class="col-4 col-lg-3 icon">
						<a href="index.php" title="Log out"><i class="fas fa-sign-out-alt"></i></a>
					</div>
					<div class="d-none d-md-block col-lg-3 icon">
						<a href="#" title="Admin">ADMIN</a>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="hidden col-12" id="searchgia">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-9 col-lg-8 search-op">
							<font color="white">PRODUCT'S NAME:</font>
							&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="snc col-11 col-md-11" />
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-md-9 col-lg-8 search-op" id="search-flex">
							<div class="col-6 col-md-5 col-lg-5 sl">
								<font color="white">SEX:</font> <br />
								<select class="snc col-12">
									<option>All</option>
									<option>Woman</option>
									<option>Men</option>
									<option>Unisex</option>
								</select>
							</div>

							<div class="col-6 col-md-5 offset-md-1 sl">
								<font color="white">COLLECTIONS:</font><br />
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
						<div class="col-12 col-md-9 col-lg-8 search-op">
							<font color="white">PRICE: </font>
							<select class="snc col-11">
								<option>All</option>
								<option>$10.00 - $50.00</option>
								<option>$50.00 - $100.00</option>
								<option>$100.00 - $150.00</option>
								<option>Over $150.00</option>
							</select>
						</div>
					</div>
					<br />
					<div class="row">
						<button id="sm" class="col-6 col-md-4 col-lg-3">SEARCH</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- HEADER -->

	<!-- BANNER 1 + PR-INFO 1-->
	<br /><br /><br />

	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-12 sl-add">
					<div class="col-lg-3 offset-lg-6 col-md-3 offset-md-6 col-6 offset-6 sort">
						Sort by: &nbsp;
						<select>
							<option>Men</option>
							<option>Woman</option>
						</select>
					</div>

					<div class="col-lg-3 col-md-4 offset-md-0 col-7 offset-5">
						<button id="add">ADD NEW PRODUCT</button>
					</div>
				</div>

			</div>
			<br />
			<div class="row">
				<!--           php show product            -->
				<?php
				$where = "`maloai` % 10=" . $_REQUEST['cater_id_submit'];
				dbo_select('*', '`ds_sanpham`', $where, $result);
				$admin_check = 0; // check ad or user interface
				if (!empty($_SESSION['adlogin'])) $admin_check = 1;
				while ($row = $result->fetch_assoc()) {
					echo '<div class="product col-6 col-md-4" class="product col-12 col-md-4" onClick="show_pr_detail(\'' . $row['masp'] . "','" . $row['tensp'] . "','" . $row['gia'] . "','" . $row['img2'] . "','" . $admin_check . "','" . $_REQUEST['cater_id_submit'] . '\')" >
							<img
								src="' . $row['img2'] . '"
								class="hoverimg d-none d-md-block"
								alt=""
							/>
							  <img src="' . $row['img'] . '" alt="" />
							  <p><b>' . $row['tensp'] . '</b><br />$' . $row['gia'] . '</p>
						 </div>
						 ';
				}
				?>

			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="pagination">
					<a href="#">&laquo;</a>
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">&raquo;</a>
				</div>
			</div>
		</div>
	</div>

	<!--  SHOW PR DETAIL  -->
	<div class="container-fluid hidden" id="hide">
		<div class="inner-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-12" id="inner-white">
					<div id="show_pr_detail">

					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- FOOTER -->
	<br /><br />
	<footer id="footer" class="wow fadeInUp">
		<div class="container">
			<div class="row">
				<div class="col-12" id="footer-flex">
					<div class="logo logo-ft d-none d-md-block col-md-4 col-lg-4">
						<a href="index.php"><img src="img/JamesFurlinn-logo-ft.png" /></a>
					</div>

					<div class="info col-6 col-md-4 col-lg-4">
						<strong>CUSTOMER CARE </strong><br /> Customer Service<br /> Promotions
						<br /> Shipping & Tracking<br /> Returns & Exchanges<br /> Size Guide<br /> Product Care<br />
						<br />
						<strong id="fu">FOLLOW US </strong>&nbsp;&nbsp;<br class="d-block d-md-none" />
						<a href="https://www.behance.net/"><i class="fab fa-behance"></i></a>
						<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
						<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
					</div>

					<div class="col-6 col-md-4 col-lg-4 info-hid">
						<strong>POLICIES</strong><br /> Terms of use <br /> Privacy Policy<br /> Cookies Policy<br />
						<br />
						<strong>FEEDBACK</strong><br /> Share your comments and<br /> Suggestions with us <br />
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