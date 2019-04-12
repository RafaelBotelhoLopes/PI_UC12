<?php

class Sala{
    private $codigo;
    private $numero, $descricao;
    
    function __construct($codigo = NULL, $numero = NULL, $descricao = NULL) {
        $this->codigo = $codigo;
        $this->numero = $numero;
        $this->descricao = $descricao;
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
    function getDescricao() {
        return $this->descricao;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    
}