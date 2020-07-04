<?php
include "./admin.html";
include "./conn.php";

$hotelname = $_GET["Hotelname"];
$price = $_GET["Price"];
$sql ="update shop set shopname = '$hotelname', price = '$price' where shopname = '$hotelname'";
// echo $sql;
$result = $conn->query($sql);


echo"<form action='hotelchange.php' method='GET'>";
echo"<div align='center'>";
echo"<div class='input'><input type='text' name='Hotelname' id='hotelname' /><label for='Hotelname'>酒店名</label></div>";
echo"<div class='input'><input type='text' name='Price' id='price' /><label for='Price'>价格</label></div>";
echo"<button type='submit'>修改</button>";
echo"</div>";
echo"</form>";

?>
