<?php

/**
 * Description of clsConexao
 *
 * @author assparremberger
 * 25/10/2018
 */
class Conexao {

//    private static function abrir() {
//        $banco = "m171_04_projeto_integrador_prime";
//        $local = "localhost";
//        $usuario = "root";
//        $senha = "";
//
//        $conn = mysqli_connect($local, $usuario, $senha, $banco);
//
//        if ($conn) {
//            return $conn;
//        } else {
//            return NULL;
//        }
//    }
//    private static function abrir() {
//        $banco = "id16819099_projetoalugaja";
//        $local = "localhost";
//        $usuario = "id16819099_anaalugaja";
//        $senha = "A246890zH6q8n0c$";
//
//        $conn = mysqli_connect($local, $usuario, $senha, $banco);
//
//        if ($conn) {
//            return $conn;
//        } else {
//            return NULL;
//        }
//    }
//    private static function abrir() {
//        $banco = "id16807126_alugajaam";
//        $local = "localhost";
//        $usuario = "id16807126_alugaja";
//        $senha = "A246890zH6q8n0c$";
//        //analu270397
//
//        $conn = mysqli_connect($local, $usuario, $senha, $banco);
//
//        if ($conn) {
//            return $conn;
//        } else {
//            return NULL;
//        }
//    }
//
    //PARA O HEROKU
    private static function abrir() {
        $banco = "WBny00evef";
        $local = "remotemysql.com";
        $usuario = "WBny00evef";
        $senha = "IvghJRcWAv";

        $conn = mysqli_connect($local, $usuario, $senha, $banco);

        if ($conn) {
            return $conn;
        } else {
            return NULL;
        }
    }

    private static function fechar($conn) {
        mysqli_close($conn);
    }

    public static function executar($sql) {
        $conn = self::abrir();
        if ($conn) {
            mysqli_query($conn, $sql);
            self::fechar($conn);
        }
    }

    public static function executarComRetornoId($sql) {
        $conn = self::abrir();
        $id = 0;
        if ($conn) {
            mysqli_query($conn, $sql);
            $id = mysqli_insert_id($conn);
            self::fechar($conn);
        }
        return $id;
    }

    public static function consultar($sql) {
        $conn = self::abrir();
        if ($conn) {
            $result = mysqli_query($conn, $sql);
            self::fechar($conn);
            return $result;
        } else {
            return NULL;
        }
    }

}
