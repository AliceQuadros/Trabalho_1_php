


<?php
include_once "funcoes.php";
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    
    <head>
        <meta charset="utf-8">
        <title>ALIKA</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/grid.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/favicon.ico">
    </head>
    <body>
        <?php

$id = $_POST['codigo'];
$nm_image = $_POST['image'];
$imagem = $_FILES['upload']['name'];
$uploadOk = 1;

if ($_REQUEST['botao'] == 'Salvar') {

    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $imagem = $_FILES['upload']['name'];
    $posicao = $_POST['posicao'];

    

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
            if ($imagem != null) {
                $tipoArquivoImagem = strtolower(pathinfo($imagem, PATHINFO_EXTENSION));
                if ($tipoArquivoImagem != "jpg" && $tipoArquivoImagem != "png" && $tipoArquivoImagem != "jpeg"
                    && $tipoArquivoImagem != "gif") {
                    $uploadOk = 0;
                }
                if ($uploadOk == 0) {
                    echo "Apenas JPG, JPEG, PNG e GIF são permitidos.<br>";
                }
            } if ($imagem) {
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
} else if (isset($_POST['botao']) == 'Voltar') {
    header("Location: index.php");
}