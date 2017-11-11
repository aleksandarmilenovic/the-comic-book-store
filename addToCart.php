<?php

include 'header.php';

if(!isset($_SESSION['id'])){
  echo "Morate biti ulogovani!!!!";
}else {


$username = $_SESSION['uid'];
$kolicina = " ";
$comicbook = "";
$godina = "";
$brstrana = "";
$opis = "";
$slika = "";

for($i = 0;$i < 1000;$i++){

      if(isset($_REQUEST['buy'.$i])){
        $kolicina = $_POST['count'.$i];
        $comicbook = $_POST['ime'.$i];
        $price = $_POST['cena'.$i];
        $godina =  $_POST['godina'.$i];
        $brstrana = $_POST['brstrana'.$i];
        $opis = $_POST['opis'.$i];
        $slika = $_POST['slika'.$i];
      }

}

$sql = "INSERT INTO cart (username,comicbook,count,price,godina,brstrana,opis,slika) VALUES ('$username','$comicbook','$kolicina','$price',
'$godina','$brstrana','$opis','$slika')";
$resut = $conn->query($sql);

header("Location: index.php");

}
 ?>
