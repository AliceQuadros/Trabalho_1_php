<div class="container">
    <form action="post" id="form-orcamento" class="contato-form grid-14">


        <label for="nome">Título</label>
        <input type="text" value='<?=@$titulo?>' placeholder="Titulo" id="titulo">
        <br>

        <label for="resumo">Resumo</label>
        <textarea id="resumo" name="resumo" rows="2" colums="10" placeholder="Escreva seu resumo aqui:" value='<?=@$resumo?>'></textarea>
        
        
        <textarea id="texto" name="texto" rows="10" colums="10" placeholder="Escreva seu texto aqui:" value='<?=@$resumo?>'></textarea>




        <input type="submit" value="Enviar">
</div>


</div>
<?php
$sql = "INSERT INTO  'posts' ('cdpost',	'titulo', 'resumo', 'texto', 'imagem', 'posicao', 'data')
        VALUES (NULL,  '$titulo', '$resumo', '$texto', '$imagem', '$posicao', CURRENT_TIMESTAMP);";

?>