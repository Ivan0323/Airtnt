
<?php
include "./admin.html";
include "./conn.php";

$username = $_GET["Username"];
$sql ="delete from user where username = '$username'";
// echo $sql;
$result = $conn->query($sql);


echo"<form action='delete.php' method='GET'>";
echo"<div align='center'>";
echo"<div class='input'><input type='text' name='Username' id='username' /><label for='username'>用户名</label></div>";
echo"<button type='submit'>删除</button>";
echo"</form>";
echo"</div>";

?>
