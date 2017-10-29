<?php
include 'header.php';


$name = $_POST['name'];
$year = $_POST['year'];
$pages = $_POST['pages'];
$descrion = $_POST['descrion'];
$image = $_POST['image'];
$price = $_POST['price'];

$sql = "INSERT INTO comicbook (ime,godina,brstrana,opis,slika,cena)
VALUES ('$name','$year','$pages','$descrion','$image','$price')";

$conn->query($sql);

header("Location: addNew.php");


 ?>
