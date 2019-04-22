<?php
$dbhost='localhost:3306';
$dbuser='root';
$dbpassword='';
$conn=mysqli_connect($dbhost,$dbuser,$dbpassword);
mysqli_select_db($conn,'db');
?>
