<?php

    include_once '../model/clsMaterial.php';
    include_once '../model/clsReserva.php';
    include_once '../model/clsSala.php';
    include_once '../dao/clsConexao.php';
    include_once '../dao/clsMaterialDAO.php';
    include_once '../dao/clsReservaDAO.php';
    include_once '../dao/clsSalaDAO.php';

if ( isset($_REQUEST['inserir']) ){
        session_start();
        $usuario = new Usuario();
        $usuario->setCodigo($_SESSION['idUsuario']);
        
        $material = new Material();
        $material->setCodigo($codigo);
        
        $sala = new Sala();
        $sala->setCodigo($codigo);
        
        $dataInicial = date ("Y-m-d H:i:s");
        $dataFinal = date("Y-m-d H:i:s");
        
        $reserva = new Reserva();
        $reserva->setCodUsuario($usuario);
        $reserva->setCodMaterial($material);
        $reserva->setCodSala($sala);
        $reserva->setQuantidadeMaterial($qtdMaterial);                
        $reserva->setDataInicial($dataInicial);
        $reserva->setDataFinal($dataFinal);
        
        $idReserva = ReservaDAO::inserir($reserva);
        $reserva->setCodigo($idReserva);
        
        header("Location: ../index.php");
                
    
}
