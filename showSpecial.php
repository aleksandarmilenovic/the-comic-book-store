<?php

include 'header.php';

?>
<body style="background-image: url('BSPECIAL.png');background-repeat: no-repeat;background-size: 100%;background-attachment: fixed;">
<?php
$sql = "SELECT * FROM special";
$resut = $conn->query($sql);
echo "<body style='background-color:#4286f4;'><div id = 'omot'>";
$br = 0;
while($row = $resut->fetch_assoc()){
echo "<div class = 'strip'> <form action = 'addToCart.php' method= 'POST'>
    <img src=".$row['slika']."   width=200 height=300>
    <p>".$row['ime']."</p>
    <input type='hidden' name='ime".$br."' value='".$row['ime']."'>
    <input type='hidden' name='godina".$br."' value='".$row['godina']."'>
    <input type='hidden' name='brstrana".$br."' value='".$row['brstrana']."'>
    <input type='hidden' name='opis".$br."' value='".$row['opis']."'>
    <input type='hidden' name='slika".$br."' value='".$row['slika']."'>
    <p>GODINA: ".$row['godina']."</p>
    <p>BROJ STRANA: ".$row['brstrana']."</p>
    <p>OPIS: ".$row['opis']."</p>
    <p>CENA :".$row['cena']."</p>
    <input type='hidden' name='cena".$br."' value = ".$row['cena'].">
    <select name = 'count".$br."'>
      <option value='1'>1</option>
       <option value='10'>10</option>
        <option value='100'>100</option>
         <option value='1000'>1000</option>
    </select>
    <input type='submit' name='buy".$br."' value='BUY'>
</form>
</div>";

}
echo "</div></body>";
 ?>
