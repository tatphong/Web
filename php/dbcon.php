<html>
<?php
//woman's product
$servername = "localhost";
$database = "web2_nhom12";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
// if ($conn->connect_errno) {
//     die("Connection failed: " . mysqli_connect_error());
// }
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");
//query
?>

</html>
