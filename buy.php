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
}
$string = $string."<p>TOTAL:".$price."</p>";
$string = $string."<p>TOTAL:".$i."</p>";
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

header("Location: index.php");
 ?>
