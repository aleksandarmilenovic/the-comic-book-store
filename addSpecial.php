<?php
include 'header.php';

?>

<body style="background-image: url('SPECIAL.jpg');background-repeat: no-repeat;background-size: 100%;">
<div id="omotSearch" style="margin-top:150px;">

<?php
echo "<p>ADD NEW SPECIAL OFFER</p>";

echo "<form action='insertSpecial.php' method='post' enctype='multipart/form-data'><br>
 <input type='text' name='name' placeholder='ENTER NAME'><br>
 <input type='text' name='year' placeholder='ENTER YEAR'><br>
 <input type='text' name='pages' placeholder='ENTER NUMBER OF PAGES'><br>
 <input type='text' name='descrion' placeholder='ENTER DESCRIPTION'><br>
 <input type='text' name='image' placeholder='ENTER LINK TO IMAGE'>
  <input type='file' name='file' ><br>
 <input type='text' name='price' placeholder='ENTER PRICE'><br>
 <button type='submit' name='addNew'>CREATE NEW SPECIAL OFFER</button><br>
</form>";

 ?>
</div>
</body>
