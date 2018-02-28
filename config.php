<?php
$conn = mysqli_connect('10.100.1.113','cri_poc','cri_poc','cri-poc');
//mysql_select_db('cri-poc', $conn);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
define("SMS_UNAME", "kgias");
define("SMS_PWD", "kgias");
define("SMS_SID", "KGRIDE");
define("SMS_ROUTE", "T");

?>
