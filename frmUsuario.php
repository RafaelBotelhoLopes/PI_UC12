<?php
    
    include_once 'model/clsUsuario.php';    
    include_once 'dao/clsUsuarioDAO.php';
    include_once 'dao/clsConexao.php';
    
    
    session_start();
    
    $nome = "";    
    $nomeUsuario = "";    
    $email = "";    
    $admin = 0;    
    $action = "inserir";
    
    if( isset($_REQUEST['editar']) ){
        $id = $_REQUEST['idUsuario'];
        $usuario = UsuarioDAO::getUsuarioById($id);        
        $nome = $usuario->getNomeCompleto();
        $nomeUsuario = $usuario->getNomeUsuario();
        $email = $usuario->getEmail();        
        $admin = $usuario->getAdmin();       
        $action = "editar&idUsuario=".$usuario->getId();
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Programa de Reserva - Cadastrar Usuario</title>

        <link href="estilo.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        
         <h1 align="center">Cadastrar Usuario</h1>
        
        <br><br><br>
        
        <form action="controller/salvarUsuario.php?<?php echo $action; ?>" method="POST" 
              enctype="multipart/form-data" id="frmUsuario">
            
            <?php
                if( isset( $_SESSION['admin']) && $_SESSION['admin'] ){
                    
                    if( $admin ){
                        echo '<input type="checkbox" selected name="cbAdmin" />';
                    } else {
                        echo '<input type="checkbox" name="cbAdmin" />';
                    }
                    echo ' <label>Admin</label> <br><br>';
                }
            ?>
            
            <label>Nome Completo: </label>
            <input type="text" name="txtNomeCompleto" class="campo" value="<?php echo $nome; ?>" required maxlength="100" /> <br><br>
            
            <label>Nome de Usuário: </label>
            <input type="text" name="txtNomeUsuario" class="campo" value="<?php echo $nomeUsuario; ?>" required maxlength="100" /> <br><br>
            
            <label>E-mail: </label>
            <input type="email" name="txtEmail" class="campo" value="<?php echo $email; ?>" required /> <br><br>
       
            
            
           
            <?php
                if( !isset( $_REQUEST['editar'] )){
            ?>
                    
                    <label>Senha: </label>
                    <input type="password" name="txtSenha" class="campo" required maxlength="100"  /> <br><br>
                    <label>Confirme sua Senha: </label>
                    <input type="password" name="txtSenhaConfirma" class="campo" required maxlength="100" /> <br>
                    <br><br>
            <?php 
                }
            ?>
            <input type="submit" value="Salvar" />

            <input id="limpar" type="reset" value="Limpar" />

            
            
        </form>
        
        
    </body>
</html>
