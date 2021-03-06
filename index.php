<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aluga Já</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />

        <meta name="viewport" content="width=device-width, initial-scale=1">



    </head>
    <?php
    require_once 'menu.php';
    ?>
    <body>



        <div style="margin-bottom: 200px;">


            <h1 align="center" id="titulosite" style="margin-bottom: 150px">ALUGA JÁ - SENAC</h1>



            <p  style="text-align: center; font-weight: bold;  font-size: 20px; color: #0000FF;">Site em fase de testes</p>


            <p  style="text-align: center; font-weight: bold;  font-size: 15px;">User: rafael</p>
            <p  style="text-align: center; font-weight: bold; font-size: 15px;">Password: 123</p>

            <p  style="text-align: center; font-weight: bold; font-size: 15px;">User: admin</p>
            <p  style="text-align: center; font-weight: bold; margin-bottom: 100px; font-size: 15px;">Password: 123</p>


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

            if (count($lista) == 0) {
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



                    $data = new DateTime($reserva->getDataFinal());
                    $dataFinal = $data->getTimestamp();

                    if ($dataFinal < time()) {

                    } else {
                        //tinha um menor aqui
                        echo '';
                    }

                    if ($reserva->getStatus() != 0) {
                        echo '<tr>';

                        echo '  <td>' . $reserva->getDataInicial() . '</td>';
                        echo '  <td>' . $reserva->getDataFinal() . '</td>';
                        echo '  <td>' . $reserva->getCodUsuario()->getNomeCompleto() . '</td>';
                        echo '  <td>' . $reserva->getCodSala()->getNumero() . '</td>';
                        echo '  <td>' . $reserva->getCodMaterial()->getNome() . '</td>';
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



        </div>


        <?php
        require_once 'footer.php';
        ?>



    </body>
</html>
