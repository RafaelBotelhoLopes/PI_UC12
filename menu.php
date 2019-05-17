<?php
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
?>

<div id="menu">



    <img id="foto" src="imagens/entrega.jpg" alt="Empresa"  />                   



    <a class="menu" href="index.php">
        <button class="btnMenu">Início</button></a>


    <?php

        if( isset($_SESSION['logado']) && 
                  $_SESSION['logado'] == TRUE ) {
            
        
    ?>
    <a class="menu" href="frmReservar.php">
        <button class="btnMenu">Reservar</button></a>
        
        
   <?php

//          echo '<button id="ola" class="btnMenu"></button></a>';
    
          
          echo '<a href="sair.php"><button id="sair" class="btnMenu">Sair</button></a>';
          if( isset( $_SESSION['admin']) && $_SESSION['admin'] == TRUE){

   
            echo '  <a class="menu" href="CadMatSala.php"><button class="btnMenu" id="materialsala">Cadastrar Material / Sala</button></a>';
            echo '  <a class="menu" href="frmUsuario.php">

                        <button id="cadastrar" class="btnMenu" >Cadastrar</button></a>
                    <a class="menu" href="usuario.php">
                        <button id="usuarios" class="btnMenu" >Usuários</button></a>';

           echo '  <button class="btnMenu" id="ola">Olá, '.$_SESSION['nome'].'</button>';
            
//        echo 'Olá, ' . $_SESSION['nome'];
//        echo '<a href="sair.php"><button id="sair" class="btnMenu">Sair</button></a>';
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == TRUE) {

        }
        }
          
    } else {
        ?>
        <form id="frmMenu" action="entrar.php" method="POST" >
            <input type="text" name="txtLogin" required
                   placeholder="Usuário ou E-mail: " />

            <input type="password" name="txtSenha"
                   placeholder="Senha: " required />

            <input type="submit" value="Entrar" />
        </form> 

        <a class="menu" href="frmUsuario.php">
            <button class="btnMenu">Cadastre-se</button></a>

    <?php
}
?>

    <br>

</div>

<style>
    #frmMenu{
        
        float: left;
    }
    /*    .menu{
            float: left;
        }*/
    #menu img{
        float: left;
        margin-left: 5px;

    }
    #menu a{
        
        float: left;
        margin-left: 5px;

    }
</style>

