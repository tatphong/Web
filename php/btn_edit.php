<?php
require_once( 'dbo.php' );

$condition = '`ql_user`.`uid`=' . $_POST[ 'uid' ];
$comma = 0;
if ( $_POST[ 'edit_name' ] != "" ) {
	$uname = "`username`='" . $_POST[ 'edit_name' ] . "'";
	$comma = 1;
} else $uname = "";
if ( $_POST[ 'edit_id' ] != "" ) {
	if ( $comma == 0 ) {
		$uid = "`uid`='" . $_POST[ 'edit_id' ] . "'";
		$comma = 1;
	} else $uid = ",`uid`='" . $_POST[ 'edit_id' ] . "'";
} else $uid = "";
if ( $_POST[ 'edit_email' ] != "" ) {
	if ( $comma == 0 ) {
		$email = "`email`='" . $_POST[ 'edit_email' ] . "'";
		$comma = 1;
	} else $email = ",`email`='" . $_POST[ 'edit_email' ] . "'";
} else $email = "";
if ( $_POST[ 'edit_phone' ] != "" ) {
	if ( $comma == 0 ) {
		$phone = "`phone`='" . $_POST[ 'edit_phone' ] . "'";
		$comma = 1;
	} else $phone = ",`phone`='" . $_POST[ 'edit_phone' ] . "'";
} else $phone = "";
if ( $_POST[ 'edit_pwd' ] != "" ) {
	if ( $comma == 0 ) {
		$pwd = "`pwd`='" . password_hash( $_POST[ 'edit_pwd' ], PASSWORD_DEFAULT ) . "'";
		$comma = 1;
	} else $pwd = ",`pwd`='" . password_hash( $_POST[ 'edit_pwd' ], PASSWORD_DEFAULT ) . "'";
} else $pwd = "";
if ( $_POST[ 'edit_address' ] != "" ) {
	if ( $comma == 0 ) {
		$address = "`address`='" . $_POST[ 'edit_address' ] . "'";
		$comma = 1;
	} else $address = ",`address`='" . $_POST[ 'edit_address' ] . "'";
} else $address = "";

if ($_POST[ 'edit_block' ]=="Active")
	$opt_block=0;
else $opt_block=1;
if ( $comma == 0 ) {
	$block = "`block`='" . $opt_block . "'";
	$comma=1;
}
else $block = ",`block`='" . $opt_block . "'";

if ($_POST[ 'edit_ad' ]=="User")
	$opt_admin=0;
else if ($_POST['edit_ad']=="Admin")
	$opt_admin=1;
else $opt_admin=2;
$admin = ",`admin`='" . $opt_admin . "'";

$target = $uname . $uid . $email . $phone . $pwd . $address . $block . $admin;
dbo_update( "`ql_user`", $target, $condition );

header( "location:http://localhost:".$_SERVER['SERVER_PORT']."/PRJ_Sem_2.1/user.php" );
?>