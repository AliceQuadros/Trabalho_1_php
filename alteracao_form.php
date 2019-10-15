<!-- formulario de alteração (karine) -->
<!-- mesmo formulario usado na inclusao de dados -->
<?php
session_start();
include_once "funcoes.php";

?>
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

if (isset($_GET['m'])) {
    echo ("Preencha todos os campos que são obrigatórios:<br> ");
    echo($_SESSION['erross']);
    $titulo = $_SESSION['titulo'];
    $texto = $_SESSION['texto'];
    $posicao = $_SESSION['posicao'];
    $id = $_SESSION['id'];

}else{
    $id = $_POST['alterar'];
}
$sql = "SELECT * FROM `artigo` WHERE `artCodig` = ?;";
$retorno = fazConsultaSegura($sql, array($id));

?>
<div class="container">

<form action = "alterar.php" method="post" enctype="multipart/form-data" class="contato-form">

    Código:<input type="text" name="codigo" value="<?= isset($_GET['m']) ? $id : $retorno[0]['artCodig']?>" readonly><br>
	*Titulo: <input type="text" name="titulo" value="<?=isset($_GET['m']) ? $titulo : $retorno[0]['artTitul']?>"><br>
    *Texto: <textarea type="text" name="texto"><?=isset($_GET['m']) ? $texto : $retorno[0]['artTexto']?></textarea> <br>
    Posição: <select  class="posicao_form" id="posicao_form" name="posicao" value="<?=$retorno[0]['artImpos']?>">
            <option value="D">Direita</option>
            <option value="E">Esquerda</option>
        </select> <br>
    <input type="hidden" name="image" value="<?=$retorno[0]['artImage']?>"> <br>

    Imagem:<br> <img class="imagem_post" src="upload/<?=$retorno[0]['artImage']?>" alt="imagem do post">
        <label class="label-altera" for="imagem">Enviar Imagem, caso não adicione nenhuma, ficará sem imagem</label> 
        <input type="file"  name="upload" >
        <p>* Campos obrigatórios</p>
        <!-- <input type="submit" name="botao" value="Voltar">
        <input type="submit" name="botao" value="Salvar" > -->
        
        <button class="voltar_botao botao_base"><a href="index.php">Voltar</a></button>
        <input type="submit" name="botao" value="Salvar" class="salvar_botao botao_base"> 
  
 



</form>



</div>
</body>

</html>
