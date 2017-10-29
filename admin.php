<?php

include 'header.php';

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

  ?>
