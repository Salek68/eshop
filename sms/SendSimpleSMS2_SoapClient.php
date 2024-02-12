<?php
// turn off the WSDL cache

ini_set("soap.wsdl_cache_enabled", "0");
$sms_client = new SoapClient('http://87.107.121.54/post/send.asmx?wsdl',array('encoding'=>'UTF-8'));


$parameters['username'] = "user";
$parameters['password'] = "pasword";
$parameters['to'] ='9396562210';
$parameters['from'] = "10000066869333";
$parameters['text'] ="تست";
$parameters['isflash'] =false;

$sms_client->SendSimpleSMS2($parameters);

?>
