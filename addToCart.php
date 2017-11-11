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
echo $username;
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

$sql1 = "SELECT * FROM cart WHERE comicbook = '$comicbook' AND username = '$username'";
$resut1 = $conn ->query($sql1);
$priceP = 0;
$countP = 0;
while($row = $resut1->fetch_assoc()){

$priceP = $priceP + $row['price'];
$countP = $countP + $row['count'];

}

if($priceP > 0){
$priceP = $priceP + $price;
$countP = $countP + $kolicina;
  $sql2 = "UPDATE cart SET price = $priceP,count = $countP WHERE username = '$username' AND comicbook = '$comicbook'";
  $r = $conn ->query($sql2);

}else {
$cena = $price*$kolicina;
  $sql = "INSERT INTO cart (username,comicbook,count,price,godina,brstrana,opis,slika) VALUES ('$username','$comicbook','$kolicina','$cena',
  '$godina','$brstrana','$opis','$slika')";
  $r2 = $conn->query($sql);

}

//header("Location: index.php");

}
 ?>
