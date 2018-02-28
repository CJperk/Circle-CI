<?php 
include('config.php');

	$sql = "SELECT * FROM `transaction_sms` where sms_status !='Delivered'"; // exit;
	$qry = mysqli_query($conn,$sql);
	if(mysqli_num_rows($qry)>0) 
	{
		while($row = mysqli_fetch_array($qry))
		{
			$job_id = $row["job_id"];
			$id = $row["id"];
	echo 		$url = "http://sms.glg.co.in/getdelivery/".SMS_UNAME."/".SMS_PWD."/".$job_id;
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$output[] = curl_exec($ch);
			curl_close($ch);
			$status = $output[0];		
			
	 		$sql1 = "update transaction_sms set sms_status = '".$status."', delevired_at = now() where id ='".$id."'";
			$qry1 = mysqli_query($conn,$sql1); 
		}
	}

  
?>


