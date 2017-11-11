<?php

include 'header.php';

?>

<body style="background-image: url('BT.jpg');background-repeat: no-repeat;background-size: 100%;">

<?php
echo "<div id='omotAdmin'>";

echo "<form action='serch.php' method='POST'>
      <input type='text' name='search'>
      <button type='submit' name='button'>SEARCH</button>
      </form><br>";

echo "<form  action='privileges.php' method='POST'>
      <button type='submit' name='button'>PRIVILEGUES</button>
      </form><br>";

echo "<form  action='requests.php' method='POST'>
      <button type='submit' name='button'>REQUESTS</button>
      </form><br>";

echo "<form  action='addNew.php' method='POST'>
      <button type='submit' name='button'>NEW COMICBOOK</button>
      </form><br>";

echo "</div>";
  ?>
