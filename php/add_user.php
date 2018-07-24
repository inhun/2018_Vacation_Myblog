<?php
$ID = $_POST["N_user_ID"];
$PW = $_POST["N_user_password"];
$phone = $_POST["N_user_phone"];
$email = $_POST["N_user_email"];
//                    서버주소   아이디  비밀번호   스키마
$db = mysqli_connect('localhost','root','autoset','dasom');
if(mysqli_connect_errno())
{
  echo "연결에러";
}
$temp_sql = "select name from user where name = $ID";
$ret = mysqli_query($db,$temp_sql) or die (mysqli_error($db));
$exist = mysqli_num_rows($ret);
if($exist>0)
{
  echo "<script> alert ('아이디 사용할수없음'); </script>";
  echo "<script> window.history.back(); </script>";
  exit();
}
else
{
  $pw_encode = md5($PW);
  $table_name = "user";
  $sql = "INSERT INTO `user`(`name`, `password`, `phone`, `email`) VALUES ('$ID','$pw_encode','$phone','$email')";
  mysqli_query($db, $sql);
  mysqli_close($db);
  echo"<script> alert ('회원가입 성공');</script>";
  echo "<script> loaction.href = 'login.html'";
}
//echo "<scipt>alert('회원가입 성공');location.href"

?>
