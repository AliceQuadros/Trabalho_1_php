<?php
$diretorio_alvo = "upload/";
$arquivo_alvo = $diretorio_alvo . basename($id) . "." . $tipoArquivoImagem;

$tipoArquivoImagem = strtolower(pathinfo($arquivo_alvo,PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $arquivo_alvo)) {
        echo "Arquivo ". basename( $_FILES["upload"]["name"]). " foi enviado com sucesso.<br>";
    } else {
        echo "Ocorreu um erro enviando seu arquivo.<br>";
    }

?>