<?php
$id= $_POST['excluir'];
?>
	<h3>Tem certeza que deseja excluir o seu post? </h3>
	<form action='excluir.php' method="post">
		<input type="text" name="codigo" value="<?=$id?>" size =2 readonly><br>
        <button type="submit" name="botao-sim" value="<?=$id?>">Sim</button>
	    <button type="submit" name="botao-nao" value="não">Não</button>      
    </form>
    


