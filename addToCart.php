<?php

include 'header.php';

$username = $_SESSION['uid'];
$kolicina = " ";
$comicbook = "";

for($i = 0;$i < 1000;$i++){

      if(isset($_REQUEST['buy'.$i])){
        $kolicina = $_POST['count'.$i];
        $comicbook = $_POST['ime'.$i];
        $price = $_POST['cena'.$i];
      }

}
echo $kolicina."<br>";
echo $comicbook."<br>";
echo $price."<br>";

$sql = "INSERT INTO cart (username,comicbook,count,price) VALUES ('$username','$comicbook','$kolicina','$price')";
$resut = $conn->query($sql);

header("Location: index.php");

 ?>
