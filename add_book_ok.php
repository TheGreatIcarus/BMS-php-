<?php
include "conn.php";
if(isset($_POST['submit'])&&$_POST['submit']=='增加')
{
  $title = $_POST['title'];
  $author = $_POST['author'];
  $ISBN = $_POST['ISBN'];
  $insert = mysqli_query($conn,"insert into tb_bookinfo(title,author,ISBN) VALUES ('$title','$author','$ISBN')");
  if($insert)
  {echo "<script>alert('增加数据成功');window.location.href='index.php';</script>";}
  else {
    echo "<script>alert('增加数据失败');window.location.href='index.php';</script>";
  }
}
 ?>
