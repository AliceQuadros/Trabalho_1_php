<!--criar separado no incluir_form -->
<!-- criar um botao que chame a inclusao -->

<!-- na home tem que aparecer os posts, e embaixo ou outro lugar q tu quiser colocar tem que ter o botão de alterar e de excluir -->
<?php

if (@$_SESSION['usuario']) {
    ?>
    <form method="post" class="form_crud_add">
        <input type="submit" name="botao" value="Inserir" class="botao_base botao_inserir_post">
    </form>
    <hr>
    <?php
        if (isset($_REQUEST['botao']) == 'Inserir') {
            include "incluir.php";
        }
        if (isset($_GET['b'])) {
            include "incluir.php";
        }
    }
    $sql = "SELECT *, DATE_FORMAT (artData, '%d/%m/%Y %H:%i:%s' ) FROM `artigo` ORDER BY `artData` desc";
    $retorno = fazConsultaSegura($sql);

    if (@$_REQUEST['busca'] == 'ok') {
        include("consulta_search.php");
    } else {


        foreach ($retorno as $item) {
            $texto = resumeTexto($item['artTexto'], $numPal = 15);

            ?>

        <form method="post" class="form_crud_normal">
            <table class="tableconsulta">
                <tr>
                    <td>Título: </td>
                    <td><?= @$item['artTitul']; ?></td>
                </tr>
                <tr>
                    <td>Texto: </td>
                    <td><?= @$texto; ?></td>
                </tr>
                <tr>
                    <td>Data: </td>
                    <td><?= @$item['artData']; ?></td>
                </tr>
                <!-- arrumar -->
                <?php
                        if (@$item['artImage'] != null) {
                            ?>
                    <tr>
                        <td>Imagem: </td>
                        <td><img class="imagem_post" src="upload/<?= $item['artImage']; ?>" alt="imagem do post"></td>
                    </tr>
                    
                <?php }
                        ?>
                <!--  -->
            </table>
        </form>
        <hr>
        <?php
                if (@$_SESSION['usuario']) {
                    ?>
            <form action="post.php" class="form_crud" method="POST">
                <button type="submit" name="ver" value="<?= $item['artCodig']; ?>" class="ver_post_botao botao_base">Ver Post</button>
            </form>
            <form action="alteracao_form.php" class="form_crud" method="POST">
                <button type="submit" name="alterar" value="<?= $item['artCodig']; ?>" class="altera_botao botao_base">Alterar</button>
            </form>
            <form action="teste-excluir.php" class="form_crud" method="POST">
                <button type="submit" name="excluir" value="<?= $item['artCodig']; ?>" class="exclui_botao botao_base">Excluir</button>
           
            </form>
        <hr>
            
<?php
        }
    }
}

?>