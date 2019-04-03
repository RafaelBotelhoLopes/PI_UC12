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
    
    public static function getDatas ($dataInicial, $dataFinal){
        $sql = " SELECT dataInicial, dataFinal FROM reservas "
                . "WHERE dataInicial =".$dataInicial." ,"
                . " dataFinal=".$dataFinal;
        Conexao::executar($sql);
    }
    
    public static function getReservas (){
        $sql = " SELECT r.codigo, r.qtdMaterial, r.dataInicial, r.dataFinal, u.codigo, u.nomeCompleto, s.codigo, s.numero, m.codigo, m.nome "
             . " FROM reservas r "
             . " INNER JOIN usuarios u ON r.codUsuario = u.codigo "
             . " INNER JOIN salas s ON r.codSala = s.codigo "
             . " INNER JOIN materiais m ON r.codMaterial = m.codigo "
             . " ORDER BY r.dataInicial ";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        
        while (list( $cod, $qtdM, $dataI, $dataF, $codU, $nomeU, $codS, $numS, $codM, $nomeM ) = mysqli_fetch_row($result)){
            $material = new Material();
            $material->setCodigo($codM);
            $material->setNome($nomeM);
            
            $sala = new Sala();
            $sala->setCodigo($codS);
            $sala->setNumero($numS);
            
            $usuario = new Usuario();
            $usuario->setCodigo($codU);
            $usuario->setNome($nomeU);
            
            $reserva = new Reserva();
            $reserva->setCodigo($cod);
            $reserva->setQtdMaterial($qtdM);
            $reserva->setDataInicial($dataI);
            $reserva->setDataFinal($dataF);
            $reserva->setCodUsuario($usuario);
            $reserva->setCodMaterial($material);
            $reserva->setCodSala($sala);
            
            $lista->append($reserva);
            
        }
        return $lista;
    }
    
}

