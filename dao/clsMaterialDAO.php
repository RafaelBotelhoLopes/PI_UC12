<?php
/**
 * Description of clsCidadeDAO
 *
 * @author assparremberger
 * 26/10/2018
 */

class MaterialDAO {
    
    public static function inserir( $material ){
        $sql = "INSERT INTO materiais ( nome, qtdEstoque ) VALUES "
                . " ( '".$material->getNome()."' , "
                . "  '".$material->getQtdEstoque()."' ); ";
        Conexao::executar($sql);
        
    }
    
    public static function editar( $material ){
        $sql =    "UPDATE materiais SET "
                . " nome = '".$material->getNome()."' "
                . " WHERE id = ".$material->getId();
        Conexao::executar($sql);
        
    }
    public static function excluir( $idMaterial ){
        $sql =    "DELETE FROM materiais "
                . " WHERE id = ".$idMaterial;
        Conexao::executar($sql);
        
    }
    
    public static function getMateriais(){
        $sql = "SELECT id, nome FROM materiais ORDER BY nome";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if( $result != NULL ){
            while( list($_id, $_nome) = mysqli_fetch_row($result) ){
                $material = new Material();
                $material->setId($_id);
                $material->setNome($_nome);
                $lista->append($material);
            }
        }
        return $lista;
    }
    
    
}











