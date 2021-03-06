<?php

class Reserva {
    private $codigo;
    private $codUsuario;
    private $codSala;
    private $codMaterial;
    private $qtdMaterial;
    private $dataInicial;
    private $dataFinal;
    private $status;
    
    function __construct($codigo = NULL, $codUsuario = NULL, $codSala = NULL, $codMaterial = NULL, $qtdMaterial = NULL, $dataInicial = NULL, $dataFinal = NULL, $status = NULL) {
        $this->codigo = $codigo;
        $this->codUsuario = $codUsuario;
        $this->codSala = $codSala;
        $this->codMaterial = $codMaterial;
        $this->qtdMaterial = $qtdMaterial;
        $this->dataInicial = $dataInicial;
        $this->dataFinal = $dataFinal;
        $this->status = $status;
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

    function getQuantidadeMaterial() {
        return $this->qtdMaterial;
    }

    function getDataInicial() {
        return $this->dataInicial;
    }

    function getDataFinal() {
        return $this->dataFinal;
    }
    function getStatus(){
        return $this->status;
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

    function setQuantidadeMaterial($qtdMaterial) {
        $this->qtdMaterial = $qtdMaterial;
    }

    function setDataInicial($dataInicial) {
        $this->dataInicial = $dataInicial;
    }

    function setDataFinal($dataFinal) {
        $this->dataFinal = $dataFinal;
    }
    function setStatus($status) {
        $this->status = $status;
    }

}
