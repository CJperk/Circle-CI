<?php 
include('config.php');
  
	$sql = "SELECT * FROM `transaction_sms` "; 
	$qry = mysqli_query($conn,$sql);
	if(mysqli_num_rows($qry)>0) 
	{
		$arr =array();
		while($row = mysqli_fetch_assoc($qry))
		{
			$arr[] = $row;
		}
		
	}
	echo json_encode($arr);

?>
