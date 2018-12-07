<?php
 ///ESPERAR GRUPO PARA PODER CADASTRAR O USUARIO

class UsuarioDAO {
    
    public static function inserir($usuario){
        $sql = "INSERT INTO usuarios "
                . " ( nome, telefone, cpf, email, senha, "
                . "   foto, sexo, filhos, admin ) VALUES "
                . " ( '".$usuario->getNome()."' , "
                . "   '".$usuario->getTelefone()."' , "
                . "   '".$usuario->getCpf()."' , "
                . "   '".$usuario->getEmail()."' , "
                . "   '".$usuario->getSenha()."' , "
                . "   '".$usuario->getFoto()."' , "
                . "    ".$usuario->getCidade()->getId()." , "
                . "   '".$usuario->getSexo()."' , "
                . "    ".$usuario->getFilhos()." ,  "
                . "    ".$usuario->getAdmin()
                . "  ); ";
        
        Conexao::executar( $sql );
    }
    
    public static function editar($usuario){
        $sql = "UPDATE usuarios SET " 
                . " nome =     '".$usuario->getNome()."' , "
                . " telefone = '".$usuario->getTelefone()."' , "
                . " cpf =      '".$usuario->getCpf()."' , "
                . " email =    '".$usuario->getEmail()."' , "
                . " foto  =    '".$usuario->getFoto()."' , "
                . " codCidade = ".$usuario->getCidade()->getId()." , "
                . " sexo =     '".$usuario->getSexo()."' , "
                . " filhos =    ".$usuario->getFilhos()." , "
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
        $sql = " SELECT c.id, c.nome, c.telefone, c.cpf,"
             . " c.email, c.foto, d.id, d.nome, c.sexo, c.filhos , c.admin "
             . " FROM usuarios c "
             . " INNER JOIN cidades d "
             . " ON c.codCidade = d.id "
             . " ORDER BY c.nome ";
        
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        while( list( $cod, $nome, $fone, $cpf, $mail,
            $foto, $codCid, $nomeCid, $sexo, $filhos, $admin) = mysqli_fetch_row($result) ){
            $cidade = new Cidade();
            $cidade->setId( $codCid );
            $cidade->setNome( $nomeCid );
            $usuario = new Cliente();
            $usuario->setId($cod);
            $usuario->setNome($nome);
            $usuario->setTelefone($fone);
            $usuario->setEmail($mail);
            $usuario->setCpf($cpf);
            $usuario->setFoto($foto);
            $usuario->setCidade($cidade);
            $usuario->setSexo($sexo);
            $usuario->setFilhos($filhos);
            $usuario->setAdmin($admin);
  
            $lista->append($usuario);
        }
        
        return $lista;
    }
    
    
   public static function getUsuarioById( $id ){
        $sql = " SELECT c.id, c.nome, c.telefone, c.cpf,"
             . " c.email, c.foto, d.id, d.nome, c.sexo, c.filhos, c.admin "
             . " FROM usuarios c "
             . " INNER JOIN cidades d "
             . " ON c.codCidade = d.id "
             . " WHERE c.id = ".$id 
             . " ORDER BY c.nome ";
        
        $result = Conexao::consultar($sql);
      
        list( $cod, $nome, $fone, $cpf, $mail,
            $foto, $codCid, $nomeCid, $sexo, $filhos, $admin) = mysqli_fetch_row($result);
            $cidade = new Cidade();
            $cidade->setId( $codCid );
            $cidade->setNome( $nomeCid );
            $usuario = new Cliente();
            $usuario->setId($cod);
            $usuario->setNome($nome);
            $usuario->setTelefone($fone);
            $usuario->setEmail($mail);
            $usuario->setCpf($cpf);
            $usuario->setFoto($foto);
            $usuario->setCidade($cidade);
            $usuario->setSexo($sexo);
            $usuario->setFilhos($filhos);
            $usuario->setAdmin($admin);
            
        return $usuario;
    }
  
    public static function logar($login, $senha){
        $sql = " SELECT id, nome, foto, admin "
             . " FROM usuarios "
             . " WHERE ( email = '".$login."' OR "
             . "           CPF = '".$login."' )  "
             . "     AND senha = '".$senha."'    ";
        $result = Conexao::consultar($sql);
        
        if( mysqli_num_rows( $result ) > 0 ){
            $dados = mysqli_fetch_assoc( $result );
            $usuario = new Cliente();
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












