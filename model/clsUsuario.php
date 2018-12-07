<?php


class Cliente {
    private $id, $nome,  $email,
            $senha,  $foto,  $admin;
    
    function __construct($id = NULL, $nome = NULL,  
            $email = NULL,  $senha = NULL,  
             $foto = NULLs) {
        $this->id = $id;
        $this->nome = $nome;
        
        $this->email = $email;
        
        $this->senha = $senha;
        
        $this->foto = $foto;
        
    }
    
    function getAdmin() {
        return $this->admin;
    }

    function setAdmin($admin) {
        $this->admin = $admin;
    }

        
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    

    function getEmail() {
        return $this->email;
    }

    
    function getSenha() {
        return $this->senha;
    }

    
    
    function getFoto() {
        return $this->foto;
    }

    

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    

    function setEmail($email) {
        $this->email = $email;
    }

    

    function setSenha($senha) {
        $this->senha = $senha;
    }

    

    function setFoto($foto) {
        $this->foto = $foto;
    }

    


    

}











