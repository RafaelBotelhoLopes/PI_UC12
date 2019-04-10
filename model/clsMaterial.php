<?php

class Material{
    private $codigo;
    private $nome;
    private $quantidadeEstoque;
    
    function __construct($codigo = NULL, $nome = NULL, $quantidadeEstoque = NULL) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->quantidadeEstoque = $quantidadeEstoque;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getNome() {
        return $this->nome;
    }

    function getQuantidadeEstoque() {
        return $this->quantidadeEstoque;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setQuantidadeEstoque($quantidadeEstoque) {
        $this->quantidadeEstoque = $quantidadeEstoque;
    }

}
