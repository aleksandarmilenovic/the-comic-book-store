<?php

include 'header.php';

if(!isset($_SESSION['id'])){
  echo "Morate biti ulogovani!!!!";
  ?>
  <script type="text/javascript">
  window.location.href = "index.php";
  alert("Morate biti ulogovani!!!");
  </script>
  <?php
}else {


$username = $_SESSION['uid'];
$kolicina = 0;
$comicbook = "";
$godina = "";
$brstrana = "";
$opis = "";
$slika = "";
$price = 0;
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
  $tmpCena = $kolicina * $price;
$priceP = $priceP + $tmpCena;
$countP = $countP + $kolicina;
  $sql2 = "UPDATE cart SET count = $countP WHERE username = '$username' AND comicbook = '$comicbook'";
  $r = $conn ->query($sql2);
?>
<body>
  <script type="text/javascript">
alert("Uspesno ste dodali u korpu!Mozete nastaviti sa kupovinom!!");
window.location.href = "index.php";
</script>
</body>
<?php
}else {
$cena = $price*$kolicina;
  $sql = "INSERT INTO cart (username,comicbook,count,price,godina,brstrana,opis,slika) VALUES ('$username','$comicbook','$kolicina','$cena',
  '$godina','$brstrana','$opis','$slika')";
  $r2 = $conn->query($sql);
?>
<script type="text/javascript">
window.location.href = "index.php";
alert("Uspesno ste dodali u korpu!Mozete nastaviti sa kupovinom!!");
</script>
<?php

}

}
 ?>
