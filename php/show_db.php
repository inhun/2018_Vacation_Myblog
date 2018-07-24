<?php
$db = mysqli_connect('localhost','root','autoset','dasom');
if(mysqli_connect_errno())
{
  echo "연결에러";
}

$result = mysqli_query($db,"SELECT * FROM user");

echo "<table class = 'text-center'><tr>".
     "<th>아이디</th><th>비밀번호</th><th>번호</th><th>이메일</th><th>삭제</th>".
     "</tr>";
while ($row = mysqli_fetch_array($result))
{
  echo "<tr><td>". $row['name']. "</td>".
       "<td>". $row['password']."</td>".
       "<td>". $row['phone']. "</td>".
       "<td>". $row['email']."</td></tr>".
      // "<td><button type ="button" name = "delete_btn" data-id2=".$row['id']." >.x.</button>.</td>".
       "</tr>";
}
echo "</table>"
// echo "<table bordere = '1'>
//   <tr>
//     <th>name</th>
//   </tr>";
// $n = 1;
// while($row = mysqli_fetch_array($result))
// {
//   echo"<tr>";
//   echo"<td>".$rd[name]."</td>";
//   echo"</tr>";
//   $n++;
// }
// echo"</table>";
//mysqli_close($db);
?>
