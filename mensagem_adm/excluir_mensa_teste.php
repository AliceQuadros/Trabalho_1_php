<?php
$id= $_POST['excluir'];
?>
	<h3>Tem certeza que deseja excluir esta mensagem? </h3>
	<form action='excluir_mensa.php' method="post">
		<input type="text" name="codigo" value="<?=$id?>" size =2 readonly><br>
        <button type="submit" name="botao-sim" value="<?=$id?>" class="botao_base botao_sim_form">Sim</button>
	    <button type="submit" name="botao-nao" value="não" class="botao_base botao_nao_form">Não</button>      
    </form>
    


