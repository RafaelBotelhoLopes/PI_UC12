<?php

    include_once '../model/clsMaterial.php';
    include_once '../dao/clsConexao.php';
    include_once '../dao/clsMaterialDAO.php';

if ( isset($_REQUEST['inserir']) ){
        session_start();
            
        $material = new Material();
        $material->setNome( $_POST['txtNomeItem'] );
        $material->setQuantidadeEstoque( $_POST['txtQtdEstoque'] );
        
        
        $material = MaterialDAO::inserir($material);
                
        header("Location: ../frmMaterial.php");
}