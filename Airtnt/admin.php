
<?php
include "./admin.html";
include "./conn.php";
// $username = $_GET["username"];
echo "<div style='background-color:#506a85'>";
$sql = "select * from user";
$result =$conn->query($sql);
// echo "<body style='background-color:#000'>";
echo "<table border='1' width='800' cellpadding='10' cellspacing='0' align='center' style='font-size:20px'>";
echo"<caption><h2 align='center' style='color:white;'>用户管理</h2></caption>";
echo"</br>";
echo "<th width='50' style='text-align:center' bgcolor='ffffff'>id</th>
        <th width='50' style='text-align:center' bgcolor='ffffff'>用户名</th>
        <th width='46%' style='text-align:center' bgcolor='ffffff'>密码</th>
        <th width='150' style='text-align:center' bgcolor='ffffff'>操作</th>";
if($result->num_rows >0){
    while($row =$result->fetch_assoc()){
        echo "<tr bgcolor='#ffffff'>";
        echo "<td width='50' style='text-align:center'>".$row["id"]."</td>";
        echo "<td width='50' style='text-align:center'>".$row["username"]."</td>";
        echo "<td width='46%' style='text-align:center'>".$row["password"]."</td>";
        echo "<td width='150' style='text-align:center'><a href='change.php'>修改&nbsp</a><a href='delete.php'>删除</a></td>";
        echo "</tr>";
        }
}


echo "</table>";
// echo"</body>"
?>
