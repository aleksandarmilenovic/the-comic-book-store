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
    $sql = "INSERT INTO special (ime,godina,brstrana,opis,slika,cena)
    VALUES ('$ime','$year','$pages','$descrion','$slika','$price')";

    $conn->query($sql);
    header("Location: addSpecial.php");
  }
}
}

if($ime != "" && $year != "" && $pages != "" && $descrion != "" && $image != "" && $price !=""){
$sql = "INSERT INTO special (ime,godina,brstrana,opis,slika,cena)
VALUES ('$ime','$year','$pages','$descrion','$image','$price')";

$conn->query($sql);

header("Location: addSpecial.php");
}else {
  ?>
  <script type="text/javascript">
  window.location.href = "addSpecial.php";
  alert("Niste uneli sve podatke !!!");
  </script>
  <?php
}
?>
