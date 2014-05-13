<?php
$username= "priyanka";
$password= "3aca74c82b4e10b8547590d5471728c2935cff64";
echo $link="https://store-mlghek.mybigcommerce.com/api/v2/products";
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