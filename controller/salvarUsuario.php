<?php
include_once '../model/clsUsuario.php';
include_once '../dao/clsUsuarioDAO.php';
include_once '../dao/clsConexao.php';


if( isset($_REQUEST['inserir'])  ){
    $senha = $_POST['txtSenha'];
    $senhaConfirma = $_POST['txtSenhaConfirma'];
    
    if( $senha != $senhaConfirma){
        echo "<body onload='window.history.back();'>";
    }else{
    
        $usuario = new Usuario();
        $usuario->setNomeCompleto( $_POST['txtNomeCompleto'] );        
        $usuario->setNomeUsuario( $_POST['txtNomeUsuario'] );        
        $usuario->setEmail( $_POST['txtEmail'] );
        
        if( isset( $_POST['cbAdmin']) ){
            $usuario->setAdmin( 1 );
        } else {
            $usuario->setAdmin( 0 );
        }
               
        $senha = md5($senha);
        $usuario->setSenha( $senha );        
        UsuarioDAO::inserir( $usuario );        
        header("Location: ../usuario.php");
    }   
}



if( isset($_REQUEST['editar'])){
    
    $id = $_REQUEST['idUsuario'];
    $usuario = UsuarioDAO::getUsuarioById($codigo);
      
    $usuario->setNomeCompleto( $_POST['txtNomeCompleto'] );
    $usuario->setNomeUsuario( $_POST['txtNomeUsuario'] );
    
    $usuario->setEmail( $_POST['txtEmail'] );
        
    if( isset( $_POST['cbAdmin']) ){
        $usuario->setAdmin( 1 );
    } else {
        $usuario->setAdmin( 0 );
    }
    
    UsuarioDAO::editar($usuario);
    
    header("Location: ../usuario.php");
    
}

if( isset($_REQUEST['excluir'])){
    $id = $_REQUEST['idUsuario'];
    $usuario = UsuarioDAO::getUsuarioById($id);
    echo '<br><br><hr> '
       . '<h3>Confirma a exclusão do usuario  '
       .$usuario->getNomeUsuario(). '? </h3> '
       . '<br><hr>';
    echo  '<a href="?confirmaExcluir&idUsuario='.$id.'">'
        . '    <button>SIM</button></a> ';
    echo '<a href="../usuario.php" ><button>NÃO</button></a>';
}

if( isset( $_REQUEST['confirmaExcluir'] ) ){
    $id = $_REQUEST['idUsuario'];
    $usuario = UsuarioDAO::getUsuarioById($id);
    UsuarioDAO::excluir($usuario);
    header("Location: ../usuario.php");
}


