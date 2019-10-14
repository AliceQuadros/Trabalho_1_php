<!-- formulario de alteração (karine) -->
<!-- mesmo formulario usado na inclusao de dados -->
<?php
include_once "funcoes.php";
session_start();

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

<form action = "alterar.php" method="post" enctype="multipart/form-data">

    Código:<input type="text" name="codigo" value="<?= isset($_GET['m']) ? $id : $retorno[0]['artCodig']?>" readonly><br>
	Titulo: <input type="text" name="titulo" value="<?=isset($_GET['m']) ? $titulo : $retorno[0]['artTitul']?>"><br>
    Texto: <textarea type="text" name="texto"><?=$retorno[0]['artTexto']?></textarea> <br>
    Posição: <input type="text" name="posicao" value="<?=$retorno[0]['artImpos']?>"> <br>
    <input type="hidden" name="image" value="<?=$retorno[0]['artImage']?>"> <br>

    Imagem: <img src="upload/<?=$retorno[0]['artImage']?>" alt="imagem do post">
        <label for="imagem">Enviar Imagem, Caso nenhuma enviada será colocada em branco</label>
        <input type="file" name="upload" >
        <input type="submit" name="botao" value="voltar">
        <input type="submit" name="botao" value="salvar">



</form>

</div>


