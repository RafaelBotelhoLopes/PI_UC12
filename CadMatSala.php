<?php
    if(session_status() != PHP_SESSION_ACTIVE ){
        session_start();
    }
    require_once 'menu.php';
?>


<a href="frmMaterial.php"><button>Cadastrar Material</button></a>

<a href="frmSala.php"><button>Cadastrar Sala</button></a>
