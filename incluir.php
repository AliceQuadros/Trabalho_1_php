<?php
@$titulo = $_REQUEST['titulo'];
@$texto = $_REQUEST['texto'];
@$imagem =  $_REQUEST['imagem'];
@$posicao  = $_REQUEST['posicao'];

if(isset($_REQUEST['botao'])== 'incluir'){
    
    $erros = validaForm($_REQUEST, array('nome:texto:Nome é obrigatório',
                                         'sobrenome:texto:Sobrenome é obrigatório',
                                         'email:email:Deve ser um e-mail válido'));
   if (strlen($erros)==0) {
    
    $id = 0;
    $sql = "INSERT INTO `artigo` (`artTitul`,`artTexto`,`artImage`, `artImpos`) VALUES (?,?,?,?);";
    $retorno = fazConsultaSegura($sql,array($titulo,
                                            $texto,
                                            $imagem,
                                            $posicao,),$id);
   

   if($retorno[1] != null) {
        echo("<pre>Erro: <br>");
        print_r($retorno);
   } 
   else {
    echo("Registro incluído com sucesso com o código: $novoCodigo<hr>");

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

    
}//fim botao enviar
else {
    include ("incluir_form.php");
}
?>