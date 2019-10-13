<?php
include "funcoes.php";
$id = $_POST['codigo'];
$nm_image = $_POST['image'];
$imagem = $_FILES['upload']['name'];


if ($imagem) {
    unlink("upload/".$nm_image);
    include "upload.php"; 
    echo $imagem;
}

    if ($_REQUEST['botao'] == 'salvar') {

        // $erros = validaForm($_REQUEST, array('nome:texto:Nome é obrigatório',
        //                                  'sobrenome:texto:Sobrenome é obrigatório',
        //                                  'email:email:Deve ser um e-mail válido'));
        $titulo = $_POST['titulo'];
        $texto = $_POST['texto'];
        // $imagem =  $_POST['upload'];
        $posicao  = $_POST['posicao'];

        // if (strlen($erros)==0) {
                    // $sql = "UPDATE `artigo` SET `artTitul` = ?, `artTexto` = ?, `artImage` = ?, `artImpos` = ? WHERE `artCodig` = ?";
                    // $retorno = fazConsultaSegura($sql,array($titulo,
                    // $texto,
                    // $imagem,
                    // $posicao,),
                    // $id);

                    $sql = "UPDATE `artigo` SET `artTitul` = ?, `artTexto` = ?, `artImpos` = ? WHERE `artCodig` = ?";
                    $retorno = fazConsultaSegura($sql,array(
                    $titulo,
                    $texto,
                    $posicao,$id));
                   
                    $titulo = '';     
                    $texto = '';
                    // $imagem =  '';
                    $posicao =  '';
                    // header("Location: index.php");
        //     }
        //     else {
        //         echo("$erros<hr>");
        //         include("alteracao_form.php");
        //     }
        }
        else if(isset($_POST['botao']) == 'voltar' ){
            header("Location: index.php");
        }

    




?>
