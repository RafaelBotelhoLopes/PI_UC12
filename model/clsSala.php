<?php

class Sala{
    private $codigo;
    private $numero;
    
    function __construct($codigo, $numero) {
        $this->codigo = $codigo;
        $this->numero = $numero;
    }
    
    function getCodigo() {
        return $this->codigo;
    }

    function getNumero() {
        return $this->numero;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

}