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
                                    echo '   <td><a href="#openModal_'.$user->getId().'"><button class="btnExcluir">Excluir</button></a></td>';
                                    echo '</tr>';
                        }    
                    
                        ?>
            
                        <div id="openModal_<?php echo $user->getId(); ?>" class="modalDialog">
                            <div>
                              <a href="#close" title="Close" class="closeModal"></a>
                              <!-- Conteúdo do Modal -->
                              <h2>Excluir</h2>
                              <p>Deseja excluir o usuário?</p>
                              <a href="controller/salvarUsuario.php?confirmaExcluir&idUsuario=<?php  echo $user->getId() ?>">
                                <button>SIM</button></a> 
                              <a href="#close" ><button>NÃO</button></a>



                              <!-- Conteúdo do Modal -->
                            </div>
                        </div>
            
               
            
            <!--editar-->
            
            <div id="openModal_<?php echo $user->getId(); ?>" class="modalDialog">
                            <div>
                              <a href="#edit" title="Edit" class="editModal"></a>
                              <!-- Conteúdo do Modal -->
                              <h2>Editar</h2>
                              <a href="frmUsuario.php?editar&idUsuario=<?php  echo $user->getId() ?>">
                                <button>Confirmar</button></a> 
                              <a href="#close" ><button>Sair</button></a>



                              <!-- Conteúdo do Modal -->
                            </div>
                        </div>
            
            <!--editar-->
            
            
            
            
            
            <?php
            
            
                    }
                    
                    
                    
            ?>
            
        </table>
        
        <?php
        
            }
            
        ?>
        
        
        
        
        
<!--        
          <a href="#openModal">Abrir Modal</a>-->
    
    
    
    <div id="openModal" class="modalDialog">
      <div>
        <a href="#close" title="Close" class="closeModal"></a>
        <!-- Conteúdo do Modal -->
        <h2>Excluir</h2>
        <p>Deseja excluir o usuário?</p>
        <a href="?confirmaExcluir&idUsuario='.$id.'">
          <button>SIM</button></a> 
        <a href="../usuario.php" ><button>NÃO</button></a>
        
        
        
        <!-- Conteúdo do Modal -->
      </div>
    </div>
        

<!--Editar-->
<div id="openModal" class="modalDialog">
      <div>
        <a href="#edit" title="Edit" class="editModal"></a>
        <!-- Conteúdo do Modal -->
        <h2>Editar</h2>
    
        <a href="frmUsuario.php?editar&idUsuario='.$id.'">
          <button>Confirmar</button></a> 
        <a href="../usuario.php" ><button>Sair</button></a>
        
        
        
        <!-- Conteúdo do Modal -->
      </div>
    </div>
    
    
    
    <style>
        .modalDialog {
  position: fixed;
  font-family: Arial, Helvetica, sans-serif;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(0,0,0,0.7);
  z-index: 99999;
  opacity:0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
}
.modalDialog:target {
  opacity:1;
  pointer-events: auto;
}
.modalDialog > div {
  width: 400px;
  position: relative;
  margin: 10% auto;
  padding: 5px 20px 13px 20px;
  border-radius: 10px;
  background: #fff;
}
.closeModal {
  background: #606061;
  color: #FFFFFF;
  line-height: 25px;
  position: absolute;
  right: -12px;
  text-align: center;
  top: -10px;
  width: 24px;
  text-decoration: none;
  font-weight: bold;
  -webkit-border-radius: 12px;
  -moz-border-radius: 12px;
  border-radius: 12px;
  -moz-box-shadow: 1px 1px 3px #000;
  -webkit-box-shadow: 1px 1px 3px #000;
  box-shadow: 1px 1px 3px #000;
}
.closeModal:after {
  content: "\d7";
}
.closeModal:hover { 
  background: #f00; 
}
    </style>
    
    
    
    
        
    </body>
</html>




