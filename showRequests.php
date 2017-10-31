<?php
include 'header.php';

$sql = "SELECT * FROM request WHERE 1";
$resut = $conn->query($sql);

while($row =$resut->fetch_assoc()){
    echo "<p>".$row['username']."     ".$row['comicbook']."       ".$row['aproval']."</p>";
}

 ?>
