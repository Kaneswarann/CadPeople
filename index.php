<?php
session_start();
include_once ("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <title>Cadastrar</title>
</head>
<body class="page">
    <main class="Main">
    <form action="cadastro.php" method="POST">
    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario"><br>
    <label for="senha" id="senha">Senha:</label>
    <input type="password" id="senha" name="senha"><br>
    <input type="submit" value="Cadastrar" id="entrar"><br>
    <p>Caso já tenha conta clique <a href="login.php">aqui</a>.</p>
    </form>
    </main>
</body>
</html>