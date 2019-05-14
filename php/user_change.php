<?php
require_once( 'dbo.php' );
//select all uid to discover form submit
$condition = '`ql_user`.`uid`=' . $_POST[ 'edit_id' ];
$comma = 0;
if ( $_POST[ 'edit_name' ] != "" ) {
	$uname = "`username`='" . $_POST[ 'edit_name' ] . "'";
	$comma = 1;
} else $uname = "";
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
$target = $uname . $email . $phone . $pwd . $address;
dbo_update( "`ql_user`", $target, $condition );
if ( $_POST[ 'edit_name' ]!="" ) {
	session_start();
	$_SESSION[ 'login' ] = $_POST[ 'edit_name' ];
}
if ($_POST['edit_pwd']!=""){
	session_start();
	session_destroy();
}
header( "location:http://localhost:" . $_SERVER[ 'SERVER_PORT' ] . "/PRJ_Sem_2.1/profile.php" );
?>