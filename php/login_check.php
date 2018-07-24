<?php
$ID = $_POST["N_ID"];
$PW = $_POST["N_PW"];

$db = mysqli_connect('localhost','root','autoset','dasom');
if(mysqli_connect_errno())
{
  echo "연결에러";
}
$pass_encode = md5($PW);
//아이디 비밀번호 확인
$table_name = "user";
$sql = "SELECT password FROM $table_name WHERE name = '$ID'";

if($result = mysqli_query($db, $sql))
{
    if(mysqli_num_rows($result) == 0)
    {
        echo "<script>alert('No matched ID.');</script>";
        echo "<script>window.location.replace('../login.html');</script>";
    }
    else
    {
        $row = mysqli_fetch_assoc($result);
        echo $pass_encode;
        if($row["password"] == $pass_encode) // 로그인 성공
        {
            // 리디렉션
            echo "<script>alert('Login Succeed.');</script>";
            echo "<script>location.href='http://localhost/main_page.html';</script>";
        }
        else
        {
            echo "<script>alert('Wrong Password.');</script>";
            echo "<script>window.location.replace('../login.html');</script>";
        }
    }
}
mysqli_free_result($result);
mysqli_close($db);
?>
