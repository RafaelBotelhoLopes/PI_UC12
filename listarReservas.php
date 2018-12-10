<?php
    /*session_start();
    if( isset($_SESSION['logado']) && $_SESSION['logado'] ){
        
        include_once 'model/clsCliente.php';
        include_once 'model/clsPedido.php';
        include_once 'dao/clsPedidoDAO.php';
        include_once 'dao/clsConexao.php';
        
        $idCliente = 0;
        
        if( !isset( $_SESSION['admin'] ) || !$_SESSION['admin'] ){
            $idCliente = $_SESSION['idCliente'];
        }
     
     */
?>
     
     
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Market M171 - Pedidos</title>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        <h1 align="center">Pedidos</h1>
        <br><br><br>
        
        <?php
            
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
                
                
                
                foreach ($lista as $sala) {
                    echo '<tr>';
                    
                    echo '  <td>'.$reserva->getDataInicial().'</td>';
                    echo '  <td>'.$reserva->getDataFinal().'</td>';
                    echo '  <td>'.$reserva->getUsuario()->getNome().'</td>';
                    echo '  <td>'.$reserva->getSala().'</td>';
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
                
                foreach ($lista as $material) {
                    echo '<tr>';
                    
                    echo '  <td>'.$reserva->getHorarioInicial().'</td>';
                    echo '  <td>'.$reserva->getHorarioFinal().'</td>';
                    echo '  <td>'.$reserva->getUsuario()->getNome().'</td>';
                    echo '  <td>'.$reserva->getMaterial().'</td>';
                    echo '</tr>';
                }
                echo '</table>';
                
            }
        
        ?>
        
    </body>
</html>

<?php
    
        header("Location: index.php");
    
    ?>












