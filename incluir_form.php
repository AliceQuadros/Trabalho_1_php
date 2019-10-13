<!-- formulario de inclusao (karine) -->
<!-- fica aqui e não no home, é chamado via include -->


<div class="container">

    <form method="post" enctype="multipart/form-data">
        Titulo: <input type="text" name="titulo" value="<?=$titulo?>"><br>
        Texto: <textarea type="text" name="texto"><?=$texto?></textarea> <br>
        Posição: <input type="text" name="posicao" value="<?=$posicao?>"> <br>
        <label for="imagem">Enviar Imagem</label>
        <input type="file" name="upload" value="<?=$imagem?>">
        <input type="submit" name="botao" value="enviar">
        <input type="submit" name="botao" value="cancelar">
    </form>

</div>
