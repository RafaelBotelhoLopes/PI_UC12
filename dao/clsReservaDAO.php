<?php

class ReservaDAO {
    
    public static function inserir ($reserva){
        $sql = " INSERT INTO reservas "
             . " (codUsuario, codSala, codMaterial, qtdMaterial, dataInicial, dataFinal) VALUES ( "
             . "  ".$reserva->getUsuario()->getCodigo()." , "
             . "  ".$reserva->getSala()->getCodigo()." , "
             . "  ".$reserva->getMaterial()->getCodigo()." , "
             . "  '".$reserva->getQtdMaterial()."' , "
             . "  '".$reserva->getDataInicial()."' , "
             . "  '".$reserva->getDataFinal()."' "
             . " );";
                
            $idReserva = Conexao::executar($sql);  
            return $idReserva;
    }
    
    public static function editar ($reserva){
        $sql = " UPDATE reservas SET "
             . " codSala  = ".$reserva->getSala()->getCodigo()." , "
             . " codMaterial  = ".$reserva->getMaterial()->getCodigo()." , "
             . " qtdMaterial  = '".$reserva->getQtdMaterial()."' , "
             . " dataInicial  = '".$reserva->getDataInicial()."' , "
             . " dataFinal  = '".$reserva->getDataFinal();
        
        Conexao::executar($sql);
    }
    
    public static function excluir ($reserva){
        $sql = " DELETE FROM reservas WHERE id =".$reserva->getCodigo();
        Conexao::executar($sql);
    }
    
}

