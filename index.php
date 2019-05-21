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
                
                echo '<table border="1" class="tb">';
                echo '   <tr> ';
                echo '      <th>Data Inicial</th> ';
                echo '      <th>Data Final</th> ';
                echo '      <th>Nome</th> ';
                echo '      <th>Sala</th> ';
                echo '      <th>Material</th> ';
                echo '   </tr> ';
                
//                date_default_timezone_set('America/Sao_Paulo');
//                $date = date('Y-m-d H:i');
//                echo $date;
                
//                if ($date > Reserva::getDataFinal() || $date < Reserva::getDataInicial()){
//                        $status = Reserva::getStatus();
//                        $status = 0;
//                    }else{
//                        $status = 1;
//                    }
                $cont = 0;
                foreach ($lista as $reserva) { 
                    $cont ++;
                    
                    
//                        if( $cont == 2 ){
//                            echo 'id '.$reserva->getDataInicial().' - '.$reserva->getDataFinal();
//
//                        if($reserva->getDataFinal() < $date ){
//                            echo '0 - '.($reserva->getDataFinal() - $date);
//                        }else{
//                            echo '1 - '.($reserva->getDataFinal() - $date);
//                        }
//                    };
                    
                
                    $data = new DateTime( $reserva->getDataFinal() );
                    $dataFinal = $data->getTimestamp();

                    if( $dataFinal < time() ){
                        
                    } else {
                        echo 'menor';
                    }
                    
                    if($reserva->getStatus()!=0){
                        echo '<tr>';

                        echo '  <td>'.$reserva->getDataInicial().'</td>';
                        echo '  <td>'.$reserva->getDataFinal().'</td>';
                        echo '  <td>'.$reserva->getCodUsuario()->getNomeCompleto().'</td>';
                        echo '  <td>'.$reserva->getCodSala()->getNumero().'</td>';
                        echo '  <td>'.$reserva->getCodMaterial()->getNome().'</td>';
                        echo '</tr>';
                    }
                }
                echo '</table>';
                
//                 echo '<table border="1" class="tb">';
//                echo '   <tr> ';
//                echo '      <th>Data Inicial</th> ';
//                echo '      <th>Data Final</th> ';
//                echo '      <th>Nome</th> ';
//                echo '      <th>Material</th> ';
//                echo '   </tr> ';
//                
//                foreach ($lista as $reserva) {
//                    echo '<tr>';
//                    
//                    echo '  <td>'.$reserva->getDataInicial().'</td>';
//                    echo '  <td>'.$reserva->getDataFinal().'</td>';
//                    echo '  <td>'.$reserva->getCodUsuario()->getNomeCompleto().'</td>';
//                    echo '  <td>'.$reserva->getCodMaterial()->getNome().'</td>';
//                    echo '</tr>';
//                }
//                echo '</table>';
                
            }
            
            
        ?>
        
    </body>
</html>
