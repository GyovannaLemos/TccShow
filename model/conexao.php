<?php

class Conexao
{
    public static $usuario = "root";
    public static $senha = ""; //mudar depois
    public static $connect = null;

    private static function Conectar()
    {
        try {
            if (self::$connect == null) { //
                self::$connect = new PDO(
                    'mysql:host=localhost:3308;dbname=bdTccShow',
                    self::$usuario,
                    self::$senha
                );
            }
        } catch (Exception $ex) {
            echo "Mensagem" . $ex->getMessage();
            die;
        }
        return self::$connect;
    }
    public function getConn()
    {
        return self::Conectar();
    }
}
