<!-- formulario de alteração (karine) -->
<!-- mesmo formulario usado na inclusao de dados -->
<?php
 include "funcoes.php";

$id = $_POST['alterar'];
$sql = "SELECT * FROM `artigo` WHERE `artCodig` = ?;";
$retorno = fazConsultaSegura($sql, array($id));
var_dump($retorno);
?>
<div class="container">

<form action = "alterar.php" method="post" enctype="multipart/form-data" class="contato-form">

    Código:<input type="text" name="codigo" value="<?=$retorno[0]['artCodig']?>" readonly><br>
	Titulo: <input type="text" name="titulo" value="<?=$retorno[0]['artTitul']?>"><br>
    Texto: <input type="text" name="texto" value="<?=$retorno[0]['artTexto']?>"> <br>
    Posição: <input type="text" name="posicao" value="<?=$retorno[0]['artImpos']?>"> <br>
    <input type="text" name="image" value="<?=$retorno[0]['artImage']?>"> <br>

    Imagem: <img class="imagem_post" src="upload/<?=$retorno[0]['artImage']?>" alt="imagem do post">
        <label for="imagem">Enviar Imagem</label> 
        <input type="file"  name="upload" >
        <input type="reset" name="botao" value="voltar">
        <input type="submit" name="botao" value="salvar">
        <input type="submit" name="botao" value="voltar">


</form>

</div>


