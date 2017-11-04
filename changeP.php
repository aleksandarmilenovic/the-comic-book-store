<?php
include 'dbh.php';
$privilegue = "";
$email = "";
$red = 0;
$br = 0;
for($i = 0; $i < 100;$i++){
  if (isset($_REQUEST['dugme'.$i])) {
    $privilegue = $_POST['privilegue'.$i];
    $email = $_POST['email'.$i];
    }
}
echo $email;
echo $privilegue;
$privilegue1 = "";
if($privilegue == 'admin'){
  $privilegue1 = 1;
}else {
  $privilegue1 = 0;
}

$sql = "UPDATE login SET  privilegue = $privilegue1 WHERE email = '$email'";
$resut = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
header("Location: privileges.php");

 ?>
