<?php
$servername = "localhost";
$dbname = "db";
$username = "dbname";
$password = "123456";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} ;
// echo "数据库连接成功";
?>