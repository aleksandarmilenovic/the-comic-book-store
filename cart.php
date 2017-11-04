<?php

include 'header.php';

$username = $_SESSION['uid'];

$sql = "SELECT * FROM cart WHERE username = '$username'";

$resut = $conn->query($sql);

$price  = 0;
$string = "";
$i = "";

while($row = $resut->fetch_assoc()){
  $i = "<table border = '1'>
          <tr>
             <td rowspan = '6'>  <img src='".$row['slika']."'   width=200 height=300></td>
             <td>".$row['comicbook']."</td>
          </tr>
          <tr>
             <td>".$row['godina']."</td>

          </tr>
          <tr>
             <td colspan = '3'>".$row['opis']."</td>
          </tr>
          <tr>
             <td colspan = '3'>".$row['brstrana']."</td>
          </tr>
          <tr>
             <td colspan = '3'>".$row['count']."</td>
          </tr>
          <tr>
             <td colspan = '3'>".$row['price']."</td>
          </tr>
       </table>";
  $price  = $price + $row['count']*$row['price'];
  $string = $string.$i;
  echo "<table border = '1'>
          <tr>
             <td rowspan = '6'>  <img src='".$row['slika']."'   width=200 height=300></td>
             <td>".$row['comicbook']."</td>
          </tr>
          <tr>
             <td>".$row['godina']."</td>

          </tr>
          <tr>
             <td colspan = '3'>".$row['opis']."</td>
          </tr>
          <tr>
             <td colspan = '3'>".$row['brstrana']."</td>
          </tr>
          <tr>
             <td colspan = '3'>".$row['count']."</td>
          </tr>
          <tr>
             <td colspan = '3'>".$row['price']."</td>
          </tr>
       </table>";
}


 ?>

 <form action='buy.php' method='post'>
   <input type='submit' name='buy' value='BUY'>
 </form>
