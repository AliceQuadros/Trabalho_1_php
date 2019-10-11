<!-- formulario de inclusao (karine) -->
<!-- fica aqui e não no home, é chamado via include -->


<div class="container">

    <form method="post" enctype="multipart/form-data">
        Titulo: <input type="text" name="titulo" value="<?=$titulo?>"><br>
        Texto: <input type="text" name="texto" value="<?=$texto?>"> <br>
        Posição: <input type="text" name="posicao" value="<?=$posicao?>"> <br>
        <label for="imagem">Enviar Imagem</label>
        <input type="file" name="upload" value="<?=$imagem ?>">
        <input type="submit" name="botao" value="enviar">

    </form>

</div>
