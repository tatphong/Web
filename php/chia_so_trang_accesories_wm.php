<html>
<?php
require "dbcon.php";
$sql_sp = 'SELECT * from ds_sanpham  where maloai = "13"';
//$sql = 'SELECT tensp, gia from ds_sanpham ';
mysqli_select_db($conn, $database);
$result_all = mysqli_query($conn, $sql_sp);
$page_amount = ceil($result_all->num_rows / 6);
?>
<div id="root" class='container'></div>

<script src="js/axios.js"></script>

<script>
    phantrang(1);
    async function phantrang(trang) {
        const res = await axios.post('/PRJ_Sem_2.1/php/laysptheotrang_accesories_wm.php', {
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
        if ( page >= 1 && page < trangcuoi) {
            raquo.onclick = function() {
                phantrang(page + 1);
                raquo.href = '#page=' + (page + 1);
            };
        }
    }
</script>
<div class="container">
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
//close data
mysqli_close($conn);
?>

</html>