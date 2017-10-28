<?php

include 'header.php';

$sql = "SELECT * FROM login";

$resut = $conn->query($sql);

while($row = $resut->fetch_assoc()){
 echo $row['first'];
}
 ?>
