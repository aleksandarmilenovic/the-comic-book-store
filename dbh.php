<?php

// $server = "sql112.byethost5.com";
// $user = "b5_21004125";
// $pass = "PPeerroo";
// $db = "b5_21004125_comicbookstore";

$server = "localhost";
$user = "root";
$pass = "";
$db = "comicbookstore";

$conn = mysqli_connect($server,$user,$pass,$db);

if(!$conn){
  die("Connection failed".mysqyli_connect_error());
}


 ?>
