<?php
include "./admin.html";
include "./conn.php";

$hotelname = $_GET["Hotelname"];
$price = $_GET["Price"];
$sql ="insert into shop(shopname,price) values ('$hotelname','$price')";
// echo $sql;
$result = $conn->query($sql);


echo"<form action='hotelsignup.php' method='GET'>";
echo"<div align='center'>";
echo"<div class='input'><input type='text' name='Hotelname' id='hotelname' /><label for='Hotelname'>酒店名</label></div>";
echo"<div class='input'><input type='text' name='Price' id='price' /><label for='Price'>价格</label></div>";
echo"<button type='submit'>新增</button>";
echo"</div>";
echo"</form>";




?>
