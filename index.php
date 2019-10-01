<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>ALIKA</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" />


    

</head>
<body>
    

<?php
include ("header.php");
$pag="home";
$vetValidas = array ("sobre", "form","pesquisa");
if(isset($_REQUEST ['p']))
{
$pag= $_REQUEST ['p'];
}
include($pag .".php");
include ("footer.php");

?>

</body>

</html>