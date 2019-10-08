<?php
@$titulo = $_REQUEST['titulo'];
@$texto = $_REQUEST['texto'];
@$imagem =  $_REQUEST['imagem'];
@$posicao  = $_REQUEST['posicao'];

if(isset($_REQUEST['botao']) == 'incluir'){
    $flag = 0;
    if(isset($_REQUEST['botao']) == 'enviar'){
        @$titulo = $_REQUEST['titulo'];
        @$texto = $_REQUEST['texto'];
        @$imagem =  $_REQUEST['imagem'];
        @$posicao  = $_REQUEST['posicao'];
        if(strlen(trim($titulo)) == 0){
            $erros = "Preencha o titulo<br>";
            $flag = 1;
        }
        if(strlen(trim($texto)) == 0){
            $erros = "Preencha o texto<br>";  
            $flag = 1;
        }

    }
   if ($flag == 0) {
    
    $id = 0;
    $sql = "INSERT INTO `artigo` (`artTitul`,`artTexto`,`artImage`, `artImpos`) VALUES (?,?,?,?);";
    $retorno = fazConsultaSegura($sql,array($titulo,
                                            $texto,
                                            $imagem,
                                            $posicao,),$id);
   

   if($flag == 1) {
        echo("<pre>Erro: <br>");
        print_r($erros);
   } 
   else {

    if (isset($_FILES['upload'])) {
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