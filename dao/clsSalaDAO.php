<?php
class SalaDAO {
    
    public static function inserir( $sala ){
        $sql = "INSERT INTO salas ( nome, descricao ) VALUES "
                . " ( '".$sala->getNumero()."' , "
                . " ( '".$sala->getDescricao()."' ); ";
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
        $sql = "SELECT id, numero, descricao FROM salas ORDER BY numero";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if( $result != NULL ){
            while( list($_id, $_numero, $_descricao) = mysqli_fetch_row($result) ){
                $sala = new Sala();
                $Sala->setId($_id);
                $sala->setNumero($_numero);
                $sala->setDescricao($_descricao);
                $lista->append($sala);
            }
        }
        return $lista;
    }
    
    
}











