<?php
include "funcoes.php";

$id = $_POST['ver'];
$sql = "SELECT * FROM `artigo` WHERE `artCodig` = ?";
$retorno = fazConsultaSegura($sql,array($id));
foreach ($retorno as $item) {
    ?>
        <form method="post">
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
        <td><img src="upload/<?=$item['artImage'];?>" alt="imagem do post"></td>
        </tr>
    <?php }
        ?>
        </table>
        </form>
        <button><a href="index.php">Voltar</a></button>
        <?php }