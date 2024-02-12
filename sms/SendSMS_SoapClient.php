<?php
// turn off the WSDL cache
ini_set("soap.wsdl_cache_enabled", "0");
  try {
$client = new SoapClient("http://87.107.121.54/post/send.asmx?wsdl");
 $parameters['username'] = "demo";
    $parameters['password'] = "demo";
    $parameters['from'] = "10000.";
    $parameters['to'] = array("912...");
    $parameters['text'] =iconv($encoding, 'UTF-8//TRANSLIT',"سلام");
    $parameters['isflash'] = true;
    $parameters['udh'] = "";
    $parameters['recId'] = array(0);
    $parameters['status'] = 0x0;
echo $client->GetCredit(array("username"=>"wsdemo","password"=>"wsdemo"))->GetCreditResult;
echo $client->SendSms($parameters)->SendSmsResult;
echo $status;
 } catch (SoapFault $ex) {
    echo $ex->faultstring;
}
?>
