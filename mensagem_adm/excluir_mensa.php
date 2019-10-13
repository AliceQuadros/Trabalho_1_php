<?php

require_once "C:/xampp/htdocs/trabalho_1/Trabalho_1_php/funcoes.php";


$id = $_POST['botao-sim'];

if(isset($_POST['botao-nao'])){
	header("Location: exibe_mensa.php");
}
    $sql = "delete from contato where conCodig = ?";
	fazConsultaSegura($sql, array($id));
	header("Location: ../index.php");
