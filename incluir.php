<?php

$titulo = '';
$texto = '';
$imagem = '';
$posicao = '';
$imagem = '';
$uploadOk = 1;

if (($_POST['botao']) === 'Enviar') { 
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $imagem = $_FILES['upload']['name'];
    $posicao = $_POST['posicao'];
 

    $erros = validaForm($_POST, array(
        'titulo:texto:Titulo ',
        'texto:texto:Texto '
    ));
    if ($erros != '') {

        echo ("Preencha todos os campos que são obrigatórios:<br> ");
        echo($erros);
        include_once("incluir_form.php");

    } else {
        // $tipoArquivoImagem = strtolower(pathinfo($imagem, PATHINFO_EXTENSION));
        // if ($tipoArquivoImagem != "jpg" && $tipoArquivoImagem != "png" && $tipoArquivoImagem != "jpeg"&& $tipoArquivoImagem != "gif"&& $tipoArquivoImagem != "PNG"&& $tipoArquivoImagem != "JPG"
        
        // ) {
    
        //     echo "Apenas JPG, JPEG, PNG e GIF são permitidos.<br>";
        //     $uploadOk = 0;
        // }
        // if ($uploadOk == 0) {
        //     echo "Problema fazendo upload<br>";
    
        // } else {
    
    
    
    
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
            header("Location: index.php");
    // }
    }

} else if ($_REQUEST['botao'] == 'Inserir') {
    include "incluir_form.php";
}
else if ($_REQUEST['botao'] == 'Cancelar') {
    header("Location: index.php");
}
