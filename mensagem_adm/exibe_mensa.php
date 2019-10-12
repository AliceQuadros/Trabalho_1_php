<?php
require_once "C:/xampp/htdocs/trabalho_1/Trabalho_1_php/funcoes.php";


$sql = "SELECT * FROM `contato`";
$retorno = fazConsultaSegura($sql);
foreach ($retorno as $item) {
    ?>
    <form method="post">
        <table class="tableconsulta">
            <tr>
                <td>Código: </td>
                <td><?=$item['conCodig'];?></td>
            </tr>
            <tr>
                <td>Nome: </td>
                <td><?=$item['conNome'];?></td>
            </tr>
            <tr>
                <td>Sobrenome: </td>
                <td><?=$item['conSobre'];?></td>
            </tr>
            <tr>
                <td>E-mail: </td>
                <td><?=$item['conEmail'];?></td>
            </tr>
            <tr>
                <td>Telefone: </td>
                <td><?=$item['conFone'];?></td>
            </tr>
            <tr>
                <td>Mensagem: </td>
                <td><?=$item['conTexto'];?></td>
           </tr>
           
        </table>
    </form>
        <form action="mensagem_adm/excluir_mensa_teste.php" method="POST">
               <button type="submit" name="excluir" value="<?=$item['conCodig'];?>">Excluir</button>
        </form>
    <?php }

    ?>