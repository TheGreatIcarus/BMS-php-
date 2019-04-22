<?php
include "conn.php";
if(isset($_GET['id']))
{
  $delete=mysqli_query($conn,"delete from tb_bookinfo where id=$_GET[id]");
}
if($delete)
{
  echo "<script>alert('删除成功');window.location.href='index.php';</script>";
}
else {
  echo "<script>alert('删除失败');window.location.href='index.php';</script>";
}
  ?>
