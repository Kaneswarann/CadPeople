<?php
session_start();
include_once ("conexao.php");
$usuario = filter_input (INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$senha = filter_input (INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$query = "INSERT INTO usuarios VALUES (null, '$usuario', '$senha')";
$resultado = mysqli_query($conn,$query);
header('Location:login.php');
