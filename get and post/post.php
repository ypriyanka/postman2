<?php
$username= "priyanka";
$password= "2cd94980d1b0b7ca9c3b051b9f5097bd4a602f44";

//post function
$URL2=$_GET['url'];
$header=$_GET['header'];
$value=$_GET['value'];

$head=array(
"$header:$value"
) ;

$fields2 = array(
    "name"=> "curl_product10",
    "type"=> "physical",
    "description"=> "This timeless fashion staple will never go out of style!",
    "price"=>"29.99",
    "categories"=>array(24),
    "availability"=>"available",
    "weight"=>"0.5"
);

$fields=json_encode($fields2); 

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$URL2);
curl_setopt($ch,CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_POST,1); 
curl_setopt($ch,CURLOPT_POSTFIELDS,$fields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
$result=curl_exec ($ch);
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