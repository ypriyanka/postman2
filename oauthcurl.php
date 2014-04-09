<?php
//$username= "priyanka";
//$password= "2cd94980d1b0b7ca9c3b051b9f5097bd4a602f44";
URL='https://store-bwh9m.mybigcommerce.com/api/v2/';
$head[]='Content-Type: application/x-www-form-urlencoded';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$URL);
curl_setopt($ch,CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
//curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
//curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

curl_setopt($ch, CURLOPT_POSTFIELDS, urlencode(
          "oauth_consumer_key=
           oauth_consumer_secret=
           oauth_token=2cd94980d1b0b7ca9c3b051b9f5097bd4a602f44
           oauth_token_secret=
           oauth_signature_method=HMAC-SHA1
           oauth_timestamp=1395995121
           oauth_nonce=hOHUSU
           oauth_version=1.0"));
		   
$result=curl_exec ($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
curl_close ($ch);
if($status_code==200)
{
	echo"login sucessfull<br>";
}
?>