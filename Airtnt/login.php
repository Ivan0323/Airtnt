<?php
include "./conn.php";

$username = $_POST["Username"];
$password = $_POST["Password"];
$sql = "select username,password from user where username = '$username' and password = '$password'";
// echo $sql;
$result = $conn->query($sql);
if($result->num_rows > 0){
    if($username == 'admin'){
    echo "<script>alert('登录成功，管理员您好');location.href='admin.php'</script>";
    }
    else{
    echo 
    "<script>
            alert('登录成功,用户您好');
            window.location.href='index.php?loginname=$username';        
            </script>";
    }
}else{
    echo "<script>alert('登录失败，账户或密码出现错误');location.href='login.html';</script>";
}
?>