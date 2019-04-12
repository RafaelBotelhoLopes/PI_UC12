<?php

    include_once '../model/clsSala.php';
    include_once '../dao/clsConexao.php';
    include_once '../dao/clsSalaDAO.php';

if ( isset($_REQUEST['inserir']) ){
        session_start();
                
        $sala = new Sala();
        $sala->setNumero($_POST['txtNumeroSala'] );
        $sala->setDescricao($_POST['txtDescricaoSala'] );

       
        $sala = SalaDAO::inserir($sala);
        
        header("Location: ../index.php");     
    
}