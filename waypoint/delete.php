<?php 
session_start();
include("config.php");
$id = $_GET["id"];
if($_SESSION){
    $v =  $db->prepare("delete from waypoints where id=?");
    $x = $v->execute(array($id));
    if($x){
        header("Location:/waypoint");
    }else{
        header("Location:/waypoint");
    }   
}else{
    header("Location:/waypoint/login");
}
?>