
<!-- formulario de alteração (karine) -->
<!-- mesmo formulario usado na inclusao de dados -->
<?php
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
    @$id = $_POST['ver'];
    $sql = "SELECT * FROM `artigo` WHERE `artCodig` = ?";
    $retorno = fazConsultaSegura($sql, array($id));
    foreach ($retorno as $item) {
?>
<div class="container">

    <h2 class='title-show'>
        <?= @$item['artTitul']; ?>
    </h2>
    <p class="data-show">
        <?= @$item['artData']; ?>
    </p>
    <p class="text-show">
        <?= @$item['artTexto']; ?>
    </p>
    <?php
        if ($item['artImage'] != null) {
    ?>
    <img class="imagem_post <?=$item['artImpos']?>" src="upload/<?= $item['artImage']; ?>" alt="imagem do post">

    <?php } ?>
    <br><br>
    <button class="botao_voltar"><a href="index.php">Voltar</a></button>
    <?php } ?>
</div>




    </body>

</html>