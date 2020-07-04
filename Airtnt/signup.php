<?php
include "./conn.php";

$username = $_POST["Username"];
$password = $_POST["Password"];
$sql = "insert into user( username,password) values ('$username','$password')";
$result = $conn->query($sql);
echo "<script>alert('注册成功');location.href='login.html'</script>";
?>