<?php
include "conn.php";
$result = mysqli_query($conn,"select * from tb_bookinfo");
echo "<table align = 'center' border ='1'>";
echo "<tr><td colspan='5' align='center'>图书管理系统  <a href='add_book.php'>添加图书</a></td></tr>";
echo "<tr><td>书名</td><td>ISBN</td><td>作者</td><td>删除</td></tr>";
while ($arr=mysqli_fetch_array($result)) {
  echo "<tr><td>$arr[title]</td><td>$arr[ISBN]</td><td>$arr[author]</td>";
  echo "<td><a href = 'delete.php?id=$arr[id]''>删除</a></td>";
  echo "</tr>";}
  echo "</table>";
?>
