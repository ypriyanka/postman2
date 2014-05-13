<?php
$input2=array(
    "name"=> "Plain T-Shirt16",
    "type"=> "physical",
    "description"=> "This timeless fashion staple will never go out of style!",
    "price"=>"29.99",
    "categories"=>array(1),
    "availability"=>"available",
    "weight"=>"0.5"
);
$input1 =json_encode($input2);
var_dump($input1);

$ch = curl_init();
 curl_setopt($ch, CURLOPT_URL,"https://store-mlghek.mybigcommerce.com/api/v2/");
 curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY ) ;
 echo 1;
curl_setopt($ch, CURLOPT_USERPWD, 'priyanka:3aca74c82b4e10b8547590d5471728c2935cff64');
//$ch=curl_init();
 curl_setopt($ch, CURLOPT_URL,"https://store-mlghek.mybigcommerce.com/api/v2/products");
 //curl_setopt($ch, CURLOPT_USERPWD, 'jyotsna:e034cef504f956523b80296772042ee53c980d8f');

 curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
 curl_setopt($ch, CURLOPT_POST, 1);  // tell curl you want to post something
curl_setopt($ch, CURLOPT_POSTFIELDS, $input1); // define what you want to post
//curl_setopt($ch, CURLOPT_URL,"https://store-uzahrx.mybigcommerce.com/api/v2/products/105"); #set the url and get string together

 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return the output in string format
 
 echo curl_exec ($ch); // execute
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
echo $status_code;
curl_close ($ch); // close curl handle


?>