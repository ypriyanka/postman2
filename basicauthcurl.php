<?php
//authentication
$username= "priyanka";
$password= "2cd94980d1b0b7ca9c3b051b9f5097bd4a602f44";
$URL='https://store-bwh9m.mybigcommerce.com/api/v2/';

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