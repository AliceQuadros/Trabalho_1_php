<?php
session_start(); //chama função que inicia uma nova sessão ou resume uma sessão existente

if(isset($_REQUEST['usuario'])){
    $usuario = $_SESSION['usuario'];
    echo("Usuário: $usuario"); //$usuario recebe o usuário
    include("logoutform.php");//aparece formulário para deslogar-se
}
else {
    include("login.php");//inclui formulário para logar-se
    exit();//força a saída pois nada será executado depois disso
}
?>