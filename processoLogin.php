<?php
session_start();
include_once ("conexao.php");
$usuario = filter_input (INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$senha = filter_input (INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$query = "SELECT * FROM usuarios WHERE login = '$usuario' AND senha = '$senha'";
$resultado = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($resultado);
echo $row["login"];
if ($row!=NULL){
    $_SESSION['usuario']=$row["login"];
    header('Location:user.php');
   
}else {
    header('Location:login.php');
}
