<?php

include_once ("../funcoes.php");


$id = $_POST['botao-sim'];

if(isset($_POST['botao-nao'])){
	header("Location: exibe_mensa.php");
}
    $sql = "delete from contato where conCodig = ?";
	fazConsultaSegura($sql, array($id));
	header("Location: ../index.php?r=p");
