<?php

include 'header.php';

$sql = "SELECT * FROM request";
$resut = $conn->query($sql);
$br = 0;
while($row =$resut->fetch_assoc()){

  echo "<form action='update.php' method='POST'>
    <p>".$row['username']."</p>
    <p>".$row['comicbook']."</p>
    <input type='hidden' name='comicbook".$br."' value='".$row['comicbook']."'>
    <button type='submit' name='APROVE".$br."'>APROVE</button>
    <button type='submit' name='DISAPROVE".$br."'>DISAPROVE</button>

  </form>";

$br = $br + 1;
}

 ?>
