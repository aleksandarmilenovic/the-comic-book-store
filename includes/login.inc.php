<?php
session_start();
include '../dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM login WHERE uid = '$uid' AND pwd = '$pwd'";
$resut = $conn->query($sql);

if(!$row = $resut->fetch_assoc()){
  echo "wrong";
  ?>
  <script type="text/javascript">
  window.location.href = "../index.php";
  alert("Neispravna sifra ili lozinka!!");
  //window.location.replace("localhost/comicbookstore/index.php"):
  </script>
  <?php
}else{
?>
<script type="text/javascript">
window.location.href = "../index.php";
alert("Uspesno ste se prijavili!!");
</script>
<?php
  $_SESSION['id']= $row['id'];
  $_SESSION['privilegue'] = $row['privilegue'];
  $_SESSION['email'] = $row['email'];
  $_SESSION['uid'] = $row['uid'];
}
//header("Location: ../index.php");


 ?>
