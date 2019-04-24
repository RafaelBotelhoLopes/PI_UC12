<?php

class MaterialDAO {
    
    public static function inserir( $material ){
        $sql = "INSERT INTO materiais ( nome, qtdEstoque ) VALUES "
                . " ( '".$material->getNome()."' , "
                . "  '".$material->getQuantidadeEstoque()."' ); ";
        Conexao::executar($sql);
        
    }
    
    public static function editar( $material ){
        $sql =    "UPDATE materiais SET "
                . " nome = '".$material->getNome()."' , "
                . " qtdEstoque = '".$material->getQuantidadeEstoque()."'  "
                . " WHERE codigo = ".$material->getCodigo();
        Conexao::executar($sql);
        
    }
    public static function excluir( $idMaterial ){
        $sql =    "DELETE FROM materiais "
                . " WHERE codigo = ".$idMaterial;
        Conexao::executar($sql);
        
    }
    
    public static function getMateriais(){
        $sql = "SELECT codigo, nome, qtdEstoque FROM materiais ORDER BY nome";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if( $result != NULL ){
            while( list($_cod, $_nome, $_qtdEstoque) = mysqli_fetch_row($result) ){
                $material = new Material();
                $material->setCodigo($_cod);
                $material->setNome($_nome);
                $material->setQuantidadeEstoque($_qtdEstoque);
                $lista->append($material);
            }
        }
        return $lista;
    }
    
    public static function getMaterialById($codigo){
        $sql = "SELECT codigo, nome, qtdEstoque FROM materiais WHERE codigo = ".$codigo;
        $result = Conexao::consultar($sql);
        if( $result != NULL ){
            list($_cod, $_nome, $_qtdEstoque) = mysqli_fetch_row($result);
                $material = new Material();
                $material->setCodigo($_cod);
                $material->setNome($_nome);
                $material->setQuantidadeEstoque($_qtdEstoque);
            
                return $material;
                
        }
       
    }
    
    
}
    












//>>>>>>> origin/master
