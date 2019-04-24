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
        $sala->setCodigo($_POST['Salas']);
        
        $dataInicial = date ($_POST['dataInicial']);
        $dataFinal = date($_POST['dataFinal']);
        
        $reserva = new Reserva();
        $reserva->setCodUsuario($usuario);
        $reserva->setCodMaterial($material);
        $reserva->setCodSala($sala);   
        $reserva->setQuantidadeMaterial($_POST['quantidade']);
        $reserva->setDataInicial($dataInicial);
        $reserva->setDataFinal($dataFinal);
        
        $idReserva = ReservaDAO::inserir($reserva);
        $reserva->setCodigo($idReserva);
        
        header("Location: ../index.php");
                
    
}
