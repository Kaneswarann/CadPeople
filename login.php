<?php
session_start();
include_once ("conexao.php");
if (isset($_SESSION['usuario'])){
    header("Location: user.php");
}
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <title>Login</title>
</head>
<body class="page">
    <main class="Main">
        <form action="processoLogin.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario"><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha"><br>
        <input type="submit" value="Entrar" id="entrar"><br>
        <p>Caso não tenha conta clique <a href="index.php">aqui</a>.</p>
        </form>
    <main>
</body>
</html>