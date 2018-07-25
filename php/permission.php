<?php

$name = $_GET['N_user_name']; //받은 값 : TEST05

$db = mysqli_connect('127.0.0.1', 'root', 'autoset', 'dasom'); //서버주소, php 아이디, 비번, 스키마 이름
if(mysqli_connect_errno())
{
  echo "Failed to connect to MySQL!";
}



echo("UPDATE `user` SET `isVerify`='1' WHERE `name` = '$name'");

$sql_1 = "UPDATE `user` SET 'isVerify'='1' WHERE `name` = '$name'";

mysqli_query($db, $sql_1);

echo("<script>location.href = 'show_db.php'</script>");



 ?>
