<?php
    
    include_once 'model/clsUsuario.php';
    
    include_once 'dao/clsUsuarioDAO.php';
    include_once 'dao/clsConexao.php';
   
    session_start();
    
    $nome = "";
    
    $email = "";
    
    $admin = 0;
    
    $foto = "sem_foto.png";
    $action = "inserir";
    
    if( isset($_REQUEST['editar']) ){
        $id = $_REQUEST['idUsuario'];
        $usuario = UsuarioDAO::getUsuarioById($id);
        $nome = $usuario->getNome();
        $email = $usuario->getEmail();
        
        $admin = $usuario->getAdmin();
        $foto = $usuario->getFoto();
       
        $action = "editar&idUsuario=".$usuario->getId();
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Programa de Reserva - Cadastrar Usuario</title>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        
         <h1 align="center">Cadastrar Usuario</h1>
        
        <br><br><br>
        
        <form action="controller/salvarUsuario.php?<?php echo $action; ?>" method="POST" 
              enctype="multipart/form-data">
            
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
            
            <label>Nome: </label>
            <input type="text" name="txtNome" value="<?php echo $nome; ?>" required maxlength="100" /> <br><br>
            
            <label>E-mail: </label>
            <input type="email" name="txtEmail" value="<?php echo $email; ?>" required /> <br><br>
       
            
            <br><br>
  
           
            <label>Foto: </label>
            
            <?php 
                if( isset($_REQUEST['editar'])){
                    echo '<img src="fotos_usuarios/'.$foto.'" width="30px" />';
                }
            ?>
            
            <input type="file" name="foto" /> <br><br>
            <?php
                if( !isset( $_REQUEST['editar'] )){
            ?>
                    <label>Senha: </label>
                    <input type="password" name="txtSenha" required maxlength="100"  /> <br><br>
                    <label>Confirme sua Senha: </label>
                    <input type="password" name="txtSenhaConfirma" required maxlength="100" /> <br>
                    <br><br>
            <?php 
                }
            ?>
            <input type="submit" value="Salvar" />
            <input type="reset" value="Limpar" />
            
            
        </form>
        
        
    </body>
</html>
