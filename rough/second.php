<?php
$username= $_GET['username'];
$password= $_GET['password'];


$URL='https://store-bwh9m.mybigcommerce.com/api/v2/';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$URL);

curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
$result=curl_exec ($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
curl_close ($ch);
if($status_code==200)
{
	echo"login sucessfull<br>";
}
?>
<html>
	<body>
		<form method="GET" action="get.php">
	    <label for="link">link</label>
		<input type="text" name="link">	
		<input type="submit" value="get data" name="get">
		</form> 
		
		<form method="GET" action="post.php">
		<label for="url">Url</label>
		<input type="text" name="url">	
		<label for="header">header</label>
		<input type="text" name="header">	
		<label for="value">value</label>
		<input type="text" name="value">	
		<input type="submit" value="post data" name="post">
		</form> 
	</body>
</html>

