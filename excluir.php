<?php

if(isset($_REQUEST['botao'])){
	if ($_REQUEST['botao'] == 'excluir'){
		$id = $_REQUEST['id'];
		include("teste-excluir.php");
	}
	else  if ($_REQUEST['botao'] == 'sim'){
		$id = $_REQUEST['id'];
		$sql = "delete from contato where artCodig = ?";
		fazConsultaSegura($sql,array($id));
	}
}

?>
