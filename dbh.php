<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "comicbookstore";

$conn = mysqli_connect($server,$user,$pass,$db);

if(!$conn){
  die("Connection failed".mysqyli_connect_error());
}


 ?>
