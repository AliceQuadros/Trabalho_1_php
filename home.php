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

if(@$_SESSION['usuario']){
    ?>
    <form method="post">
    <input type="submit" name="botao" value="Inserir">
    <input type="submit" name="botao" value="Alterar">
    <input type="submit" name="botao" value="Excluir">
</form>

<?php
if (isset($_REQUEST['botao']) == 'Inserir') 
{
        include("incluir.php");
}
if (isset($_REQUEST['botao']) == 'Alterar') 
{
        include("alterar.php");
}
if (isset($_REQUEST['botao']) == 'Excluir') 
{
        include("excluir.php");
}
}
?>