<?php
$ID = $_POST["N_user_ID"];
$PW = $_POST["N_user_password"];
$PWC = $_POST["N_user_password2"];
$phone = $_POST["N_user_phone"];
$email = $_POST["N_user_email"];

if($PW != $PWC)
{
  echo "<script>alert('비밀번호가 다릅니다');</script>";
  echo "<script>window.location.replace('http://localhost/register.html');</script>";
  exit();
}

if($ID==NULL||$PW==NULL||$phone==NULL||$email==NULL)
{
  echo "<script>alert('빈 칸을 모두 채우세요');</script>";
  echo "<script>window.location.replace('http://localhost/register.html');</script>";
  exit();
}

//                    서버주소   아이디  비밀번호   스키마
$db = mysqli_connect('localhost','root','autoset','dasom');
if(mysqli_connect_errno())
{
  echo "연결에러";
}
$temp_sql = "select name from user where name = '$ID'";
$ret = $db->query($temp_sql);
if($ret->num_rows==1)
{
  echo "<script>alert('중복된 아이디');</script>";
  echo "<script>window.location.replace('http://localhost/register.html');</script>";
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
  echo "<script>window.location.replace('http://127.0.0.1/login.html')</script>";
}
//echo "<scipt>alert('회원가입 성공');location.href"

?>
