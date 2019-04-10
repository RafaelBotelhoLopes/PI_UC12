<?php


class Usuario {
    private $id, $nomeCompleto, $nomeUsuario,
            $email,  $senha,  $admin;
    
    function __construct($codigo = NULL, $nomeCompleto = NULL, $nomeUsuario = NULL, $email = NULL, $senha = NULL, $admin = 0) {
        
        $this->id = $codigo;
        $this->nomeCompleto = $nomeCompleto;
        $this->nomeUsuario = $nomeUsuario;
        $this->email = $email;
        $this->senha = $senha;
        $this->admin = $admin;
    }

    function getId() {
        return $this->id;
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

    function setId($codigo) {
        $this->id = $codigo;
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