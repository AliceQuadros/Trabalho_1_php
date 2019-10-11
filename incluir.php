<?php
 $titulo ='' ;
 $texto = '';
 $imagem = '';
 $posicao  = '';
if(($_REQUEST['botao']) === 'enviar'){ 
    echo("entrou");

    $titulo = $_REQUEST['titulo'];
    $texto = $_REQUEST['texto'];
    $imagem =  $_FILES['upload']['name'];
    $posicao  = $_REQUEST['posicao'];
    echo("<pre>");
    print_r($_REQUEST['botao']);
    echo("<pre>");
    
    // teste preenchimento

    // $erros = validaForm($_REQUEST, array(
    //                                      'texto:texto:Texto é obrigatório'));
    // 
    // if (strlen($erros)==0){
        
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
//     }
// //    else if (strlen($erros)!=0) {
// //       echo ("$erros<hr>");
// //       include ("incluir_form.php");
// //    }

    
}
else if ($_REQUEST['botao'] == 'inserir')
{
    include ("incluir_form.php");
}
?>