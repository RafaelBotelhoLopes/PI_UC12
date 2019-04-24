<!DOCTYPE html>
<?php

    if(session_status() != PHP_SESSION_ACTIVE ){
        session_start();
    }
    require_once 'menu.php';
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>cadastrar material sala</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <a href="frmMaterial.php"><button  id="IdCadMat">Cadastrar Material</button></a>

<a href="frmSala.php"><button id="IdCadSala" >Cadastrar Sala</button></a>
</body>
</html>