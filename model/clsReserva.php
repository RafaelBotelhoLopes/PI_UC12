<?php

class Reserva {
    private $codigo;
    private $codUsuario;
    private $codSala;
    private $codMaterial;
    private $quantidadeMaterial;
    private $horarioInicio;
    private $horarioFim;
    
    function __construct($codigo, $codUsuario, $codSala, $codMaterial, $quantidadeMaterial, $horarioInicio, $horarioFim) {
        $this->codigo = $codigo;
        $this->codUsuario = $codUsuario;
        $this->codSala = $codSala;
        $this->codMaterial = $codMaterial;
        $this->quantidadeMaterial = $quantidadeMaterial;
        $this->horarioInicio = $horarioInicio;
        $this->horarioFim = $horarioFim;
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
        return $this->quantidadeMaterial;
    }

    function getHorarioInicio() {
        return $this->horarioInicio;
    }

    function getHorarioFim() {
        return $this->horarioFim;
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

    function setQuantidadeMaterial($quantidadeMaterial) {
        $this->quantidadeMaterial = $quantidadeMaterial;
    }

    function setHorarioInicio($horarioInicio) {
        $this->horarioInicio = $horarioInicio;
    }

    function setHorarioFim($horarioFim) {
        $this->horarioFim = $horarioFim;
    }

}
