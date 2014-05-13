<?php
$username= "priyanka";
$password= "3aca74c82b4e10b8547590d5471728c2935cff64";

//post function
$URL1="https://store-mlghek.mybigcommerce.com/api/v2/";
$URL2="https://store-mlghek.mybigcommerce.com/api/v2/products/";
$header="content-type";
$value="application/json";

$head=array(
"$header:$value"
) ;


$fields2=array(
    "name"=> "Plain27",
    "type"=> "physical",
    "description"=> "This timeless fashion staple will never go out of style!",
    "price"=>"29.99",
    "categories"=>array(14),
    "availability"=>"available",
    "weight"=>"0.5"
);

$fields=json_encode($fields2); 

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$URL1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY ) ;
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_URL,$URL2);
curl_setopt($ch,CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_POST,1); 
curl_setopt($ch,CURLOPT_POSTFIELDS,$fields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result=curl_exec ($ch);
//echo $result;
echo $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);  //get status code after curl_exec
 
/*$contents = htmlspecialchars($result);                   //in xml format
curl_close($ch);
echo"<pre>";
echo $contents;*/

$sxml = new SimpleXMLElement($result);                    //for xml in array format
//var_dump($sxml);                               
                                                 
echo $sxml->getName() . "<br>";                          //use php functions for xml parsing like chidren(), getName()

foreach($sxml->children() as $child)                     //for parsing all element names and values of simpleXML
  {
  echo $child->getName() . ": " . $child . "<br>";
  }                                                
echo "<br><br>";

echo $sxml->id;                                           //for geting particular elements value
 /*foreach($XML->entry as $Entry)
{
	echo $Entry->title . "\n";
}*/
?>