<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>ALIKA</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
<?php
include("header.php");
$id= $_POST['excluir'];
?>
	<h3>Tem certeza que deseja excluir o seu post? </h3>
	<form action='excluir.php' method="post">
		<input type="text" name="codigo" value="<?=$id?>" size =2 readonly><br>
        <button type="submit" name="botao-sim" value="<?=$id?>" class="botao_base botao_sim_exclui">Sim</button>
	    <button type="submit" name="botao-nao" value="não" class="botao_base botao_nao_exclui">Não</button>      
    </form>
</body>
</html>



