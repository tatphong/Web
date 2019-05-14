<?php
session_start();
$data = json_decode(file_get_contents("php://input"), true);
//echo $data['trang'];
require_once("dbo.php");
$limit_page = 6;
$from_page = ($data['trang'] - 1) * $limit_page;
$sql = $_SESSION['where'] . " LIMIT " . $from_page . "," . $limit_page;
//echo $sql;
dbo_select('*', '`ds_sanpham`', $sql, $result)
?>
<div class="row">
	<?php
	if ($result->num_rows==0) echo'<p align="center" class="col-12">NO RESULTS FOUND</p>';
	while ($array_product = $result->fetch_assoc()) {
		?>
		<!----------------------------------------- gọi CHI TIET SP --------------------------------------->
		<div class="product col-12 col-md-4" onClick="show_pr_detail('<?php
																		echo $array_product['masp'] . "','";
																		echo $array_product['tensp'] . "','";
																		echo $array_product['gia'] . "','";
																		echo $array_product['img2'];
																		?>')">
			<img src="http://localhost:<?php echo $_SERVER['SERVER_PORT'] ?>/PRJ_Sem_2.1/<?php echo $array_product["img"] ?>" class="hoverimg d-none d-md-block" alt="">
			<img src="http://localhost:<?php echo $_SERVER['SERVER_PORT'] ?>/PRJ_Sem_2.1/<?php echo $array_product["img2"] ?>" alt="">
			<p><b><?php echo $array_product["tensp"] ?></b><br>$<?php echo $array_product["gia"] ?></p>
		</div>
	<?php } ?>
</div>
<!-------------------------------------------------hiện CHI TIET SP ở đây------------------------------------------------>
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