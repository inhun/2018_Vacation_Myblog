<?php
$db = mysqli_connect('localhost','root','autoset','dasom');
if(mysqli_connect_errno())
{
  echo "연결에러";
}

$sql = "DELETE FROM user where name = '".$_POST["name"]."'";

if(mysqli_query($db,$sql))
{
  echo '삭제되었습니다';
}

?>
