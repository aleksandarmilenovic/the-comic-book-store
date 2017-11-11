<?php

include '../dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];

if($first != "" && $last != "" && $uid != "" && $pwd != "" && $email !=""){
$sql = "INSERT INTO login (first,last,uid,pwd,email)
VALUES ('$first','$last','$uid','$pwd','$email')";
$conn->query($sql);
}else {
  echo "NISTE POPUNILI SVA POLJA";
}
header("Location: ../index.php");

 ?>
