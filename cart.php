<?php

include 'header.php';


if(!isset($_SESSION['id'])){
  echo "Morate biti ulogovani!!!!";
}else{

$username = $_SESSION['uid'];

$sql = "SELECT * FROM cart WHERE username = '$username'";

$resut = $conn->query($sql);

$price  = 0;
$string = "";
$i = "";

while($row = $resut->fetch_assoc()){
  $sve= $row['count'] * $row['price'];
  $i = "<table border = '1'>
          <tr>
             <td rowspan = '6'>  <img src='".$row['slika']."'   width=200 height=300></td>
             <td>IME:".$row['comicbook']."</td>
          </tr>
          <tr>
             <td>GODINA PROIZVODNJE:".$row['godina']."</td>

          </tr>
          <tr>
             <td colspan = '3'>OPIS STRIPA:".$row['opis']."</td>
          </tr>
          <tr>
             <td colspan = '3'>BROJ STRANA:".$row['brstrana']."</td>
          </tr>
          <tr>
             <td colspan = '3'>KOLICINA:".$row['count']."</td>
          </tr>
          <tr>
             <td colspan = '3'>CENA:".$sve."</td>
          </tr>
       </table>";
  $price  = $price + $row['count']*$row['price'];
  $string = $string.$i;
  echo "<table border = '1'>
          <tr>
             <td rowspan = '6'>  <img src='".$row['slika']."'   width=200 height=300></td>
             <td>IME:".$row['comicbook']."</td>
          </tr>
          <tr>
             <td>GODINA:".$row['godina']."</td>

          </tr>
          <tr>
             <td colspan = '3'>OPIS:".$row['opis']."</td>
          </tr>
          <tr>
             <td colspan = '3'>BROJ STRANA:".$row['brstrana']."</td>
          </tr>
          <tr>
             <td colspan = '3'>KOLICINA".$row['count']."</td>
          </tr>
          <tr>
             <td colspan = '3'>CENA".$sve."</td>
          </tr>
       </table>";
}
if($price != 0){
  echo " <form action='buy.php' method='post'>
     <input type='submit' name='buy' value='BUY'>
   </form>";

}

}
 ?>
