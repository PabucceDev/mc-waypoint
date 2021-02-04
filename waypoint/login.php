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
<title>GavatCraft Waypoint Login</title>
<style>
body{
    background-color:#101010;
}
.login-content{
    background-color:#202020;
    color:white;
    padding:10px;
    width:300px;
    box-shadow:0px 0px 10px black;
    margin:auto;
    margin-top:15%;
}
.login-content input{
    width:100%;
    outline:none;
    background-color:#202020;
    border:none;
    border-bottom:1px solid white;
    color:white;
    padding:10px;
    font-size:16;
    transition:0.5s;
}
.login-content input:focus{
    border-bottom:1px solid #267abf;
    transition:0.5s;
}
.login-content button{
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
.login-content button:hover{
    background-color:#1b5b8f;
    transition:0.5s;
}
span{
    font-family:sans-serif;
}
</style>
<body>
<div class="login-content">
    <?php 
    session_start();
    include("config.php");
    $v = $db->prepare("select * from users where username=? and password=?");
    if($_POST){
        $username = $_POST["isim"];
        $sifre = $_POST["sifre"];
    $v->execute(array($username,$sifre));
    $x = $v->fetch(PDO::FETCH_ASSOC);
    $d = $v->rowCount();
    if($d){
        $_SESSION["username"] = $x["username"];
    }else{
        echo "<span>Geçersiz bilgi girdiniz.</span>";
    }
    }
    if($_SESSION){
        header("Location:/waypoint");
    }else{
        echo"";
    }
    ?>
    <form method="POST">
        <input type="text" autocomplete="off" name="isim" placeholder="Kullanıcı Adı">
        <input type="password" autocomplete="off" name="sifre" placeholder="Şifre">
        <button>Giriş Yap</button>
    </form>
</div>
</body>
</html>