<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-bottom: 16px solid blue;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body>

<h2>Sending SMS........</h2>

<div class="loader"></div>

</body>
</html>

<?php
include('config.php');

 $mobile_no = $_POST['mobile'];
 $desc = $_POST['desc'];

   //~ print_r($mobile_no);
   //~ print_r($desc);

   file_put_contents('number.txt', $mobile_no);
   file_put_contents('desc.txt', $desc);
   
   
   $sql = "insert into transaction_sms (`mob_no`, `message`, `sent_at`) values('".$mobile_no."', '".$desc."', now())" ;
	$res = mysqli_query($conn,$sql);
   
   
   header("Refresh:5; url=home.php", true, 303); /* Redirect browser */
   exit();

   ?>
