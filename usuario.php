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
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        
        <h1 align="center">Usuarios</h1>
        
        <br><br><br>
        
        <a href="frmCliente.php">
            <button>Cadastrar novo usuario</button></a>
        
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
                <th>Foto</th>
                <th>Nome do Usuario</th>               
                <th>E-mail</th>               
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            
            <?php
                    foreach ($lista as $user){
                        echo '<tr> ';
                        echo '   <td>'.$user->getId().'</td>';
                        echo '   <td><img src="fotos_usuarios/'.$user->getFoto().'" width="30px" /></td>';
                        echo '   <td>'.$user->getNome().'</td>';
             
                        echo '   <td>'.$user->getEmail().'</td>';
                        
                        
                        
                        echo '   <td><a href="frmUsuario.php?editar&idUsuario='.$user->getId().'" ><button>Editar</button></a></td>';
                        echo '   <td><a href="controller/salvarUsuario.php?excluir&idUsuario='.$user->getId().'" ><button>Excluir</button></a></td>';
                        echo '</tr>';
                        
                    }
            ?>
            
        </table>
        
        <?php
        
            }
            
        ?>
        
    </body>
</html>




