<?php

$sql = "SELECT * FROM `artigo`;";
    $retorno = fazConsultaSegura($sql);
                                           


foreach ($retorno as $item) {

        ?>
        <form method="post">
                <table class="tableconsulta">

        <tr>
        <td>titulo</td> 
        <td>
        <?=$item['artTitul'];?>
        </td>
        <td>
            
        </td>
    </tr>

</table><br>
</form>