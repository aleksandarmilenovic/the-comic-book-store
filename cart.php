<?php

include 'header.php';


if(!isset($_SESSION['id'])){
?>
<script type="text/javascript">
window.location.href = "index.php";
alert("MORATE BITI ULOGOVANI !!!");
</script>
<?php
}else{

$username = $_SESSION['uid'];

$sql = "SELECT * FROM cart WHERE username = '$username'";

$resut = $conn->query($sql);

$price  = 0;
$string = "";
$i = "";
?>

<body style='background-color:#4286f4;'>
<div style="width:200px; margin:auto; margin-top:50px;">

<?php
$br = 0;
while($row = $resut->fetch_assoc()){
  $br  = $br +1;
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
  $price  = $price +$row['price'];
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
  echo "<form action='deleteItem.php' method='POST'>
  <input type='hidden' name='comicbook".$br."' value='".$row['comicbook']."'>
  <input type='submit' name='delete".$br."' value='Delete Item'>
  </form>";


}
if($price != 0){
  echo " <form action='buy.php' method='post'>
     <input type='submit' name='buy' value='BUY'>
   </form>";

}

}
 ?>
</div>
</body>
