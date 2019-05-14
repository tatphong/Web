<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	require('dbo.php');
	echo $_SERVER['SERVER_PORT'];
	//search with name and price
	if (isset($_REQUEST['btn'])){
		$result="";
		$target1=addslashes($_GET['search_name']);
		$target2=$_GET['search_price'];
		dbo_select('*','`ds_sanpham`','`tensp` LIKE "%'.$target1.'%" AND `gia`='.$target2,$result);
		echo "result:<br/>";
		while ($row=$result->fetch_assoc()){
			echo $row['tensp']."&nbsp;".$row['gia']."<br/>";
		}
		echo "<br/><br/>";	
	}

?>
<body>
<form method="get" action="hash_test.php">
<h5>Search with name</h5>
<input type="text" name="search_name">
<h5>Search with price</h5>
<input type="text" name="search_price">
<button name="btn" type="submit">Search</button>
</form>
</body>
</html>