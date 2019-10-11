<?php
	if ($_REQUEST['botao'] == 'excluir'){
		$id = $item['artCodig'];
		include("teste-excluir.php");
	}
	else  if ($_REQUEST['botao'] == 'sim'){
		$id = $item['artCodig'];
		$sql = "delete from artigo where artCodig = ?";
		fazConsultaSegura($sql,array($id));
	}


?>
