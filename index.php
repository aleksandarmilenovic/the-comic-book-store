<?php
include 'header.php';



if(isset($_SESSION['id'])){
if($_SESSION['privilegue'] == 1){

}else {

}

}else {

}
$sql = "SELECT * FROM comicbook";
$resut = $conn->query($sql);
while($row = $resut->fetch_assoc()){
echo "<form method= 'POST'>
    <img src=".$row['slika']."   width=200 height=300>
    <p>".$row['ime']."</p>
    <p>".$row['godina']."</p>
    <p>".$row['brstrana']."</p>
    <p>".$row['opis']."</p>
</form>";

}

 ?>
