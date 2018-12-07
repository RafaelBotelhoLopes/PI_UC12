<?php
 ///ESPERAR GRUPO PARA PODER CADASTRAR O USUARIO

class UsuarioDAO {
    
    public static function inserir($usuario){
        $sql = "INSERT INTO usuarios "
                . " ( nome, email, senha, "
                . "   foto, admin ) VALUES "
                . " ( '".$usuario->getNome()."' , "      
                . "   '".$usuario->getEmail()."' , "
                . "   '".$usuario->getSenha()."' , "
                . "   '".$usuario->getFoto()."' , "         
                . "    ".$usuario->getAdmin()
                . "  ); ";
        
        Conexao::executar( $sql );
    }
    
    public static function editar($usuario){
        $sql = "UPDATE usuarios SET " 
                . " nome =     '".$usuario->getNome()."' , "
                . " email =    '".$usuario->getEmail()."' , "            
                . " admin =    ".$usuario->getAdmin()."  "
                . " WHERE id = ".$usuario->getId();
        
        Conexao::executar( $sql );
    }
    
    
    public static function excluir($usuario){
        $sql = "DELETE FROM usuarios "
             . " WHERE id =  ".$usuario->getId();
        
        Conexao::executar( $sql );
    }
    
    public static function getUsuarios(){
        $sql = " SELECT u.id, u.nome, "
             . " u.email, u.foto, u.admin "
             . " FROM usuarios u "
             . " ORDER BY u.nome ";
        
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        while( list( $cod, $nome, $mail,
            $foto, $admin) = mysqli_fetch_row($result) ){
           
            $usuario = new Usuario();
            $usuario->setId($cod);
            $usuario->setNome($nome);
            
            $usuario->setEmail($mail);
            
            $usuario->setFoto($foto);
            
            $usuario->setAdmin($admin);
  
            $lista->append($usuario);
        }
        
        return $lista;
    }
    
    
   public static function getUsuarioById( $id ){
        $sql = " SELECT u.id, u.nome ,"
             . " u.email, u.foto, u.admin "
             . " FROM usuarios u "
             . " WHERE u.id = ".$id 
             . " ORDER BY u.nome ";
        
        $result = Conexao::consultar($sql);
      
        list( $cod, $nome, $mail,
            $foto, $admin) = mysqli_fetch_row($result);
           
            $usuario = new Usuario();
            $usuario->setId($cod);
            $usuario->setNome($nome);
           
            $usuario->setEmail($mail);
            
            $usuario->setFoto($foto);
           
            $usuario->setAdmin($admin);
            
        return $usuario;
    }
  
    public static function logar($login, $senha){
        $sql = " SELECT id, nome, foto, admin "
             . " FROM usuarios "
             . " WHERE ( email = '".$login."' OR "
             
             . "     AND senha = '".$senha."'    ";
        $result = Conexao::consultar($sql);
        
        if( mysqli_num_rows( $result ) > 0 ){
            $dados = mysqli_fetch_assoc( $result );
            $usuario = new Usuario();
            $usuario->setId( $dados['id'] );
            $usuario->setNome( $dados['nome'] );
            $usuario->setFoto( $dados['foto'] );
            $usuario->setAdmin( $dados['admin'] );
            return $usuario;
        } else {
            return NULL;
        }
        
    }
   
    
}












