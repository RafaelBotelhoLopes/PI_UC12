<?php
    include_once 'model/clsMaterial.php';
    include_once 'model/clsSala.php';
    include_once 'model/clsReserva.php';
    include_once 'dao/clsConexao.php';
    include_once 'dao/clsMaterialDAO.php';
    include_once 'dao/clsReservaDAO.php';
    include_once 'dao/clsSalaDAO.php';
    
    
    
    session_start();
    
    $idMaterial = 0;
    $idSala = 0;
    

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto M171 - Reservar</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />
        <script src="jquery-3.3.1.js"></script>

    </head>
        <?php
            include_once 'menu.php';
           
              
            
        ?>
    
        <h1 align="center">Reservar  Sala / Material</h1>
        <br><br><br>
        
        <form align="center" action="controller/salvarReserva.php?inserir" method="POST" enctype="multipart/form-data" >
            
        <label>De: </label>
              <input type="datetime-local" name="dataInicial"><br><br>
                                          
        <label>Até: </label>
              <input type="datetime-local" name="dataFinal"><br><br>    
              
              
           <label>Selecione o material: </label>
                      
           <select name="Materiais" id="Materiais" onchange="pegarQtd()">
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
                               
            </select>
           
               
           
            <label>Quantidade:</label> 
            <select name="quantidade" id="quantidade">
                
                    <option value="0">0</option>                    
                    
                </select>
                    <script>
                        var materiais = document.getElementById('Materiais');
                        var selQuantidade = document.getElementById('quantidade');
                        <?php
                                echo ' var qtds = new Array(); '
                                   . ' qtds.push(0);           ';
                                foreach ($lista as $mat) {
                                    echo ' qtds.push( '.$mat->getQuantidadeEstoque().'  );';
                                }
                            
                            ?>
                        
                        function pegarQtd(){
                            
                            posicao = materiais.selectedIndex;   
                            var conteudo = '';
                            var total = qtds[posicao];
                            for (var i = 0; i <=total; i++) {
                                conteudo += '<option value="' + i + '" >' + i + '</option>';
                            }
                            selQuantidade.innerHTML = conteudo;
                            // pegar o Select Materiais
                            // pegar a posicao selecionada
                            // pegar o material dentro da lista na posição x-1
                            // pegar a quantidade do material
                            // montar um for para preencher os options do select
                            
                          //  materiais.innerHTML = material.
                        }
                        
                    </script>
            <br><br>
              
           
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
  
            <input type="submit" id="btnReservar" value="Reservar"/>    
            
        </form>
        
        
        
</html>
