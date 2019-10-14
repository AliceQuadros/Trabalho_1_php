
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
include "funcoes.php";
include("header.php");

@$id = $_POST['ver'];
$sql = "SELECT * FROM `artigo` WHERE `artCodig` = ?";
$retorno = fazConsultaSegura($sql,array($id));
foreach ($retorno as $item) {
    ?>
       
        <table class="tableconsulta">
        <tr>
        <td>Título: </td>
        <td><?=$item['artTitul'];?></td>
        </tr>
        <tr>
        <td>Texto: </td>
        <td><?=$item['artTexto'];?></td>
        </tr>
        <tr>
        <td>Data: </td>
        <td><?=$item['artData'];?></td>
        </tr>
        

    <?php
    if($item['artImage'] != null)
    {
    ?>
        <tr>
        <td>Imagem: </td>
        <td><img class="imagem_post"  src="upload/<?=$item['artImage'];?>" alt="imagem do post"></td>
        </tr>
    <?php }
        ?>
        </table>
        </form>
        <button class="botao_voltar"><a href="index.php">Voltar</a></button>
        <?php }
        ?>
        </div>
</body>

<?php
include ("footer.php");

?>
</html>