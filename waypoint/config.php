<?php 

try{
$db = new PDO("mysql:host=sql113.epizy.com;dbname=25057013_waypoint;charset=utf8","25056013","passh");
}catch(PDOException $mesaj){
	
	
	echo $mesaj->getmessage();
	
	
}

?>
