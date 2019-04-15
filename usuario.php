<?php
    
    include_once 'model/clsUsuario.php';
    include_once 'dao/clsConexao.php';
    include_once 'dao/clsUsuarioDAO.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Programa de Reserva - Usuarios</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        
        <h1 align="center">Usuários</h1>
        
        <br><br><br>
        
        <a href="frmUsuario.php">
            <button class="btnCadastrarUsuario">Cadastrar novo usuário</button></a>
        
        <br><br>
        <?php
            $lista = UsuarioDAO::getUsuarios();
            
            if( $lista->count() == 0 ){
                echo '<h3><b>Nenhum usuario cadastrado!</b></h3>';
            } else {
              
        ?>
        <table border="1">
            <tr>
                <th>Código</th>
                <th>Nome Completo</th>
                <th>Nome de Usuario</th>               
                <th>E-mail</th> 
            <?php    
            if( isset( $_SESSION['admin']) && $_SESSION['admin'] ){     
                echo ' <th>Editar</th>
                <th>Excluir</th>';
            }
            ?>
            </tr>
            
            <?php
                    foreach ($lista as $user){
                        echo '<tr> ';
                        echo '   <td>'.$user->getId().'</td>';
                        echo '   <td>'.$user->getNomeCompleto().'</td>';
                        echo '   <td>'.$user->getNomeUsuario().'</td>';
                        echo '   <td>'.$user->getEmail().'</td>';
                        
                        
            if( isset( $_SESSION['admin']) && $_SESSION['admin'] ){            
                        echo '   <td><a href="frmUsuario.php?editar&idUsuario='.$user->getId().'" ><button class="btnEditar">Editar</button></a></td>';
                        echo '   <td><a href="controller/salvarUsuario.php?excluir&idUsuario='.$user->getId().'" ><button class="btnExcluir">Excluir</button></a></td>';
                        echo '</tr>';
            }    
                    }
            ?>
            
        </table>
        
        <?php
        
            }
            
        ?>
        
    </body>
</html>




