<?php
//authentication
$username= "priyanka";
$password= "3aca74c82b4e10b8547590d5471728c2935cff64";
$URL='https://store-mlghek.mybigcommerce.com/api/v2/';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
$result=curl_exec ($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   
curl_close ($ch);
if($status_code==200)
{
	echo"login sucessfull";
}
?>