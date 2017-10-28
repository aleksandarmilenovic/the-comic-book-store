<?php
include 'header.php';



if(isset($_SESSION['id'])){
if($_SESSION['privilegue'] == 1){
  echo "ADMIN";
  echo $_SESSION['id'];
}else {
  echo "Korisnik";
}

}else {
  echo "niste ulogovani";
}
 ?>
