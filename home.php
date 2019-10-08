<!--criar separado no incluir_form -->
<!-- criar um botao que chame a inclusao -->
<?php

include ("verificalogin.php");
?>

<div class="container">
    <form action="post" id="form-orcamento" class="contato-form">


        <label for="nome">Título</label>
        <input type="text" value='<?=@$titulo?>' placeholder="Titulo" id="titulo">
        <br>
''
        <label for="resumo">Resumo</label>
        <textarea id="resumo" name="resumo" rows="2" colums="10" placeholder="Escreva seu resumo aqui:" value='<?=@$resumo?>'></textarea>
        
        <label for="texto">Post</label>
        <textarea id="texto" name="texto" rows="10" colums="10" placeholder="Escreva seu texto aqui:" value='<?=@$texto?>'></textarea>

        



        <input type="submit" name="botao" value="inserir">
</div>


</div>
<!-- na home tem que aparecer os posts, e embaixo ou outro lugar q tu quiser colocar tem que ter o botão de alterar e de excluir -->
<?php


$sql = "INSERT INTO  'posts' ('cdpost',	'titulo', 'resumo', 'texto', 'imagem', 'posicao', 'data')
        VALUES (NULL,  '$titulo', '$resumo', '$texto', '$imagem', '$posicao', CURRENT_TIMESTAMP);";

if (isset($_REQUEST['botao']) == 'inserir') 
{
        include("incluir.php");
}
if (isset($_REQUEST['botao']) == 'alterar') 
{
        include("alterar.php");
}
if (isset($_REQUEST['botao']) == 'excluir') 
{
        include("excluir.php");
}
?>