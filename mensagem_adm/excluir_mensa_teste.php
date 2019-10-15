<?php
$id = $_POST['excluir'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>ALIKA</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="../css/grid.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="shortcut icon" href="../img/favicon.ico">
</head>
<body>
	<div class="container contato-form teste">
	<div class="teste_2">	
	<div class="grid-8">
	<h3>Tem certeza que deseja excluir esta mensagem? </h3>
		</div>
	<form action='excluir_mensa.php' method="post">
		<div class="grid-2">
		<input type="text" name="codigo"  value="<?= $id ?>" class="contato-form exclui" readonly><br>
		
		<button type="submit" name="botao-sim" value="<?= $id ?>" class="botao_base botao_sim_form">Sim</button>
		<button type="submit" name="botao-nao" value="não" class="botao_base botao_nao_form">Não</button>
		</div>
	</form>
	</div>
	</div>
</body>

</html>