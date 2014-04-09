<?php
$username= "priyanka";
$password= "2cd94980d1b0b7ca9c3b051b9f5097bd4a602f44";
echo $link=$_GET['link'];
//post function
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$link);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
echo $result=curl_exec ($ch);
echo $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);  
curl_close ($ch);

?>