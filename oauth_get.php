<?php
ini_set('display_errors',1);

use bigc_connection\Bigcommerce_Api\Connection;
//include the big coomerce api\connection
//than register this app in bigc n use dat client id and client secret?
//than use d below GET code to get details?

/*GET /auth?code=qr6h3thvbvag2ffq&scopes=store_v2_orders&context=stores/g5cd38 HTTP/1.1
Host: app.example.com*/

/*
$http = include 'https://store-bwh9m.mybigcommerce.com/api/v2/';
 // make a request and get a response stack
$request = $http->newRequest();
$request->setUrl('https://GET/auth?code=qr6h3thvbvag2ffq&scopes=store_v2_orders&context=stores/g5cd38 HTTP/1.1');
$stack = $http->send($request);
echo $stack[0]->content;
*/

tokenUrl = "https://login.bigcommerce.com/oauth2/token";
$connection = new Connection();
$connection->useUrlencoded();
$response = $connection->post($tokenUrl, array(
    "client_id" => "bfj66h7314erm0zbg2khtxcvfxjhoww",
    "client_secret" => "j22jgmx62dxrnz05q0dshpg6ohwp20l",
    "redirect_url" => "https://shopon.mybigcommerce.com/oauth",
    "grant_type" => "authorization_code",
    "code" => $request->get("code"),
    "scope" => $request->get("scope"),
    "context" => $request->get("context"),
));

$token = $response->access_token;
echo "ur token is:-".$token;
 
?>