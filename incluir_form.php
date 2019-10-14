<!-- formulario de inclusao (karine) -->
<!-- fica aqui e não no home, é chamado via include -->


<div class="container">

    <form method="post" class="contato-form grid-8" enctype="multipart/form-data">

        <label for="titulo_form">Título:</label>
        <input type="text" name="titulo" value="" class="titulo_form" id="titulo_form"><br>
        <label for="textarea_enviar">Texto:</label>
        <textarea type="text" name="texto" value="" id="textarea_enviar" class="textarea_enviar"></textarea><br>
        <label for="posicao_form">Posição:</label>
        <select name="posicao" class="posicao_form" id="posicao_form">
            <option value="D">Direita</option>
            <option value="E">Esquerda</option>
        </select>
        <label for="imagem_form">Enviar Imagem</label>
        <input type="file" name="upload" value="" class="imagem_form" id="imagem_form"><br><br>
        <input type="submit" name="botao" value="Enviar" class="enviar_post_form">
        <input type="reset" name="botao" value="Cancelar" class="cancelar_post_form">

</div>