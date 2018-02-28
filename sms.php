<?php

require("php_serial.class.php");
$serial = new PhpSerial;
$serial->deviceSet("/../dev/ttyUSB0");

// Then we need to open it
$serial->deviceOpen('w+');

// We may need to return if nothing happens for 10 seconds
stream_set_timeout($serial->_dHandle, 10);

// We can change the baud rate
$serial->confBaudRate(9600);

// SMS inbox query - mode command and list command
//$serial->sendMessage("AT",1);
var_dump($serial->readPort());
$serial->sendMessage("AT+CMGF=1\r",1);
var_dump($serial->readPort());
$serial->sendMessage("AT+CMGL=\"ALL\"\r",2);
//echo (($serial->readPort())."FROM ECHO OOOOOOOOOOOOOOOOOO");
$a=$serial->readPort();
$exe = explode('+CMGL:',$a);
//print_r($exe);exit;


$con = mysqli_connect("10.100.1.113","cri_poc","cri_poc","cri-poc");
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

foreach($exe as $key => $val){

$spl = explode(',',trim($val));
//print_r($spl); exit;
if(isset($spl[1])!=''){

$dat4 = explode('"',$spl[4]);
$dat5 = explode('"',$spl[5]);
$date = $dat4[1]." ".$dat5[0];
//print_r($dat5);
if(strpos($dat5[1],'OK') === false)
{
	$msg  = trim($dat5[1]);
}
else
{
 $str = explode("OK",$dat5[1]);
 $msg  = trim($str[0]);
}

$num = explode('"',$spl[2]);
//print_r($num ); 
//echo $num[1]; exit;
if($num[1]!=""){
$number1 = explode('+91', $num[1]);

$number = $number1[1];

$sql1 = "select * from transaction_sms where mob_no = '".$number."' and output_response = '' ORDER BY id DESC LIMIT 1 "; // exit;
$ress =  mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($ress);
//echo "5156161661<br />";
$sql2 = "update transaction_sms set output_response = '".$msg."', received_date = now() where id = '".$row1['id']."'";
$res2 =  mysqli_query($con,$sql2);

$sql =  "INSERT INTO sms_read (mob_no,date,received_data)VALUES ('".$number."','".$date."','".$msg."')";
$res =  mysqli_query($con,$sql);
//print_r($res);
}
$ab=("AT+CMGD=$spl[0]\r");
$serial->sendMessage($ab,3);
var_dump($serial->readPort());
}
}
// If you want to change the configuration, the device must be closed
$serial->deviceClose();




