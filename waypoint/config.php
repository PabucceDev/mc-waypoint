<?php 

try{
$db = new PDO("mysql:host=sql213.epizy.com;dbname=epiz_25056013_waypoint;charset=utf8","epiz_25056013","XVg2Hz162wCV6Ph");
}catch(PDOException $mesaj){
	
	
	echo $mesaj->getmessage();
	
	
}

?>