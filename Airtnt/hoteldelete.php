<?php
include "./admin.html";
include "./conn.php";

$hotelname = $_GET["Hotelname"];
$sql ="delete from shop where shopname = '$hotelname'";
// echo $sql;
$result = $conn->query($sql);


echo"<form action='hoteldelete.php' method='GET'>";
echo"<div align='center'>";
echo"<div class='input'><input type='text' name='Hotelname' id='hotelname' /><label for='Hotelname'>酒店名</label></div>";
echo"<button type='submit'>删除</button>";
echo"</div>";
echo"</form>";

?>
