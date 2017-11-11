<?php
include 'header.php';


$ime = $_POST['name'];
$year = $_POST['year'];
$pages = $_POST['pages'];
$descrion = $_POST['descrion'];
$image = $_POST['image'];
$price = $_POST['price'];

$name = $_FILES['file']['name'];
$size = $_FILES['file']['size'];
$type = $_FILES['file']['type'];

$tmp_name = $_FILES['file']['tmp_name'];

$error = $_FILES['file']['error'];

if (isset($name)) {
  if (!empty($name)) {
    $loaction = 'Images/';

  if(move_uploaded_file($tmp_name,$loaction.$name)){
    $slika = $loaction.$name;
    $sql = "INSERT INTO comicbook (ime,godina,brstrana,opis,slika,cena)
    VALUES ('$ime','$year','$pages','$descrion','$slika','$price')";

    $conn->query($sql);
    header("Location: addNew.php");
  }
  }else {
    echo "NERADI";
  }
}elseif($ime != "" && $year != "" && $pages != "" && $descrion != "" && $image != "" && $price !=""){
$sql = "INSERT INTO comicbook (ime,godina,brstrana,opis,slika,cena)
VALUES ('$ime','$year','$pages','$descrion','$image','$price')";

$conn->query($sql);

header("Location: addNew.php");
}

else {
  echo "NISTE UNELI SVE PODATKE";
}

 ?>
