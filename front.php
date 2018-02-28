
<?php

$field1 = $_GET["snum"];
//~ $field1 = "8122572218";

print_r($field1);

file_put_contents('number.txt', $field1);

?>


<html>
<form action="front.php" method="get">
  Phone Number: <input type="text" name="snum"><br> 
  <input type="submit" value="Submit">
</form>
</html>


