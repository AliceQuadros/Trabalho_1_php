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

    <?php if($item['artImage'] != null){ ?>
        <tr>
            <td>Imagem: </td>
            <td><img class="imagem_post"  src="upload/<?=$item['artImage'];?>" alt="imagem do post"></td>
        </tr>
    <?php } ?>
</table>