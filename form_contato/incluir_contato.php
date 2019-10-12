<?php
$uploadOk = 1;

require_once "C:/xampp/htdocs/trabalho_1/Trabalho_1_php/funcoes.php";


if (($_POST['botao']) === 'enviar') {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $mensagem = $_POST['mensagem'];
    // teste
    echo($nome);
    $id = 0;
    $sql = "INSERT INTO `contato` (`conNome`,`conSobre`,`conEmail`, `conFone`, `conTexto`) VALUES (?,?,?,?,?);";
    $retorno = fazConsultaSegura($sql, array(
        $nome,
        $sobrenome,
        $email,
        $fone,
        $mensagem), $id);
    // header("Location: index.php");

}
