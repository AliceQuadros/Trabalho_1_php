<?php
$uploadOk = 1;
$diretorio_alvo = "upload/";
$tipoArquivoImagem = strtolower(pathinfo(@$imagem, PATHINFO_EXTENSION));


$arquivo_alvo = $diretorio_alvo . basename(@$id) . "." . $tipoArquivoImagem;
$arquivo = basename($id) . '.' . $tipoArquivoImagem;

    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $arquivo_alvo)) {
        echo "Arquivo " . basename($_FILES["upload"]["name"]) . " foi enviado com sucesso.<br>";

    } else {
        echo "Ocorreu um erro enviando seu arquivo.<br>";
    }

