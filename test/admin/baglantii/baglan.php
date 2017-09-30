<?php 

try{
	$db=new PDO("mysql:host=localhost;dbname=sauemkc1_sauemk;charset=utf8", 'sauemkc1_master','sauEMK.17');
}

catch(PDOExpception $e){

echo $e->getMessage();

}

?>