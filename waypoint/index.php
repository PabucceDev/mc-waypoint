<?php
session_start();
if($_SESSION){

}else{
    header("Location:/waypoint/login");
}
?>
<?php
include("config.php");

$sorgu=$db->prepare("SELECT * FROM waypoints");
$sorgu->execute();
$waypoint=$sorgu-> fetchAll(PDO::FETCH_OBJ);
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">  
<meta property="og:title" content="GavatCraft Waypoint Sistemi" />
<meta property="og:image" content="/src/Web/img/logo.png">
<meta name="og:description" content="Waypoint önemli. sonra kayboluyoz" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="shortcut icon" href="Web/img/logo.png">
<script src="/src/Web/js/style.js"></script>
</head>
<title>GavatCraft Waypoint</title>
<style>
body{
    background-color:#101010;
}
.content{
    width:900px;
    padding:10px;
    margin:auto;
    max-height:590px;
    box-shadow:0px 0px 10px black;
    background-color:#202020;
    overflow:auto;
}
.content input{
    border:none;
    border-bottom:1px solid white;
    outline:none;
    background-color:#202020;
    color:white;
    padding:10px;
    font-size:16;
    transition:0.5s;
    width:440px;
    display:inline;
    margin-right:7px;
}
.content input:focus{
    border-bottom:1px solid #267abf;
    transition:0.5s;
}
.content .kaydet{
    width:100%;
    display:block;
    margin-top:10px;
    background-color:#267abf;
    color:white;
    border:none;
    outline:none;
    padding:10px;
    font-size:15px;
    text-transform:uppercase;
    letter-spacing:2px;
    transition:0.5s;
    cursor:pointer;
}
.content .kaydet:hover{
    background-color:#1b5b8f;
    transition:0.5s;
}
.content table{
    color:white;
    width:100%;
    font-family:sans-serif;
    border-collapse:collapse;
}
.content table .one{
    background-color:#154369;
    font-weight:bold;
}
.content table .one td{
    background-color:#154369;
}
.content table td{
    border:1px solid white;
    padding:10px;
    background-color:#101010;
}
.content table td button{
    width:30px;
    height:30px;
    border-radius:50%;
    border:none;
    outline:none;
    color:white;
    background-color:#5a83a6;
    cursor:pointer;
    display:block;
    margin:auto;
}
::-webkit-scrollbar {width:5px; background-color:#101010;}
::-webkit-scrollbar-thumb {background-color: #267abf;}
::-webkit-scrollbar-thumb:hover {box-shadow:0 0 30px 0 #000;}
span{
    color:white;
    font-family:sans-serif;
}
</style>
<body>
<div class="content">
    <?php 
    include("config.php");
    $v = $db->prepare("insert into waypoints set isim=?,kordinat=?,kod=? ");
    if($_POST){
        $isim = $_POST["waypoint"];
        $kordinat = $_POST["kordinat"];
        $kod ="/tp $kordinat";
        if(!$isim || !$kordinat){
            echo "<span>Boş alan bırakmayınız.</span>";	 
        }else{
        $x = $v->execute(array($isim,$kordinat,$kod));
            if($x){
                header("Location:/");
            }else{
                echo "<span>Bu <b>kordinatta</b> yada bu <b>isimde</b> bir waypoint mevcut.</span>";
            }
        }
    }
    ?>
    <form method="POST">
        <input type="text" autocomplete="off" name="waypoint" placeholder="Waypoint İsmi">
        <input style="float:right;" autocomplete="off" type="text" name="kordinat" placeholder="Kordinat">
        <button class="kaydet">kaydet</button>
    </form>
    <table>
        <tr class="one">
            <td>Waypoint İsmi</td>
            <td>Waypoint Koordinatı</td>
            <td>Işınlanma Kodu</td>
            <td>İşlemler</td>
        </tr>
        <?php 
            foreach($waypoint as $person){
        ?>
        <tr>
            <td><?= $person->isim ?></td>
            <td><?= $person->kordinat ?></td>
            <td><?= $person->kod ?></td>
            <td><button onclick="window.location.href='/waypoint/delete?id=<?= $person->id ?>';"><i class="fas fa-trash"></i></button></td>
        </tr>     
        <?php } ?>
    </table>
</div>
</body>
</html>