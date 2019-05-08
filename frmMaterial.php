<?php
    
    include_once 'model/clsMaterial.php';   
    include_once 'dao/clsMaterialDAO.php';
    include_once 'dao/clsConexao.php';
   
    session_start();
    
    $nomeItem = "";    
    $QtdEstoque = 1;    
    $action = "inserir";
    
    if( isset($_REQUEST['editar']) ){
        
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
        
         <h1 align="center">Cadastrar Material</h1>
        
        <br><br><br>
        
        <form action="controller/salvarMaterial.php?<?php echo $action; ?>" method="POST" 
              enctype="multipart/form-data" class="cadMaterialSala">
                      
            
            <label>Nome do item: </label>
            <input type="text" name="txtNomeItem" value="<?php echo $nomeItem; ?>" required maxlength="100" /> <br><br>
            
            <label>Quantidade em estoque: </label>
            <input type="number" name="txtQtdEstoque" value="<?php echo $QtdEstoque; ?>" required maxlength="100" /> <br><br>
                     
            <br><br>
           

            <input type="submit" value="Salvar" />
            <input type="reset" value="Limpar" />
            
            
        </form>
        
        
    </body>
</html>