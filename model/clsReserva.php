<?php

class Reserva {
    private $codigo;
    private $codUsuario;
    private $codSala;
    private $codMaterial;
    private $qtdMaterial;
    private $dataInicial;
    private $dataFinal;
    
    function __construct($codigo = NULL, $codUsuario = NULL, $codSala = NULL, $codMaterial = NULL, $qtdMaterial = NULL, $dataInicial = NULL, $dataFinal = NULL) {
        $this->codigo = $codigo;
        $this->codUsuario = $codUsuario;
        $this->codSala = $codSala;
        $this->codMaterial = $codMaterial;
        $this->qtdMaterial = $qtdMaterial;
        $this->dataInicial = $dataInicial;
        $this->dataFinal = $dataFinal;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getCodUsuario() {
        return $this->codUsuario;
    }

    function getCodSala() {
        return $this->codSala;
    }

    function getCodMaterial() {
        return $this->codMaterial;
    }

    function getQtdMaterial() {
        return $this->qtdMaterial;
    }

    function getDaraInicial() {
        return $this->dataInicial;
    }

    function getDataFinal() {
        return $this->dataFinal;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setCodUsuario($codUsuario) {
        $this->codUsuario = $codUsuario;
    }

    function setCodSala($codSala) {
        $this->codSala = $codSala;
    }

    function setCodMaterial($codMaterial) {
        $this->codMaterial = $codMaterial;
    }

    function setQtdMaterial($qtdMaterial) {
        $this->qtdMaterial = $qtdMaterial;
    }

    function setDataInicial($dataInicial) {
        $this->dataInicial = $dataInicial;
    }

    function setDataFinal($dataFinal) {
        $this->dataFinal = $dataFinal;
    }

}
