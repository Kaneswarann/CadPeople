<?php
session_start();
include_once ("conexao.php");
if (!isset($_SESSION['usuario'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <title>Pagina Principal</title>
</head>
<body class="content">
        <header>
         <p>Olá, <?php echo $_SESSION['usuario'] ?></p>
         <a href="deslogar.php">Deslogar</a>
        </header>
        <main>
            <div class="cont">
                <div class="image">
                    <div class="row" id="steam">
                        <a href="https://store.steampowered.com/?l=portuguese"><img src="./img/steam.png"></a>
                    </div>
                    <div class="row" id="disc">
                        <a href="https://discord.com/"><img src="./img/disc.png" ></a>
                    </div>
                    <div class="row" id="fb"> 
                        <a href="https://www.facebook.com/"><img src="./img/fb.png"></a>
                    </div>
                    <div class="row" id="twitch">
                        <a href="twitch.tv"><img src="./img/twitch.png"></a>
                    </div>
                    <div class="row" id="tt"> 
                        <a href="https://twitter.com/"><img src="./img/twitter.png"></a>
                    </div>
                    <div class="row" id="yt">
                        <a href="https://www.youtube.com/"><img src="./img/yt.png"></a>
                    </div>
            </div> 
        </main>  
</body>
</html>