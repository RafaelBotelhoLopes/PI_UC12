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
        $usuario->setNome( $_POST['txtNome'] );
        
        $usuario->setEmail( $_POST['txtEmail'] );
        
        
       
        
        if( isset( $_POST['cbAdmin']) ){
            $usuario->setAdmin( 1 );
        } else {
            $usuario->setAdmin( 0 );
        }
        
       
        $senha = md5($senha);
        $usuario->setSenha( $senha );
        
       
        
        $usuario->setFoto( salvarFoto() );
        
        UsuarioDAO::inserir( $usuario );
        
        header("Location: ../usuario.php");
    }   
}



if( isset($_REQUEST['editar'])){
    
    $id = $_REQUEST['idUsuario'];
    $usuario = UsuarioDAO::getUsuarioById($id);
    
     if( isset( $_FILES['foto']['name']) && 
            $_FILES['foto']['name'] != "" ){
         $nova_foto = salvarFoto();
         if( $usuario->getFoto() != "sem_foto.png"){
             unlink("../fotos_usuarios/".$usuario->getFoto());
         }
         $usuario->setFoto($nova_foto);
     }
    
    $usuario->setNome( $_POST['txtNome'] );
    
    $usuario->setEmail( $_POST['txtEmail'] );
        
    if( isset( $_POST['cbAdmin']) ){
        $usuario->setAdmin( 1 );
    } else {
        $usuario->setAdmin( 0 );
    }
        
   
    
    UsuarioDAO::editar($usuario);
    
    header("Location: ../usuario.php");
    
}


function salvarFoto(){
    $nome_arquivo = "";
    if( isset( $_FILES['foto']['name']) && 
            $_FILES['foto']['name'] != "" ){
        $nome_arquivo = date('YmdHis').
              basename( $_FILES['foto']['name'] );
        $diretorio = "../fotos_usuarios/";
        $caminho = $diretorio.$nome_arquivo;
        if( ! move_uploaded_file( $_FILES['foto']['tmp_name'] ,
                $caminho ) ){
            $nome_arquivo = "sem_foto.png";
        }
        
    } else {
        $nome_arquivo = "sem_foto.png";
    }
    return $nome_arquivo;
}


if( isset($_REQUEST['excluir'])){
    $id = $_REQUEST['idUsuario'];
    $usuario = UsuarioDAO::getUsuarioById($id);
    echo '<br><br><hr> '
       . '<h3>Confirma a exclusão do usuario  '
       .$usuario->getNome(). '? </h3> '
       . '<br><hr>';
    echo  '<a href="?confirmaExcluir&idUsuario='.$id.'">'
        . '    <button>SIM</button></a> ';
    echo '<a href="../usuario.php" ><button>NÃO</button></a>';
}

if( isset( $_REQUEST['confirmaExcluir'] ) ){
    $id = $_REQUEST['idUsuario'];
    $usuario = UsuarioDAO::getUsuarioById($id);
    if( $usuario->getFoto() != "" &&  
        $usuario->getFoto() != "sem_foto.png" ){
        unlink("../fotos_usuarios/".$usuario->getFoto() );
    }
    UsuarioDAO::excluir($usuario);
    header("Location: ../usuario.php");
}


