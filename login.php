<?php
@session_start(); 
      //chama função que inicia uma nova sessão ou resume uma sessão existente
//if (isset($_REQUEST['login'])) {
    
    //-----------------------------LOGIN-----------------------------------


    if((@$_REQUEST['login']) == 'Sair'){
        session_destroy();//chama função que destrói sessão
        header("Location: index.php"); //redireciona para o index.php
    }

    if ((@$_REQUEST['login']) == 'Enviar') { //verifica se login está ok

        @$senha = $_REQUEST['pass']; // @$senha recebe password
        @$usuario = $_REQUEST['user']; // @$usuario recebe user  
        
        if (($usuario == "admin") and ($senha == '1234')) {
            $_SESSION['usuario'] = @$usuario; //cria o campo do usuário na sessão
            header("Location: index.php"); // redireciona para o index.php
        } else {
            echo ("Usuário ou Senha Inválido(s)"); //printa mensagem de erro
            include("loginform.php"); //mostra novamente o formulário para nova tentativa de login
        }
    }
    else {
        include("loginform.php");
    }
    //----------------------------------LOGOUT----------------------------------

   

?>