<?php
include 'header.php';
$data = $_POST['search'];
if($data != ""){
$sql = "SELECT * FROM comicbook WHERE ime LIKE '%".$data."%'";
$resut = $conn->query($sql);
?>
<body style="background-image: url('TMNT.jpg');background-repeat: no-repeat;background-size: 100%;background-attachment: fixed;">
<?php
echo "<div id = 'omot'>";
while($row = $resut->fetch_assoc()){
echo "<div class = 'strip'> <form method= 'POST'>
    <img src=".$row['slika']."   width=200 height=300>
    <p>".$row['ime']."</p>
    <p>".$row['godina']."</p>
    <p>".$row['brstrana']."</p>
    <p>".$row['opis']."</p>
</form>
</div>";

}
}else {
  echo "NISTE UNELI NISTA";
}
 ?>
</div>
</body>
