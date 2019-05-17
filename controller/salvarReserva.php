<?php
session_start();

    include_once '../model/clsMaterial.php';
    include_once '../model/clsReserva.php';
    include_once '../model/clsSala.php';
    include_once '../dao/clsConexao.php';
    include_once '../dao/clsMaterialDAO.php';
    include_once '../dao/clsReservaDAO.php';
    include_once '../dao/clsSalaDAO.php';
    include_once '../model/clsUsuario.php';
    include_once '../dao/clsUsuarioDAO.php';

if ( isset($_REQUEST['inserir']) ){
        $usuario = new Usuario();
        $usuario->setId($_SESSION['idUsuario']);
        
        $material = new Material();
        $material->setCodigo($_POST['Materiais']);
        
        $sala = new Sala();
        if ($_POST['Salas'] > 0){
            $sala->setCodigo($_POST['Salas']);
        }else {
            $sala->setCodigo(11);
        }
        
        
        $d = $_POST['dataInicial'];
        $dataInicial = substr($d, 0, 10) .' '. substr($d, 11, 5) ;
       
       
        $d = $_POST['dataFinal'];
        $dataFinal   = substr($d, 0, 10) .' '. substr($d, 11, 5) ;
     
        
        $reserva = new Reserva();
        $reserva->setCodUsuario($usuario);
        $reserva->setCodMaterial($material);
        $reserva->setCodSala($sala);   
        $reserva->setQuantidadeMaterial($_POST['quantidade']);
        $reserva->setDataInicial($dataInicial);
        $reserva->setDataFinal($dataFinal);
        
        ReservaDAO::inserir($reserva);
        
        header("Location: ../index.php");
                
    
}
