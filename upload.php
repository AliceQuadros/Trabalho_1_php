<?php
$diretorio_alvo = "uploads/";
$arquivo_alvo = $diretorio_alvo . basename($id) . "." . $tipoArquivoImagem;
$uploadOk = 1;
$tipoArquivoImagem = strtolower(pathinfo($arquivo_alvo,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["upload"]["tmp_name"]);
    if($check !== false) {
        echo "Arquivo é uma imagem válida - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "Arquivo não é uma imagem.<br>";
        $uploadOk = 0;
    }
}


if($tipoArquivoImagem != "jpg" && $tipoArquivoImagem != "png" && $tipoArquivoImagem != "jpeg"
&& $tipoArquivoImagem != "gif" ) {
    echo "Apenas JPG, JPEG, PNG e GIF são permitidos.<br>";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Problema fazendo upload<br>";

} else {
    if (move_uploaded_file($_FILES["arquivoParaUpload"]["tmp_name"], $arquivo_alvo)) {
        echo "Arquivo ". basename( $_FILES["arquivoParaUpload"]["name"]). " foi enviado com sucesso.<br>";
    } else {
        echo "Ocorreu um erro enviando seu arquivo.<br>";
    }
}
?>