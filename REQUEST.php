<?php

include 'header.php';

$uid = $_SESSION['uid'];
$comicbook = $_POST['comicbook'];

$sql = "INSERT INTO request ( username, comicbook) VALUES ('$uid','$comicbook')";

$res = $conn->query($sql);

header('Location: index.php');
?>
