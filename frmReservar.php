<?php
    include_once 'model/clsMaterial.php';
    include_once 'model/clsSala.php';
    include_once 'model/clsReserva.php';
    include_once 'dao/clsConexao.php';
    include_once 'dao/clsMaterialDAO.php';
    include_once 'dao/clsReservaDAO.php';
    include_once 'dao/clsSalaDAO.php';

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
            
            
           <label>Selecione o material que deseja usar: </label>
                      
           <select name="Materiais">
                <option value="0">Não Reservar Material</option>
                <?php
                    $lista = MaterialDAO::getMateriais();
                    foreach ($lista as $material){
                        $selecionar = "";
                        if($idMaterial == $material->getId()){
                            $selecionar = "selected";
                            
                        }
                        echo '<option '.$selecionar.' value="'.$material->getId().'" >'.$material->getNome().'</option>';
                        
                    }
                ?>
                
            </select><br><br>
              
           
            <label>Selecione a sala que deseja usar: </label>
            <select name="Salas">
                <option value="0">Não Reservar Sala</option>
                <?php
                    $lista = SalaDAO::getSalas();
                    foreach ($lista as $sala){
                        $selecionar = "";
                        if($idSala == $sala->getId()){
                            $selecionar = "selected";
                            
                        }
                        echo '<option '.$selecionar.' value="'.$sala->getId().'" >'.$sala->getNome().'</option>';
                        
                    }
                ?>
                
            </select><br><br><br><br>  
     
     
              <label>Dia da reserva: </label>
              <input type="date" name="data"><br><br>
            
            
        
     
            <label>Horario Inicial: </label>
            <select name="horarioInicial">
                <option value="0">Selecione...</option>
                <option value="1">09:15</option>
                <option value="2">10:15</option>
                <option value="3">11:15</option>
                <option value="4">12:15</option>
                <option value="5">13:15</option>
                <option value="6">14:15</option>
                <option value="7">15:15</option>
            </select><br><br>
            <label>Horario Final: </label>
            <select name="horarioFinal">
                <option value="0">Selecione...</option>
                <option value="1">09:15</option>
                <option value="2">10:15</option>
                <option value="3">11:15</option>
                <option value="4">12:15</option>
                <option value="5">13:15</option>
                <option value="6">14:15</option>
                <option value="7">15:15</option>
            </select><br><br><br><br>
        
            <input type="submit" value="Reservar"/>    
            
        </form>
        
        
        
</html>
