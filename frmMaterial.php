<?php
include_once 'model/clsMaterial.php';
include_once 'dao/clsMaterialDAO.php';
include_once 'dao/clsConexao.php';

session_start();

$nomeItem = "";
$QtdEstoque = 1;
$action = "inserir";

if (isset($_REQUEST['editar'])) {

}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Programa de Reserva - Cadastrar Material</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
        require_once 'menu.php';
        ?>

        <h1 align="center" id="titulosite">Cadastrar Material</h1>

        <br><br><br>

        <form action="controller/salvarMaterial.php?<?php echo $action; ?>" method="POST"
              enctype="multipart/form-data" class="cadMaterialSala" style="margin-bottom: 80px">


            <label>Nome do item: </label>
            <input type="text" name="txtNomeItem" id="campoNome" value="<?php echo $nomeItem; ?>" required maxlength="100" /> <br><br>

            <label>Quantidade em estoque: </label>
            <input type="number" name="txtQtdEstoque" value="<?php echo $QtdEstoque; ?>" required maxlength="100" /> <br><br>

            <br><br>


            <input type="submit" id="CadMatSalvar" value="Salvar" />
            <input type="reset" id="CadMatLimpar" value="Limpar" />


        </form>

        <?php
        require_once 'footer.php';
        ?>
    </body>
</html>