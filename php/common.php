<?php
//if (!session_status()) session_start();
require_once( 'dbo.php' );

function isLogined() {
	if ( empty( $_SESSION[ 'login' ] ) )
		return false;
	return true;
}

function uname_logout() {
	if ( isLogined() ) {
		$ress = "";
		dbo_select( "*", "ql_user", "uid='" . $_SESSION[ 'login' ] . "'", $ress );
		$roww = $ress->fetch_assoc();
		echo '<a href="php/logout.php" title="Sign out"><i class="far fa-user" ></i></a>';
		echo $roww[ 'username' ];
	} else {
		echo '<a href="login.php" title="Sign in"><i class="far fa-user"></i></a>';
	}
}

function check_ad_permission() {
	$res = "";
	dbo_select( "*", "ql_user", "uid='" . $_SESSION[ 'adlogin' ] . "'", $res );
	$row_ad = $res->fetch_assoc();
	if ( $row_ad[ 'admin' ] == 1 ) {
		echo '<li id="user"><a href="user.php">USER</a></li>';
	}
}

function show_menu_category() {
	$menu_cater = "";
	dbo_select( '*', 'category', "", $menu_cater );
	while ( $row = $menu_cater->fetch_assoc() ) {
		echo '<li><a href="product.php?cater_id_submit=' . $row[ 'cater_id' ] . '"> ' . $row[ 'cater_name' ] . "</a></li>";
	}
}
?>