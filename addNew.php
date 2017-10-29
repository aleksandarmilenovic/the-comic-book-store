<?php
include 'header.php';

echo "<p>ADD NEW COMICBOOK</p>";

echo "<form action='insert.php' method='post'><br>
 <input type='text' name='name' placeholder='ENTER NAME'><br>
 <input type='text' name='year' placeholder='ENTER YEAR'><br>
 <input type='text' name='pages' placeholder='ENTER NUMBER OF PAGES'><br>
 <input type='text' name='descrion' placeholder='ENTER DESCRIPTION'><br>
 <input type='text' name='image' placeholder='ENTER LINK TO IMAGE'><br>
 <input type='text' name='price' placeholder='ENTER PRICE'><br>
 <button type='submit' name='addNew'>CREATE COMICBOOK</button><br>
</form>";

 ?>
