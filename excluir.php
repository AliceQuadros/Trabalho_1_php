<?php

include "funcoes.php";

$id = $_POST['botao-sim'];

if(isset($_POST['botao-nao'])){
	header("Location: index.php");
}

    $sql = "SELECT `artImage` from artigo where artCodig = ?";
	$retorno = fazConsultaSegura($sql, array($id));
	
	$sql = "delete from artigo where artCodig = ?";
	fazConsultaSegura($sql, array($id));
	unlink("upload/".$retorno[0]['artImage']);
	
	header("Location: index.php");
