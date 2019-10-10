<?php

	if ($_REQUEST['botao'] == 'excluir'){
		$id = $item['artCodig'];
	

		include("teste-excluir.php");
	}
	else  if ($_REQUEST['botao'] == 'sim'){
	
		$sql = "delete from contato where artCodig = ?";
		fazConsultaSegura($sql,array(),$id);
	}


?>
