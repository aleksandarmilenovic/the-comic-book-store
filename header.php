<?php
session_start();
include 'dbh.php';

 ?>
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

        <img src="logo.png"  id = "slika" width="50" height="35">
        <ul id ="xxx">
        <li><a href="index.php">HOME</a></li>
        <?php
        if(isset($_SESSION['id'])){
          echo "<form action='includes/logout.inc.php' method='POST'>
            <button type='submit' name='button'>LOGOUT</button><br>
          </form>";
          if($_SESSION['privilegue'] == 1){
            echo "<li><a href='admin.php'>ADMIN</a></li>";
          }else{
            echo "<li><a href='makeREQUEST.php'>MAKE REQUEST</a></li>";
          }
        }else {
          echo "<form action='includes/login.inc.php' method='POST'>
            <input type='text' name='uid' placeholder='username'>
            <input type='password' name='pwd' placeholder='password'>
            <button type='submit' name='button'>LOGIN</button><br>
          </form>
          <li><a href='signup.php'>SIGNUP</a></li>";
        }

         ?>
         <li><a href="showRequests.php">REQUESTS</a></li>
          <li><a href="cart.php">CART</a></li>
      </ul>
    </nav>
  </header>
