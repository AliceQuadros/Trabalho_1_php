<!-- formulario de alteração (karine) -->
<!-- mesmo formulario usado na inclusao de dados -->

<div class="container">

Alteração:
<form method="post" enctype="multipart/form-data">
    Código:<input type="text" name="codigo" value="<?=@$item['artCodig']?>" readonly><br>
	Titulo: <input type="text" name="titulo" value="<?= @$titulo ?>"><br>
    Texto: <input type="text" name="texto" value="<?= @$texto ?>"> <br>
        Posição: <input type="text" name="posicao" value="<?= @$posicao ?>"> <br>
        <label for="imagem">Enviar Imagem</label>
        <input type="file" name="upload" value="<?=@$imagem ?>">
        <input type="submit" name="botao" value="salvar">

</form>

</div>


