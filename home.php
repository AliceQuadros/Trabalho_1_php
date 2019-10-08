<!--criar separado no incluir_form -->
<!-- criar um botao que chame a inclusao -->
<?php

@$titulo = $_REQUEST['titulo'];
@$texto = $_REQUEST['texto'];
@$imagem =  $_REQUEST['imagem'];
@$posicao  = $_REQUEST['posicao'];

?>



<!-- na home tem que aparecer os posts, e embaixo ou outro lugar q tu quiser colocar tem que ter o botão de alterar e de excluir -->
<?php


@$sql = "INSERT INTO  'posts' ('cdpost',	'titulo', 'resumo', 'texto', 'imagem', 'posicao', 'data')
        VALUES (NULL,  '$titulo', '$resumo', '$texto', '$imagem', '$posicao', CURRENT_TIMESTAMP);";

if((@$_REQUEST['login']) == 'enviar'){
    ?>
    <form method="post">
    <input type="submit" name="botao" value="inserir">
    <input type="submit" name="botao" value="alterar">
    <input type="submit" name="botao" value="excluir">
</form>

<?php
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
}
?>