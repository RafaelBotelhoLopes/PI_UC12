<?php

class UsuarioDAO {

    public static function inserir($usuario) {
        $sql = "INSERT INTO usuarios "
                . " ( nomeCompleto, nomeUsuario, email, senha, "
                . "   admin ) VALUES "
                . " ( '" . $usuario->getNomeCompleto() . "' , "
                . "   '" . $usuario->getNomeUsuario() . "' , "
                . "   '" . $usuario->getEmail() . "' , "
                . "   '" . $usuario->getSenha() . "' , "
                . "    " . $usuario->getAdmin()
                . "  ); ";

        Conexao::executar($sql);
    }

    public static function editar($usuario) {
        $sql = "UPDATE usuarios SET "
                . " nomeCompleto =     '" . $usuario->getNomeCompleto() . "' , "
                . " nomeUsuario = '" . $usuario->getNomeUsuario() . "' , "
                . " email =      '" . $usuario->getEmail() . "' , "
                . " senha =    '" . $usuario->getSenha() . "' , "
                . " admin =    " . $usuario->getAdmin() . "  "
                . " WHERE codigo = " . $usuario->getId();

        Conexao::executar($sql);
    }

    public static function excluir($usuario) {
        $sql = "DELETE FROM usuarios "
                . " WHERE codigo =  " . $usuario->getId();

        Conexao::executar($sql);
    }

    public static function getUsuarios() {
        $sql = " SELECT codigo, nomeCompleto, nomeUsuario, email,"
                . " senha , admin "
                . " FROM usuarios  "
                . " ORDER BY nomeCompleto ";

        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        while (list( $cod, $nomeCompleto, $nomeUsuario, $email, $senha, $admin) = mysqli_fetch_row($result)) {

            $usuario = new Usuario();
            $usuario->setId($cod);
            $usuario->setNomeCompleto($nomeCompleto);
            $usuario->setNomeUsuario($nomeUsuario);
            $usuario->setEmail($email);
            $usuario->setSenha($senha);
            $usuario->setAdmin($admin);

            $lista->append($usuario);
        }

        return $lista;
    }

    public static function getUsuarioById($codigo) {
        $sql = " SELECT codigo, nomeCompleto, nomeUsuario, "
                . " email, senha, admin "
                . " FROM usuarios "
                . " WHERE codigo = " . $codigo;

        $result = Conexao::consultar($sql);

        list( $cod, $nomeCompleto, $nomeUsuario, $email, $senha, $admin) = mysqli_fetch_row($result);
        $usuario = new Usuario();
        $usuario->setId($cod);
        $usuario->setNomeCompleto($nomeCompleto);
        $usuario->setNomeUsuario($nomeUsuario);
        $usuario->setEmail($email);
        $usuario->setSenha($senha);
        $usuario->setAdmin($admin);

        return $usuario;
    }

    public static function logar($login, $senha) {
        $sql = " SELECT codigo, nomeCompleto, nomeUsuario, email, senha, admin "
                . " FROM usuarios "
                . " WHERE ( nomeUsuario = '" . $login . "' OR email = '" . $login . "')  "
                . "     AND senha = '" . $senha . "'    ";
        $result = Conexao::consultar($sql);

        if (mysqli_num_rows($result) > 0) {
            $dados = mysqli_fetch_assoc($result);
            $usuario = new Usuario();
            $usuario->setId($dados['codigo']);
            $usuario->setNomeCompleto($dados['nomeCompleto']);
            $usuario->setNomeUsuario($dados['nomeUsuario']);
            $usuario->setEmail($dados['email']);
            $usuario->setSenha($dados['senha']);
            $usuario->setAdmin($dados['admin']);
            return $usuario;
        } else {
            return NULL;
        }
    }

}
