<?php
session_start();

 ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  <header>
    <nav>
      <ul><div id = "slika">
        <li><img src="logo.png" width="50" height="35"></li>
          </div>
        <li><a href="index.php">HOME</a></li>
        <?php
        if(isset($_SESSION['id'])){
          echo "<form action='includes/logout.inc.php' method='POST'>
            <button type='submit' name='button'>LOGOUT</button><br>
          </form>";
        }else {
          echo "<form action='includes/login.inc.php' method='POST'>
            <input type='text' name='uid' placeholder='username'>
            <input type='password' name='pwd' placeholder='password'>
            <button type='submit' name='button'>LOGIN</button><br>
          </form>";
        }

         ?>
        <li><a href="signup.php">SIGNUP</a></li>
      </ul>
    </nav>
  </header>
