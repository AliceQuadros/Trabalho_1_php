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
        // teste preenchimento
        $erros = validaForm($_REQUEST, array(
                                         'texto:texto:Texto é obrigatório'));
        // 
    if (strlen($erros)==0){
    
    $id = 0;
    $sql = "INSERT INTO `artigo` (`artTitul`,`artTexto`,`artImage`, `artImpos`) VALUES (?,?,?,?);";
    $retorno = fazConsultaSegura($sql,array($titulo,
                                            $texto,
                                            $imagem,
                                            $posicao,),$id);

                                            

 
    echo("Sem erros. <hr>");

    if (($_FILES['upload']['name'])!='') {
     include("upload.php");
    
    }
   
   

   $titulo = '';     
   $texto = '';
   $imagem =  '';
   $posicao =  '';
   }
   else if (strlen($erros)!=0) {
      echo ("$erros<hr>");
      include ("incluir_form.php");
   }

    
}
else {
    include ("incluir_form.php");
}
?>