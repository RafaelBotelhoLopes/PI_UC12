<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Programa de Reserva</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        
        <?php
            require_once 'menu.php';
        ?>
        
        <br> <br> <br> <br> 
        
        <h1 align="center">Bem-vindo Programa de Reserva </h1>
        
        <?php
            include_once './dao/clsReservaDAO.php';
            include_once './dao/clsConexao.php';
            include_once './dao/clsMaterialDAO.php';
            include_once './dao/clsSalaDAO.php';
            include_once './dao/clsUsuarioDAO.php';
            include_once './model/clsMaterial.php';
            include_once './model/clsReserva.php';
            include_once './model/clsSala.php';
            include_once './model/clsUsuario.php';
        
        
            $lista = ReservaDAO::getReservas();
            
            if( count($lista) == 0 ){
                echo '<h3>Não existem Reservas!</h3>';
            } else {
                
                echo '<table border="1">';
                echo '   <tr> ';
                echo '      <th>Data Inicial</th> ';
                echo '      <th>Data Final</th> ';
                echo '      <th>Nome</th> ';
                echo '      <th>Sala</th> ';
                echo '   </tr> ';
                
                
                
                foreach ($lista as $reserva) {
                    echo '<tr>';
                    
                    echo '  <td>'.$reserva->getDataInicial().'</td>';
                    echo '  <td>'.$reserva->getDataFinal().'</td>';
                    echo '  <td>'.$reserva->getCodUsuario()->getNomeCompleto().'</td>';
                    echo '  <td>'.$reserva->getCodSala()->getNumero().'</td>';
                    echo '</tr>';
                }
                echo '</table>';
                
                 echo '<table border="1">';
                echo '   <tr> ';
                echo '      <th>Data Inicial</th> ';
                echo '      <th>Data Final</th> ';
                echo '      <th>Nome</th> ';
                echo '      <th>Material</th> ';
                echo '   </tr> ';
                
                foreach ($lista as $reserva) {
                    echo '<tr>';
                    
                    echo '  <td>'.$reserva->getDataInicial().'</td>';
                    echo '  <td>'.$reserva->getDataFinal().'</td>';
                    echo '  <td>'.$reserva->getCodUsuario()->getNomeCompleto().'</td>';
                    echo '  <td>'.$reserva->getCodMaterial()->getNome().'</td>';
                    echo '</tr>';
                }
                echo '</table>';
                
            }
        
        ?>
    </body>
</html>
