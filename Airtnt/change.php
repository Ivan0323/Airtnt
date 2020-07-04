<?php
include "./admin.html";
include "./conn.php";

$username = $_GET["Username"];
$password = $_GET["Password"];
$sql ="update user set username = '$username', password = '$password' where username = '$username'";
// echo $sql;
$result = $conn->query($sql);


echo"<form action='change.php' method='GET'>";
echo"<div align='center'>";
echo"<div class='input'><input type='text' name='Username' id='username' /><label for='username'>用户名</label></div>";
echo"<div class='input'><input type='password' name='Password' id='Password' /><label for='Password'>密码</label></div>";
echo"<button type='submit'>修改</button>";
echo"</form>";
echo"</div>";

?>
