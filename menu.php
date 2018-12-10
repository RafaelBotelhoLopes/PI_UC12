<?php
    if(session_status() != PHP_SESSION_ACTIVE ){
        session_start();
    }
?>
<header>
    <a href="index.php">
        <button>Início</button></a>
    
    
    <?php
        if( isset($_SESSION['logado']) && 
                  $_SESSION['logado'] == TRUE ) {
    ?>
        <a href="reserva.php">
            <button>Reserva</button></a>
        
   <?php
          echo 'Olá, '.$_SESSION['nome'];
          echo '<a href="sair.php"><button>Sair</button></a>';
        }else{
   ?>
    | 
    <form action="entrar.php" method="POST" >
        <input type="text" name="txtLogin" required
               placeholder="E-mail: " />
        
        <input type="password" name="txtSenha"
               placeholder="Senha: " required />
        
        <input type="submit" value="Entrar" />
    </form> 
    
    <a href="frmUsuario.php">
            <button>Cadastre-se</button></a>
    
    <?php
        }
    ?>
    
</header>

<hr>

