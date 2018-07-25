<?php
$db = mysqli_connect('localhost','root','autoset','dasom');
if(mysqli_connect_errno())
{
  echo "연결에러";
}

$result = mysqli_query($db,"SELECT * FROM movie");

echo "<table class = 'text-center'><tr>".
     "<th>순위</th><th>제목</th><th>예매율</th><th>개봉일</th>".
     "</tr>";
while ($row = mysqli_fetch_array($result))
{
  echo "<tr><td>". $row['rank']. "</td>".
       "<td>". $row['title']. "</td>".
       "<td>". $row['reserve']."</td>".
       "<td>".$row['date']."</td>".
       "</tr>";
}
echo "</table>"

//$result = mysqli_query($db, "delete from user where name = $row['name']")

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
