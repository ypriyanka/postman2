<?php
/*//not executed
HttpClient httpClient = new DefaultHttpClient();
HttpGet httpGet = new HttpGet('https://store-bwh9m.mybigcommerce.com/api/v2/');
httpGet.addHeader(BasicScheme.authenticate(
 new UsernamePasswordCredentials("user", "password"),
 "UTF-8", false));

HttpResponse httpResponse = httpClient.execute(httpGet);
HttpEntity responseEntity = httpResponse.getEntity();
 echo $responseEntity;
// read the stream returned by responseEntity.getContent()
*/

$username1= "priyanka";
$password1= "3aca74c82b4e10b8547590d5471728c2935cff64";
$url1="https://store-mlghek.mybigcommerce.com/api/v2/";

function http_auth_get($url,$username,$password)
{
$cred = sprintf('Authorization: Basic %s',base64_encode("$username:$password") );
$opts = array(
'http'=>array(
'method'=>'GET',
'header'=>$cred)
);
$ctx = stream_context_create($opts);
$handle = fopen ( $url, 'r', false,$ctx);

return stream_get_contents($handle);
}

$response=http_auth_get($url1,$username1,$password1);
/*if($handle==200)
{
	echo"login sucessfull";
}
*/
echo $response."<br>"."login sucessfull";

?>