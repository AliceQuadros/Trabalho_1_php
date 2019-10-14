<?php
include ("funcoes.php");
$nome = $sobrenome = $email = $telefone = $mensagem = "";
$flag = 0;

if(isset($_REQUEST['botao'])){
    @$nome = $_REQUEST['conNome'];
    @$sobrenome = $_REQUEST['conSobre'];
    @$email = $_REQUEST['conEmail'];
    @$telefone = $_REQUEST['conFone'];
    @$mensagem = $_REQUEST['conTexto'];

    $sql = "INSERT INTO `contato` (`conNome`,`conSobre`,`conEmail`, `conFone`, `conTexto`) VALUES (?,?,?,?,?);";
    $retorno = fazConsultaSegura($sql, array(
        $nome,
        $sobrenome,
        $email,
        $fone,
        $mensagem), $id);
         
    if(isset($_REQUEST['conNome'])){
        $nome = $_REQUEST['conNome'];
        if(strlen($nome) == 0){
            $vetErros['conNome'] = 'Nome é obrigatório';
        }
    }
        if(isset($_REQUEST['conSobre'])){
            $sobrenome = $_REQUEST['conSobre'];
            if(strlen($sobrenome) == 0){
                $vetErros['conSobre'] = 'Sobrenome é obrigatório';
            }
        }
        if(isset($_REQUEST['conFone'])){
                $telefone = $_REQUEST['conFone'];
                if(strlen($telefone) == 0){
                    $vetErros['conFone'] = 'Telefone é obrigatório';
                }
            }

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
  } else {
    echo("$email não é um E-mail válido!");
  }

if(isset($_REQUEST['Enviar'])) {
	//testa se aconteceu algum erro de validacao
	if ((count($vetErros) == 0)){
		echo('Enviado com sucesso!');
		$nome="";
        $sobrenome="";
        $telefone="";
        $email="";

    }
}
}
?>