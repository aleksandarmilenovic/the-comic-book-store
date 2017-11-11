<?php

include 'header.php';

$username = $_SESSION['uid'];
$comicbook = "";
for($i = 0;$i<100;$i++){
if(isset($_REQUEST['delete'.$i])){
      $comicbook = $_POST['comicbook'.$i];
}
}

$sql = "DELETE FROM cart WHERE username = '$username' AND comicbook = '$comicbook'";
$conn->query($sql);

header('Location: cart.php');
 ?>
