<?php

include '../dbh.php';
include '../PHPMailer-master/PHPMailerAutoload.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];

if($first != "" && $last != "" && $uid != "" && $pwd != "" && $email !=""){
$sql = "INSERT INTO login (first,last,uid,pwd,email)
VALUES ('$first','$last','$uid','$pwd','$email')";
$conn->query($sql);

$string = "<p>Uspesno ste se registrovali na nas sajt</p>";
$mailSUB = "REGISTRACIJA";
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
$mail ->AddAddress($_POST['email']);

if(!$mail ->Send()){
  echo "not send";
}else {
  echo "sent";
}

?>

<script type="text/javascript">
alert("Uspesno ste se registrovali!Molimo vas sacekajte");
window.location.href = "../index.php";
//window.location.href = "../index.php";
</script>

<?php

}else {
  echo "NISTE POPUNILI SVA POLJA";
  ?>
  <script type="text/javascript">
  alert("niste popunili sva polja!");
  window.location.href = "../signup.php";
  </script>

  <?php
}


 ?>
