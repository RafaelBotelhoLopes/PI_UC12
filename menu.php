<?php
    if(session_status() != PHP_SESSION_ACTIVE ){
        session_start();
    }
?>

<div id="menu">
    <a class="menu" href="index.php">
        <button>Início</button></a>
    
    
    <?php
        if( isset($_SESSION['logado']) && 
                  $_SESSION['logado'] == TRUE ) {
    ?>
    <a class="menu" href="frmReservar.php">
            <button>Reservar</button></a>
        
   <?php
          echo 'Olá, '.$_SESSION['nome'];
          echo '<a href="sair.php"><button>Sair</button></a>';
          if( isset( $_SESSION['admin']) && $_SESSION['admin'] == TRUE){
              
            echo '<button class="menu">Cadastrar Material / Sala</button>';
            echo '<a class="menu" href="frmUsuario.php">
            <button>Cadastrar</button></a>
            <a class="menu" href="usuario.php">
            <button>Usuários</button></a>';
            
        }
        }else{
   ?>
    <form id="frmMenu" action="entrar.php" method="POST" >
        <input type="text" name="txtLogin" required
               placeholder="Usuário ou E-mail: " />
        
        <input type="password" name="txtSenha"
               placeholder="Senha: " required />
        
        <input type="submit" value="Entrar" />
    </form> 
    
    <a class="menu" href="frmUsuario.php">
            <button>Cadastre-se</button></a>
    
    <?php
        
        }
    ?>
    
    <br><hr>
    
</div>

<style>
    #frmMenu{
        float: left;
    }
    .menu{
        float: left;
    }
</style>



