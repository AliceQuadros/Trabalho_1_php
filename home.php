
<?php
include ("verificalogin.php");
?>

<div class="container">
    <form action="post" id="form-orcamento" class="contato-form">


        <label for="nome">Título</label>
        <input type="text" value='<?=@$titulo?>' placeholder="Titulo" id="titulo">
        <br>

        <label for="resumo">Resumo</label>
        <textarea id="resumo" name="resumo" rows="2" colums="10" placeholder="Escreva seu resumo aqui:" value='<?=@$resumo?>'></textarea>
        
        <label for="texto">Post</label>
        <textarea id="texto" name="texto" rows="10" colums="10" placeholder="Escreva seu texto aqui:" value='<?=@$texto?>'></textarea>

        



        <input type="submit" value="Enviar">
</div>


</div>
<?php



?>