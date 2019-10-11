<!--criar separado no incluir_form -->
<!-- criar um botao que chame a inclusao -->
<?php

@$titulo = $_REQUEST['titulo'];
@$texto = $_REQUEST['texto'];
@$imagem =  $_REQUEST['imagem'];
@$posicao  = $_REQUEST['posicao'];

?>

<form method="post">
    <input type="submit" name="botao" value="inserir">   
</form>

<!-- na home tem que aparecer os posts, e embaixo ou outro lugar q tu quiser colocar tem que ter o botão de alterar e de excluir -->
<?php

$sql = "SELECT * FROM `artigo`;";
    $retorno = fazConsultaSegura($sql);
                                           
include("upload.php");

foreach ($retorno as $item) {

        ?>
        <form method="post">
                <table class="tableconsulta">


    <tr>
        <td>Título: </td> 
        <td>
        <?=$item['artTitul'];?>
        </td>
        <td>
            
        </td>
    </tr>
    <tr>
        <td>Texto: </td> 
        <td>
        <?=$item['artTexto'];?>
        </td>
        <td>
            
        </td>
    </tr>
    <tr>
    <!-- arrumar -->
        <td>Imagem: </td> 
        <td>
         <img src="upload/<?=$item['artCodig'];?>.<?=$tipoArquivoImagem;?> " alt="imagem do post">
        </td>
        <td>
            
        </td>
    </tr>
    <!--  -->
</table><br>
<input type="submit" name="botao" value="alterar">
<input type="submit" name="botao" value="excluir">
</form>

<?php
if (isset($_REQUEST['botao']) == 'alterar') 
{
    include("alterar.php");
    
}
if (isset($_REQUEST['botao']) == 'excluir') 
{
    include("excluir.php");
}

}


// if((@$_REQUEST['login']) == 'enviar'){

  

    if (isset($_REQUEST['botao']) == 'inserir') 
    {  
        include("incluir.php");
    }





?>