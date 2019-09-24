<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>TROCAR</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">


    

</head>
<body>
    

<?php
include ("header.php");
$pag="home";
$vetValidas = array ("pagina_02", "pagina_03");
if(isset($_REQUEST ['p']))
{
$pag= $_REQUEST ['p'];
}
include($pag .".php");
include ("footer.php");

?>

</body>

</html>