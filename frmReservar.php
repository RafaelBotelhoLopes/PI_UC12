<?php
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto M171 - Reservar</title>
    </head>
        <?php
           // include_once 'menu.php';
        ?>
    
        <h1 align="center">Reservar  Sala / Material</h1>
        <br><br><br>
        
        <form action="controller/salvarReserva.php?" method="POST" enctype="multipart/form-data" >
            
            
            <label>Selecione o material que deseja usar: </label>
            <select>
                <option value="0">Selecione...</option>
                <?php
                    $lista = MaterialDAO::getMaterial();
                    foreach ($lista as $material){
                        $selecionar = "";
                        if($idMaterial == $material->getId()){
                            $selecionar = "selected";
                        }
                        echo '<option '.$selecionar.' value="'.$material->getId().'" >'.$material->getNome().'</option>';
                    }
                ?>
            </select>
            
            <input type="date"><br><br>
            
            
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
            </select><br><br>
            
        </form>
        
</html>
