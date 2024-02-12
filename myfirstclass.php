<?php

class class_parent{
	
	private $username="root";
	private $password='';
	private $dsn="mysql:host=localhost;dbname=db_eshop";
	private $attr=array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	public $db;
	
	
	public function __construct(){
		
		$this->db=new PDO($this->dsn,$this->username,$this->password,$this->attr);
		$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		
		
		}
	
	
	
	public function connect(){
		
		$db=new PDO($this->dsn,$this->username,$this->password,$this->attr);
		
		return $db;
		
		}
		
	
	public function select($sql,$array=array(),$style=PDO::FETCH_ASSOC){
		
		$stmt=$this->db->prepare($sql);
		
		foreach($array as $key=>$value){
	
	    $stmt->bindValue($key+1,$value);
	
	
	        }/*forach*/
			
		$stmt->execute();

        $result=$stmt->fetchAll($style);
		
		
		
		return $result;
		
		}/*select*/
		
		
		function myquery($sql,$array=array()){
			
			$stmt=$this->db->prepare($sql);
			
			foreach($array as $key=>$value){
	
	        $stmt->bindvalue($key+1,$value);
	
	
	                  }/*foreach*/
			
			$stmt->execute();
			
			}/*update*/
			
			
			
			
			function num($sql,$array=array()){
			
			$stmt=$this->db->prepare($sql);
			
			foreach($array as $key=>$value){
	
	        $stmt->bindvalue($key+1,$value);
	
	
	                  }/*foreach*/
			
			$stmt->execute();
			
			return $stmt->rowCount();
			
			}/*num*/
			
			
			
			
			
public function send($url,$api,$amount,$redirect){
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POSTFIELDS,"api=$api&amount=$amount&redirect=$redirect");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$res = curl_exec($ch);
curl_close($ch);
return $res;
}



public function get($url,$api,$trans_id,$id_get){
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POSTFIELDS,"api=$api&id_get=$id_get&trans_id=$trans_id");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$res = curl_exec($ch);
curl_close($ch);
return $res;
}

			
			
	
	
public function sms($mobile,$text){
				
ini_set("soap.wsdl_cache_enabled", "0");
$sms_client = new SoapClient('http://87.107.121.54/post/send.asmx?wsdl',array('encoding'=>'UTF-8'));

$parameters['username'] = "user";
$parameters['password'] = "pasword";

$parameters['to'] =$mobile;
$parameters['from'] = "10000066869333";
$parameters['text'] =$text;
$parameters['isflash'] =false;
$sms_client->SendSimpleSMS2($parameters);

		
		}//sms
		
	
		
		
	function cmp_function($a,$b){
	
	if($b['sort']>$a['sort']){return 1;}
	if($b['sort']<$a['sort']){return -1;}
	if($a['sort']==$b['sort']){return 0;}

	}
	
	
	function mahsoolat_at_position($position){
		
		$sql="select * from tblposition where position='".$position."' ";
        $res=$this->select($sql);
		
		$mahsoolat=array();
		
		foreach($res as $row){
	
	    $sql2="select * from tblmahsool where id=".$row['idmahsool']."  ";
		$res2=$this->select($sql2);
		
		if($res2[0]['disable']==0){
	    array_push($mahsoolat,$res2[0]);
		}
	
	
		}
	
	

    usort($mahsoolat,array('class_parent','cmp_function'));
		

		
		return $mahsoolat;
		
		
		}
	
	
	
	
	
	}/*class*/
	
	


?>








