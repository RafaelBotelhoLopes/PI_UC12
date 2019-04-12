<<<<<<< HEAD
<?php
class SalaDAO {
    
    public static function inserir( $sala ){
        $sql = "INSERT INTO salas ( numero, descricao ) VALUES "
                . " ( '".$sala->getNumero()."' , "
                . "  '".$sala->getDescricao()."' ); ";
        Conexao::executar($sql);
        
    }
    
    public static function editar( $sala ){
        $sql =    "UPDATE salas SET "
                . " numero = '".$sala->getNumero()."' , "
                . " descricao = '".$sala->getDescricao()."'  "
                . " WHERE codigo = ".$sala->getCodigo();
        Conexao::executar($sql);
        
    }
    public static function excluir( $idSala ){
        $sql =    "DELETE FROM salas "
                . " WHERE codigo = ".$idSala;
        Conexao::executar($sql);
        
    }
    
    public static function getSalas(){
        $sql = "SELECT codigo, numero, descricao FROM salas ORDER BY numero";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if( $result != NULL ){
            while( list($_id, $_numero, $_descricao) = mysqli_fetch_row($result) ){
                $sala = new Sala();
                $Sala->setCodigo($_id);
                $sala->setNumero($_numero);
                $sala->setDescricao($_descricao);
                $lista->append($sala);
            }
        }
        return $lista;
    }    
=======
<?php
class SalaDAO {
    
    public static function inserir( $sala ){
        $sql = "INSERT INTO salas ( numero, descricao ) VALUES "
                . " ( '".$sala->getNumero()."' , "
                . "  '".$sala->getDescricao()."' ); ";
        Conexao::executar($sql);
        
    }
    
    public static function editar( $sala ){
        $sql =    "UPDATE salas SET "
                . " numero = '".$sala->getNumero()."' , "
                . " descricao = '".$sala->getDescricao()."'  "
                . " WHERE codigo = ".$sala->getCodigo();
        Conexao::executar($sql);
        
    }
    public static function excluir( $idSala ){
        $sql =    "DELETE FROM salas "
                . " WHERE codigo = ".$idSala;
        Conexao::executar($sql);
        
    }
    
    public static function getSalas(){
        $sql = "SELECT codigo, numero, descricao FROM salas ORDER BY numero";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if( $result != NULL ){
            while( list($_id, $_numero, $_descricao) = mysqli_fetch_row($result) ){
                $sala = new Sala();
                $sala->setCodigo($_id);
                $sala->setNumero($_numero);
                $sala->setDescricao($_descricao);
                $lista->append($sala);
            }
        }
        return $lista;
    }    
>>>>>>> origin/master
}
