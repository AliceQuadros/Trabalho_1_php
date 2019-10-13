<?php
include "funcoes.php";

<<<<<<< HEAD
@$id = $_POST['ver'];
=======
$id = $_POST['ver'];
>>>>>>> master
$sql = "SELECT * FROM `artigo` WHERE `artCodig` = ?";
$retorno = fazConsultaSegura($sql,array($id));
foreach ($retorno as $item) {
    ?>
<<<<<<< HEAD
       
=======
        <form method="post">
>>>>>>> master
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
<<<<<<< HEAD
        <td><img class="imagem_post"  src="upload/<?=$item['artImage'];?>" alt="imagem do post"></td>
=======
        <td><img src="upload/<?=$item['artImage'];?>" alt="imagem do post"></td>
>>>>>>> master
        </tr>
    <?php }
        ?>
        </table>
        </form>
<<<<<<< HEAD
=======
        <button><a href="index.php">Voltar</a></button>
>>>>>>> master
        <?php }