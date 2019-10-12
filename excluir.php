<?php

include "funcoes.php";

$id = $_POST['botao-sim'];

if(isset($_POST['botao-nao'])){
	header("Location: index.php");
}

    echo ($id);

    $sql = "delete from artigo where artCodig = ?";
	fazConsultaSegura($sql, array($id));
	
	header("Location: index.php");
