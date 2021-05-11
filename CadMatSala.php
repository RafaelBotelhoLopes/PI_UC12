<!DOCTYPE html>
<?php
if (session_status() != PHP_SESSION_ACTIVE) {
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
        <h1 id="titulosite">Cadastrar Material/Sala</h1>
        <a href="frmMaterial.php"><button  class="CadMatSala" style="">Cadastrar Material</button></a>

        <a href="frmSala.php"><button class="CadMatSala" >Cadastrar Sala</button></a>

        <?php
        require_once 'footer.php';
        ?>
    </body>
</html>