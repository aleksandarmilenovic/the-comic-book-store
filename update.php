<?php

include 'header.php';


$comicbook = "";
$aprove = "ODOBRENO";
$disaprove = "ODBIJENO";
for($i = 0;$i < 100;$i++){
  if (isset($_REQUEST['APROVE'.$i])) {
          $comicbook = $_POST['comicbook'.$i];
          $sql = "UPDATE request SET  aproval = '$aprove' WHERE comicbook = '$comicbook'";
          $resut = $conn->query($sql);
    }
    if (isset($_REQUEST['DISAPROVE'.$i])) {
            $comicbook = $_POST['comicbook'.$i];
            $sql = "UPDATE request SET  aproval = '$disaprove' WHERE comicbook = '$comicbook'";
            $resut = $conn->query($sql);
      }
}

header("Location: requests.php");

 ?>
