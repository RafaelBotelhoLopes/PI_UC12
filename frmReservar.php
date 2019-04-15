<?php
    include_once 'model/clsMaterial.php';
    include_once 'model/clsSala.php';
    include_once 'model/clsReserva.php';
    include_once 'dao/clsConexao.php';
    include_once 'dao/clsMaterialDAO.php';
    include_once 'dao/clsReservaDAO.php';
    include_once 'dao/clsSalaDAO.php';
    
    $idMaterial = 0;
    $idSala = 0;
    

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto M171 - Reservar</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />

    </head>
        <?php
            include_once 'menu.php';
           
              
            
        ?>
    
        <h1 align="center">Reservar  Sala / Material</h1>
        <br><br><br>
        
        <form align="center" action="controller/salvarReserva.php?" method="POST" enctype="multipart/form-data" >
            
            
           <label>Selecione o material: </label>
                      
           <select name="Materiais">
                <option value="0">Não Reservar Material</option>
                <?php
                    $lista = MaterialDAO::getMateriais();
                    foreach ($lista as $material){
                        $selecionar = "";
                        if($idMaterial == $material->getCodigo()){
                            $selecionar = "selected";
                            
                        }
                        echo '<option '.$selecionar.' value="'.$material->getCodigo().'" >'.$material->getNome().'</option>';
                        
                    }
                ?>
                
            </select><br><br>
              
           
            <label>Selecione a sala: </label>
            <select name="Salas">
                <option value="0">Não Reservar Sala</option>
                <?php
                    $lista = SalaDAO::getSalas();
                    foreach ($lista as $sala){
                        $selecionar = "";
                        if($idSala == $sala->getCodigo()){
                            $selecionar = "selected";
                            
                        }
                        echo '<option '.$selecionar.' value="'.$sala->getCodigo().'" >'.$sala->getNumero()." - ".$sala->getDescricao().'</option>';
                        
                    }
                ?>
                
            </select><br><br><br><br>  
     
     
              <label>De: </label>
              <input type="datetime-local" name="data"><br><br>
              <label>Até: </label>
              <input type="datetime-local" name="data"><br><br>
            
            
        
            <input type="submit" value="Reservar"/>    
            
        </form>
        
        
        
</html>
