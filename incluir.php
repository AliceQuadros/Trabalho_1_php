<?php
$titulo = '';
$texto = '';
$imagem = '';
$posicao = '';
$imagem = '';
$uploadOk = 1;
if (($_REQUEST['botao']) === 'enviar') { 
    $titulo = $_REQUEST['titulo'];
    $texto = $_REQUEST['texto'];
    $imagem = $_FILES['upload']['name'];
    $posicao = $_REQUEST['posicao'];
    $tipoArquivoImagem = strtolower(pathinfo($imagem, PATHINFO_EXTENSION));

    if ($tipoArquivoImagem != "jpg" && $tipoArquivoImagem != "png" && $tipoArquivoImagem != "jpeg"
        && $tipoArquivoImagem != "gif") {
        echo "Apenas JPG, JPEG, PNG e GIF são permitidos.<br>";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "Problema fazendo upload<br>";

    } else {
        // teste preenchimento

        // $erros = validaForm($_REQUEST, array(
        //                                      'texto:texto:Texto é obrigatório'));
        //
        // if (strlen($erros)==0){

        $id = 0;
        $sql = "INSERT INTO `artigo` (`artTitul`,`artTexto`,`artImage`, `artImpos`) VALUES (?,?,?,?);";
        $retorno = fazConsultaSegura($sql, array($titulo,
            $texto,
            $imagem,
            $posicao), $id);

        echo ("Sem erros. <hr>");

        if ($imagem) {
            include "upload.php";

        }
        $sql = "UPDATE `artigo` SET `artImage` = ? WHERE `artCodig` = ?";
                    $retorno = fazConsultaSegura($sql,array(
                    $arquivo,
                    $id));

        $titulo = '';
        $texto = '';
        $imagem = '';
        $posicao = '';
        //     }
        // //    else if (strlen($erros)!=0) {
        // //       echo ("$erros<hr>");
        // //       include ("incluir_form.php");
        // //    }
    }

} else if ($_REQUEST['botao'] == 'inserir') {
    include "incluir_form.php";
}
