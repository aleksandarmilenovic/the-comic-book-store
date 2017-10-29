<?php

include 'header.php';

$uid = $_SESSION['uid'];
$comicbook = $_POST['comicbook'];
$aproval = "CEKA SE";
$sql = "INSERT INTO request ( username, comicbook,aproval) VALUES ('$uid','$comicbook','$aproval')";

$res = $conn->query($sql);

header('Location: index.php');
?>
