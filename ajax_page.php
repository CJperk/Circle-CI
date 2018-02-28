<?php 
include('config.php');
  

if($_GET['mobile']!="")
{
	//print_r($_GET); exit;
	$mobile_no = $_GET['mobile'];
	$desc = $_GET['desc'];
	
	file_put_contents('number.txt', $mobile_no);
	file_put_contents('number.txt', $desc);
	
	//~ exit;
}
	
	//~ $message = urlencode($desc);
	//~ $url = "http://sms.glg.co.in/sendunicodesms?uname=".SMS_UNAME."&pwd=".SMS_PWD."&senderid=".SMS_SID."&to={$mobile_no}&msg={$message}&route=".SMS_ROUTE;
	//~ $content = "";
	//~ $ch = curl_init($url);
	//~ curl_setopt($ch, CURLOPT_POST, true);
	//~ curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
	//~ curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	//~ $output[] = curl_exec($ch);
	//~ curl_close($ch);
	//print_r($output[0]); 
	
	//~ if($output[0]!="")
	//~ {
	//~ echo $sql = "insert into transaction_sms (`mob_no`, `message`, `sent_at`, `job_id`) values('".$mobile_no."', '".$desc."', now(), '".$output[0]."' )" ;
		//~ $res = mysqli_query($conn,$sql);
		//~ if(!$res)
		//~ {
			//~ echo "1";
		//~ }
		//~ else 
		//~ {
			//~ echo "0";
		//~ }
	//~ }
	
	
	//~ exit;
//~ }	



?>
