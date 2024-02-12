<?php
ini_set("soap.wsdl_cache_enabled", "0");
$sms_client = new SoapClient('http://87.107.121.54/post/Send.asmx?wsdl', array('encoding'=>'UTF-8'));

$parameters['username'] = "user";
$parameters['password'] = "pasword";
echo $sms_client->GetCredit($parameters)->GetCreditResult;
?>