<?php
include_once "funcoes.php";
session_start();

$id = $_POST['codigo'];
$nm_image = $_POST['image'];
$imagem = $_FILES['upload']['name'];
$uploadOk = 1;

if ($_REQUEST['botao'] == 'salvar') {

if ($imagem) {
    unlink("upload/".$nm_image);
    include "upload.php"; 
  
}

    if ($_REQUEST['botao'] == 'salvar') {

        // $erros = validaForm($_REQUEST, array('nome:texto:Nome é obrigatório',
        //                                  'sobrenome:texto:Sobrenome é obrigatório',
        //                                  'email:email:Deve ser um e-mail válido'));
        $titulo = $_POST['titulo'];
        $texto = $_POST['texto'];
        $posicao  = $_POST['posicao'];
        $imagem = $_FILES['upload']['name'];

        // if (strlen($erros)==0) {
                    // $sql = "UPDATE `artigo` SET `artTitul` = ?, `artTexto` = ?, `artImage` = ?, `artImpos` = ? WHERE `artCodig` = ?";
                    // $retorno = fazConsultaSegura($sql,array($titulo,
                    // $texto,
                    // $imagem,
                    // $posicao,),
                    // $id);

                    $sql = "UPDATE `artigo` SET `artTitul` = ?, `artTexto` = ?, `artImpos` = ? , `artImage` = ? WHERE `artCodig` = ?";
                    $retorno = fazConsultaSegura($sql,array(
                    $titulo,
                    $texto,
                    $posicao,
                    $arquivo,
                    $id));
                   
                    $titulo = '';     
                    $texto = '';
                    // $imagem =  '';
                    $posicao =  '';
                    header("Location: index.php");
        //     }
        //     else {
        //         echo("$erros<hr>");
        //         include("alteracao_form.php");
        //     }
        }
        else if(isset($_POST['botao']) == 'voltar' ){
            header("Location: index.php");
        }

    

    $erros = validaForm($_POST, array(
        'titulo:texto:Titulo ',
        'texto:texto:Texto ',
    ));
    if ($erros != '') {

        $_SESSION['erross'] = $erros;
        $_SESSION['titulo'] = $titulo;
        $_SESSION['texto'] = $texto;
        $_SESSION['posicao'] = $posicao;
        $_SESSION['id'] = $id;
        header("Location: alteracao_form.php?m=f");

    } else {

        if ($uploadOk != 0) {
            if ($imagem) {
                $tipoArquivoImagem = strtolower(pathinfo($imagem, PATHINFO_EXTENSION));
                if ($tipoArquivoImagem != "jpg" && $tipoArquivoImagem != "png" && $tipoArquivoImagem != "jpeg"
                    && $tipoArquivoImagem != "gif") {
                    $uploadOk = 0;
                }
                if ($uploadOk == 0) {
                    echo "Apenas JPG, JPEG, PNG e GIF são permitidos.<br>";
                }
            } 
            if ($imagem) {
                unlink("upload/" . $nm_image);
                include "upload.php";
            }
            $sql = "UPDATE `artigo` SET `artTitul` = ?, `artTexto` = ?, `artImpos` = ? , `artImage` = ? WHERE `artCodig` = ?";
            $retorno = fazConsultaSegura($sql, array(
                $titulo,
                $texto,
                $posicao,
                $arquivo,
                $id));

            $titulo = '';
            $texto = '';
            // $imagem =  '';
            $posicao = '';
            header("Location: index.php");
        }
    }

    //     }
    //     else {
    //         echo("$erros<hr>");
    //         include("alteracao_form.php");
    //     }
} else if (isset($_POST['botao']) == 'voltar') {
    header("Location: index.php");
}
