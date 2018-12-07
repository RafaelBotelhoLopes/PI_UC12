<?php
/**
 * Description of clsCidadeDAO
 *
 * @author assparremberger
 * 26/10/2018
 */

class SalaDAO {
    
    public static function inserir( $sala ){
        $sql = "INSERT INTO salas ( nome ) VALUES "
                . " ( '".$sala->getNumero()."' ); ";
        Conexao::executar($sql);
        
    }
    
    public static function editar( $sala ){
        $sql =    "UPDATE salas SET "
                . " numero = '".$sala->getNumero()."' "
                . " WHERE id = ".$sala->getId();
        Conexao::executar($sql);
        
    }
    public static function excluir( $idSala ){
        $sql =    "DELETE FROM salas "
                . " WHERE id = ".$idSala;
        Conexao::executar($sql);
        
    }
    
    public static function getSalas(){
        $sql = "SELECT id, numero FROM salas ORDER BY numero";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if( $result != NULL ){
            while( list($_id, $_numero) = mysqli_fetch_row($result) ){
                $sala = new Sala();
                $Sala->setId($_id);
                $sala->setNumero($_numero);
                $lista->append($sala);
            }
        }
        return $lista;
    }
    
    
}











