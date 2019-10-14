<!--criar separado no incluir_form -->
<!-- criar um botao que chame a inclusao -->

<!-- na home tem que aparecer os posts, e embaixo ou outro lugar q tu quiser colocar tem que ter o botão de alterar e de excluir -->
<?php

if (@$_SESSION['usuario']) {
    ?>
    <form method="post">
        <input type="submit" name="botao" value="Inserir">
    </form>
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
       
                <form method="post">
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
            <?php
                if (@$_SESSION['usuario']) {
                    ?>
                <form action="post.php" method="POST">
                    <button type="submit" name="ver" value="<?= $item['artCodig']; ?>">Ver Post</button>
                </form>
                <form action="alteracao_form.php" method="POST">
                    <button type="submit" name="alterar" value="<?= $item['artCodig']; ?>">alterar</button>
                </form>
                <form action="teste-excluir.php" method="POST">
                    <button type="submit" name="excluir" value="<?= $item['artCodig']; ?>">excluir</button>
                </form>
        <?php
                }








            }
        }

        ?>