<?php
      
    include_once 'model/clsSala.php';
    include_once 'dao/clsSalaDAO.php';
    include_once 'dao/clsConexao.php';
   
    session_start();
    
    $numeroSala = "";    
    $descricao = "";    
    $action = "inserir";
    
    if( isset($_REQUEST['editar']) ){
        
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Programa de Reserva - Cadastrar Sala</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        
         <h1 align="center">Cadastrar Sala</h1>
        
        <br><br><br>
        
        <form action="controller/salvarSala.php?<?php echo $action; ?>" method="POST"
              enctype="multipart/form-data">


            <label>Número da nova sala: </label>
            <input type="text" name="txtNumeroSala" value="<?php echo $numeroSala; ?>" required maxlength="100" /> <br><br>
            
            <label>Descrição: </label>
            <input type="text" name="txtDescricaoSala" value="<?php echo $descricao; ?>" required maxlength="100" /> <br><br>     
            
            <br><br>
            
            <input type="submit" value="Salvar" />
            <input type="reset" value="Limpar" />
            
            
        </form>
        
        
    </body>
</html>