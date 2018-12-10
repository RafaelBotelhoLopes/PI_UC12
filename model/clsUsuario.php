<?php


class Cliente {
    private $codigo, $nomeCompleto, $nomeUsuario,
            $email,  $senha,  $admin;
    
    function __construct($codigo = NULL, $nomeCompleto = NULL, $nomeUsuario = NULL, $email = NULL, $senha = NULL, $admin = NULL) {
        
        $this->codigo = $codigo;
        $this->nomeCompleto = $nomeCompleto;
        $this->nomeUsuario = $nomeUsuario;
        $this->email = $email;
        $this->senha = $senha;
        $this->admin = $admin;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getNomeCompleto() {
        return $this->nomeCompleto;
    }

    function getNomeUsuario() {
        return $this->nomeUsuario;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getAdmin() {
        return $this->admin;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNomeCompleto($nomeCompleto) {
        $this->nomeCompleto = $nomeCompleto;
    }

    function setNomeUsuario($nomeUsuario) {
        $this->nomeUsuario = $nomeUsuario;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setAdmin($admin) {
        $this->admin = $admin;
    }

}