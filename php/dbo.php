<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbo = "web2_nhom12";
$conn = new mysqli($servername, $username, $password, $dbo);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");
//select
function dbo_select($select, $from, $where, &$result)
{
	if ($where == "")
		$sql = "select " . $select . " from " . $from;
	else $sql = "select " . $select . " from " . $from . " where " . $where;
	$result = $GLOBALS['conn']->query($sql) or die($GLOBALS['conn']->error);


	/*if ( $result->num_rows > 0 )
		while ( $row = $result->fetch_assoc() ) {
			echo "HTML OUTPUT HERE" . "<br>";
		}
	else echo "HTML NULL OUTPUT HERE";*/
}


//insert
function dbo_insert($table, $element_key, $value)
{
	//elementkey + value FORMAT : "(abc,xyz)"
	$sql = "insert into " . $table . " " . $element_key . " values " . $value;
	//echo "<script>alert('".$sql."')</script>";
	$GLOBALS['conn']->query($sql);
	echo $GLOBALS['conn']->connect_error;
}


//update
function dbo_update($table, $set_value, $condition)
{
	$sql = "update " . $table . " set " . $set_value . " where " . $condition;
	$GLOBALS['conn']->query($sql);
}


//del
function dbo_del($table, $del_target)
{
	$sql = "delete from `" . $table . "` where " . $del_target;
	$GLOBALS['conn']->query($sql);
}


/*$conn->close();*/
