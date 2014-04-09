<?php
    //not executed as bigc is not using SOAP
    username = "priyanka";
    $password = "2cd94980d1b0b7ca9c3b051b9f5097bd4a602f44";
   
    $ns = "https://store-bwh9m.mybigcommerce.com/api/v2/";

    $soap_client = new SoapClient('https://store-bwh9m.mybigcommerce.com/api/v2/');
	
//Body of the Soap Header. 
$headerbody = array('username'=>$username,'password'=>$password); 

//Create Soap Header.        
$header = new SOAPHeader($ns, 'UserCredentials', $headerbody);        

//set the Headers of Soap Client. 
$soap_client->__setSoapHeaders($header);
$value =$client->__soapCall("echoVoid", array(null));
echo $value;
?> 