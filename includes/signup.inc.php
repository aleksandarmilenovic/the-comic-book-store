<?php

include '../dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO login (first,last,uid,pwd)
VALUES ('$first','$last','$uid','$pwd')";

$conn->query($sql);

header("Location: ../index.php");

 ?>
