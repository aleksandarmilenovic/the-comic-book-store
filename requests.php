<?php

include 'header.php';

$sql = "SELECT * FROM request";
$resut = $conn->query($sql);
$br = 0;
?>

<body style="background-image: url('F.jpg');background-repeat: no-repeat;background-size: 100%;background-attachment: fixed;">
<div id="omotSearch">

<?php
while($row =$resut->fetch_assoc()){
  if($row['aproval'] == 'CEKA SE'){
  echo "<form action='update.php' method='POST'>
    <p>".$row['username']."</p>
    <p>".$row['comicbook']."</p>
    <input type='hidden' name='comicbook".$br."' value='".$row['comicbook']."'>
    <button type='submit' name='APROVE".$br."'>APROVE</button>
    <button type='submit' name='DISAPROVE".$br."'>DISAPROVE</button>
    <button type='submit' name='DELETE".$br."'>DELETE</button>
  </form>";
  }

$br = $br + 1;
}

 ?>
</div>
</body>
