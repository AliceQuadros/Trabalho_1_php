<!-- formulario de alteração (karine) -->
<!-- mesmo formulario usado na inclusao de dados -->
<?php
include "funcoes.php";
$id = $_POST['alterar'];
$sql = "SELECT * FROM `artigo` WHERE `artCodig` = ?;";
$retorno = fazConsultaSegura($sql, array($id));
?>
<div class="container">

<form action = "alterar.php" method="post" enctype="multipart/form-data">

    Código:<input type="text" name="codigo" value="<?=$retorno[0]['artCodig']?>" readonly><br>
	Titulo: <input type="text" name="titulo" value="<?=$retorno[0]['artTitul']?>"><br>
    Texto: <input type="text" name="texto" value="<?=$retorno[0]['artTexto']?>"> <br>
    Posição: <input type="text" name="posicao" value="<?=$retorno[0]['artImpos']?>"> <br>
    <input type="hidden" name="image" value="<?=$retorno[0]['artImage']?>"> <br>

    Imagem: <img src="upload/<?=$retorno[0]['artImage']?>" alt="imagem do post">
        <label for="imagem">Enviar Imagem</label> 
        <input type="file" name="upload" >
        <input type="submit" name="botao" value="voltar">
        <input type="submit" name="botao" value="salvar">



</form>

</div>


