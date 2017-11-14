<?php
include 'header.php';

$sql = "SELECT * FROM request WHERE 1";
$resut = $conn->query($sql);
?>

<body style="background-image: url('GA.jpg');background-repeat: no-repeat;background-size: 100%;background-attachment: fixed;">

<div id="omotShowRequests">

<?php
while($row =$resut->fetch_assoc()){
    echo "<p>".$row['username']."     ".$row['comicbook']."       ".$row['aproval']."</p>";
}

 ?>
</div>
</body>
