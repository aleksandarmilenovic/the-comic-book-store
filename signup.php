<?php
include 'header.php';

if(isset($_SESSION['id'])){
echo $_SESSION['id'];
}else {
  echo "niste ulogovani";
}

echo "<form action='includes/signup.inc.php' method='POST'>
  <input type='text' name='first' placeholder='Firstname'><br>
  <input type='text' name='last' placeholder='Lastname'><br>
  <input type='text' name='uid' placeholder='username'><br>
  <input type='password' name='pwd' placeholder='password'><br>
  <button type='submit' name='button'>SIGN UP</button><br>
</form><br><br><br>";


 ?>
