<?php
include 'header.php';

$sql = "SELECT * from login";
$resut = $conn->query($sql);
$br = 0;
while($row = $resut->fetch_assoc()){
  echo "<form action='changeP.php' method='POST'>
  <p>NAME: ".$row['first']."</p>
  <p>LASTNAME: ".$row['last']."</p>
  <p>USERNAME :".$row['uid']."</p>
  <p>PASSWORD:".$row['pwd']."</p>
  <p>EMAIL: ".$row['email']."</p>
    <input type='hidden' name='ime".$br."' value='".$row['first']."'>
    <input type='hidden' name='prezime".$br."' value='".$row['last']."'>
    <input type='hidden' name='username".$br."' value='".$row['uid']."'>
    <input type='hidden' name='sifra".$br."' value='".$row['pwd']."'>
    <input type='hidden' name='email".$br."' value='".$row['email']."'>";
    if($row['privilegue'] == 0){
      echo "<select name = 'privilegue".$br."'>
        <option value='korisnik'>korisnik</option>
        <option value='admin'>admin</option>
      </select>";
    }else {
      echo "<select name = 'privilegue".$br."'>
        <option value='admin'>admin</option>
          <option value='korisnik'>korisnik</option>
      </select>";
    }
  echo "<input type='submit' name='dugme".$br."' value='Change privilegue'/>
  </form>";
  $br = $br+1;
}

 ?>
