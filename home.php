<!--criar separado no incluir_form -->
<!-- criar um botao que chame a inclusao -->
<?php

include ("incluir_form.php");
?>

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