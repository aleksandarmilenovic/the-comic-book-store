<?php

include 'header.php';

include 'PHPMailer-master/PHPMailerAutoload.php';

$username = $_SESSION['uid'];
$mail = $_SESSION['email'];
$mailSUB = "ORDER";

$sql = "SELECT * FROM cart WHERE username = '$username'";

$resut = $conn->query($sql);

$price  = 0;
$string = "";
$i = "";
echo $mail;

while($row = $resut->fetch_assoc()){
  $sve = $row['price'] * $row['count'];
  $i = "<table border = '1'>
          <tr>
             <td rowspan = '6'>  <img src='".$row['slika']."'   width=200 height=300></td>
             <td>IME :".$row['comicbook']."</td>
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
}
$string = $string."<p>UKUPNA CENA:".$price."</p>";
$mail = new PHPMailer();
$mail ->IsSmtp();
$mail ->SMTPDebug = 1;
$mail ->SMTPAuth = true;
$mail ->SMTPSecure = 'ssl';
$mail ->Host = "smtp.gmail.com";
$mail ->Port = 465; // 587
$mail ->IsHTML(true);
$mail ->Username = "thecomicbookstore276@gmail.com";
$mail ->Password = "PPeerroo";
$mail ->SetFrom("thecomicbookstore276@gmail.com");
$mail ->Subject = $mailSUB;
$mail ->Body = $string;
$mail ->AddAddress($_SESSION['email']);

if(!$mail ->Send()){
  echo "not send";
}else {
  echo "sent";
}

$sql = "DELETE FROM cart WHERE username = '$username'";
$resut = $conn->query($sql);


 ?>

 <?php
header("Location: index.php");
  ?>
