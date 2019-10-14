<?php
$uploadOk = 1;
session_start();

require_once "funcoes.php";

if (($_POST['botao']) === 'enviar') {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $mensagem = $_POST['mensagem'];
    include("../valida_form.php");
    // teste
    $erros = validaForm($_POST, array(
        'nome:texto:Nome ',
        'sobrenome:texto:Sobrenome ',
        'email:email:E-mail deve ser válido ',
        'mensagem:texto:Mensagem '
    ));
    if ($erros != '') {

        $_SESSION['erros'] = $erros;
        $_SESSION['nome'] = $nome;
        $_SESSION['sobrenome'] = $sobrenome;
        $_SESSION['email'] = $email;
        $_SESSION['mensagem'] = $mensagem;
        header("Location: ../index.php?n=e");

    } else {
        $id = 0;
        $sql = "INSERT INTO `contato` (`conNome`,`conSobre`,`conEmail`, `conFone`, `conTexto`) VALUES (?,?,?,?,?);";
        $retorno = fazConsultaSegura($sql, array(
            $nome,
            $sobrenome,
            $email,
            $fone,
            $mensagem), $id);
        header("Location: ../index.php");
    }
}
