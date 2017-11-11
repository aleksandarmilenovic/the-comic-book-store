<?php

include 'header.php';

?>

<body style="background-image: url('DP.jpg');background-repeat: no-repeat;background-size: 100%;">

<?php
echo "<div id='omotAdmin'>";
echo "<form action='REQUEST.php' method='POST'>
<p>WHICH COMICBOOK YOU WANT</p>
  <input type='text' name='comicbook' value=''>
  <button type='submit' name='button'>MAKE REQUEST</button>
</form>
";
echo "</div>";
 ?>
