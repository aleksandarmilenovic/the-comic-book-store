<?php
include 'header.php';

if(isset($_SESSION['id'])){
//echo $_SESSION['id'];
}else {

}
?>
<body style="background-image: url('marvel.jpeg');background-repeat: no-repeat;background-size: 100%;">
<div id="omotSignUp">
  <div id="omotSignUp2">
  <?php
  echo "<form id='formaSignUp' action='includes/signup.inc.php' method='POST'>
    <input type='text' name='first' placeholder='Firstname'><br>
    <input type='text' name='last' placeholder='Lastname'><br>
      <input type='text' name='email' placeholder='email'><br>
    <input type='text' name='uid' placeholder='username'><br>
    <input type='password' name='pwd' placeholder='password'><br>
    <button type='submit' name='button'>SIGN UP</button><br>
  </form><br><br><br>";
   ?>
 </div>
</div>
</body>
