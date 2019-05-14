<?php
require_once('php/dbo.php');
require_once('php/common.php');
session_start();
/*$result;
dbo_select("*","'qldh'","",$result);
if ($result->num_rows >0) {
	$total_income=0;
}
else{
	while ($row=$result->fetch_assoc()){
	$total_income += $row['tongtien'];
	}
}*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>James Furlinn | Admin | Dashboard</title>
    <!-- Bootstrap -->
    <link rel="shortcut icon" type="image/png" href="Fetoria-black.png" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="slick/slick.css" rel="stylesheet" />
    <link href="slick/slick-theme.css" rel="stylesheet" />
    <link href="css/JF.css" rel="stylesheet" />
    <link href="css/dash.css" rel="stylesheet" />
    <link href="css/all.css" rel="stylesheet" />
    <link href="wow/animate.css" rel="stylesheet" />
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
            <a href="index.php"><img src="img/JamesFurlinn-logo.png"/></a>
          </div>

          <nav id="the-menu" class="the-menu col-md-8">
            <ul>
              <li id="up"><a href="dash.php">DASHBOARD</a></li>
              <li id="woman"><a href="order.php">ORDER</a></li>
              <li id="col">
                <a href="#">CATEGORY</a>
                <ul id="c">
                  <li><a href="category.php?type=men"> Men</a></li>
                  <li><a href="category.php?type=woman"> Woman</a></li>
                 
                </ul>
              </li>
              <li id="men">
                <a href="#">PRODUCTS</a>
                <ul id="m">
                  <?php show_menu_category(); ?>
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
              <a href="index.php" title="Log out"
                ><i class="fas fa-sign-out-alt"></i
              ></a>
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
                &nbsp;&nbsp;&nbsp;&nbsp;<input
                  type="text"
                  class="snc col-11 col-md-11"
                />
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
						<div class="col-12 col-md-12 col-lg-8 search-op">
							<font color="white">PRICE: </font><br>
							<font color="white">From &nbsp;&nbsp;&nbsp;</font>
							<input type="text" name="price1" value="0" class="col-3 col-md-2 col-lg-4">
							<font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To &nbsp;&nbsp;&nbsp;</font>
							<input type="text" name="price2" class="col-3 col-md-2 col-lg-4">
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
    <br /><br />

    <div class="container">
      <div class="row">
        <div class="product col-6 col-md-3">
          <div class="col-12 user bora" id="user">
            &nbsp;&nbsp;&nbsp;<i class="fas fa-users"></i> <br /><br />
            <h5><strong>92,5%</strong></h5>
            <h5>USER ONLINE</h5>
            &nbsp;<i class="fas fa-info-circle" title="Info"></i> <br /><br />
          </div>
        </div>

        <div class="product col-6 col-md-3">
          <div class="col-12 user bora" id="yl">
            &nbsp;&nbsp;&nbsp;<i class="fas fa-user-friends"></i> <br /><br />
            <h5><strong>900k+</strong></h5>
            <h5>VISITS TODAY</h5>
            &nbsp;<i class="fas fa-info-circle" title="Info"></i> <br /><br />
          </div>
        </div>

        <div class="product col-6 col-md-3">
          <div class="col-12 user bora" id="bl">
            &nbsp;&nbsp;&nbsp;<i class="fas fa-file"></i> <br /><br />
            <h5><strong>860k+</strong></h5>
            <h5>PAGES VIEW</h5>
            <br class="d-block d-md-block d-lg-none" />
            &nbsp;<i class="fas fa-info-circle" title="Info"></i> <br /><br />
          </div>
        </div>

        <div class="product col-6 col-md-3">
          <div class="col-12 user bora" id="na">
            &nbsp;&nbsp;&nbsp;<i class="fas fa-money-check-alt"></i>
            <br /><br />
            <h5><strong>$1M</strong></h5>
            <h5>TODAY'S EARNINGS</h5>
            &nbsp;<i class="fas fa-info-circle" title="Info"></i> <br /><br />
          </div>
        </div>
      </div>

      <div class="row">
        <div class="product  col-12 col-md-6">
          <div class="col-12 user" id="sale">
            <h5>DAILY SALES</h5>
            <i class="fas fa-info-circle" title="Info"></i>
            <br />
            <div>
              <i class="fas fa-chart-line"></i><br />
              65% increase in today sales<br /><br />
            </div>
          </div>
        </div>

        <div class="product col-12 col-md-6">
          <div class="col-12 user" id="panel">
            <h5>NOTIFICATIONS PANEL</h5>
            <i class="fas fa-info-circle" title="Info"></i>
            <br />

            <div class="info-panel">
              <i class="fas fa-comments"></i>&nbsp;&nbsp;New Comment<br />
              <i class="fab fa-twitter"></i>&nbsp;&nbsp;3 New Followers<br />
              <i class="fas fa-comment-dots"></i>&nbsp;&nbsp;Message Sent<br />
              <i class="fas fa-tasks"></i>&nbsp;&nbsp;New Task<br />
              <i class="fas fa-server"></i>&nbsp;&nbsp;Server Rebooted<br />
              <i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Server Crashed!<br />
              <i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;Server Not
              Responding<br />
              <i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;New Order
              Placed<br />
              <i class="fas fa-money-bill-wave"></i>&nbsp;&nbsp;Payment
              Received<br />
            </div>
          </div>
        </div>

        <div class="product  col-12 col-md-6">
          <div class="col-12 user" id="sub">
            <h5>EMAIL SUBSCRIPTIONS</h5>
            <i class="fas fa-info-circle" title="Info"></i>
            <br /><br />
            <div>
              <i class="fas fa-chart-bar"></i><br /><br />
              Last Campaign Performence<br /><br />
            </div>
          </div>
        </div>

        <div class="product  col-12 col-md-6">
          <div class="col-12 user" id="task">
            <h5>COMPLETED TASKS</h5>
            <i class="fas fa-info-circle" title="Info"></i>
            <br /><br />
            <div>
              <i class="fas fa-signal"></i><br /><br />
              Last Campaign Performence<br /><br />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FOOTER -->

    <footer id="footer" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-12" id="footer-flex">
            <div class="logo logo-ft d-none d-md-block col-md-4 col-lg-4">
              <a href="index.php"><img src="img/JamesFurlinn-logo-ft.png"/></a>
            </div>

            <div class="info col-6 col-md-4 col-lg-4">
              <strong>CUSTOMER CARE </strong><br />
              Customer Service<br />
              Promotions<br />
              Shipping & Tracking<br />
              Returns & Exchanges<br />
              Size Guide<br />
              Product Care<br />
              <br />
              <strong id="fu">FOLLOW US </strong>&nbsp;&nbsp;<br
                class="d-block d-md-none"
              />
              <a href="https://www.behance.net/"
                ><i class="fab fa-behance"></i
              ></a>
              <a href="https://www.instagram.com/"
                ><i class="fab fa-instagram"></i
              ></a>
              <a href="https://www.facebook.com/"
                ><i class="fab fa-facebook-f"></i
              ></a>
            </div>

            <div class="col-6 col-md-4 col-lg-4 info-hid">
              <strong>POLICIES</strong><br />
              Terms of use <br />
              Privacy Policy<br />
              Cookies Policy<br />
              <br />
              <strong>FEEDBACK</strong><br />
              Share your comments and<br />
              Suggestions with us <br />
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
