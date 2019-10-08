<?php

if(isset($_REQUEST['botao'])){
    if ($_REQUEST['botao'] == 'alterar') {
       
        $id = $_REQUEST['id'];
        $sql = "select * from contato where artCodig = ?";
        $resultado = fazConsultaSegura($sql,array($id));
        $registro = $resultado[0];

        @$titulo = $_REQUEST['titulo'];
        @$texto = $_REQUEST['texto'];
        @$imagem =  $_REQUEST['imagem'];
        @$posicao  = $_REQUEST['posicao'];
        include("alteracao_form.php");
    }
    else if ($_REQUEST['botao'] == 'salvar') {

        $erros = validaForm($_REQUEST, array('nome:texto:Nome é obrigatório',
                                         'sobrenome:texto:Sobrenome é obrigatório',
                                         'email:email:Deve ser um e-mail válido'));
        @$titulo = $_REQUEST['titulo'];
        @$texto = $_REQUEST['texto'];
        @$imagem =  $_REQUEST['imagem'];
        @$posicao  = $_REQUEST['posicao'];
       
        if (strlen($erros)==0) {
                    $sql = "UPDATE `artigo` SET `artTitul` = ?, `artTexto` = ?, `artImage` = ?, `artImpos` = ? WHERE `artCodig` = ?";
                    $retorno = fazConsultaSegura($sql,array($titulo,
                    $texto,
                    $imagem,
                    $posicao,),$id);

                   
                    $titulo = '';     
                    $texto = '';
                    $imagem =  '';
                    $posicao =  '';

            }
            else {
                echo("$erros<hr>");
                include("alteracao_form.php");
            }
        }
}
    




?>
