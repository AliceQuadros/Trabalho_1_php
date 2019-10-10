<?php

@$titulo = $_REQUEST['titulo'];
@$texto = $_REQUEST['texto'];
@$imagem =  $_FILES['upload']['name'];
@$posicao  = $_REQUEST['posicao'];
if(($_REQUEST['botao']) == 'enviar'){
    
        @$flag = 0;
        @$titulo = $_REQUEST['titulo'];
        @$texto = $_REQUEST['texto'];
        @$imagem =  $_FILES['upload']['name'];

        @$posicao  = $_REQUEST['posicao'];
        if(strlen(trim($titulo)) == 0){
            $erros = "Preencha o titulo<br>";
            $flag = 2;
        }
        if(strlen(trim($texto)) == 0){
            $erros = "Preencha o texto<br>";  
            $flag = 2;
        }
        
   if ($flag==0) {
    
    $id = 0;
    $sql = "INSERT INTO `artigo` (`artTitul`,`artTexto`,`artImage`, `artImpos`) VALUES (?,?,?,?);";
    $retorno = fazConsultaSegura($sql,array($titulo,
                                            $texto,
                                            $imagem,
                                            $posicao,),$id);
    print_r($retorno);
   if($flag == 2) {
       
        echo("<pre>Errooooooooooou <br>");
        echo($erros);
   } 
   else {
    echo("Sem ERROS: <hr>");

    if (($_FILES['upload']['name'])!='') {
     include("upload.php");
    
    }
   
   }

   $titulo = '';     
   $texto = '';
   $imagem =  '';
   $posicao =  '';
   }
   else {
      echo ("$erros<hr>");
      include ("incluir_form.php");
   }

    
}
else {
    include ("incluir_form.php");
}
?>