<?php

namespace Config\Conn;

use PDO;
use PDOException;

class Conn
{
    /** atributos da classe de conexão */
    // private static $host   = "localhost";
    // private static $user   = "root";
    // private static $pass   = "";
    // private static $dbName = "study_pdo_singleton";

    /** @var PDO */
    private static $Connection = null;
    /**
     * Metodo de Conexão que retorna uma conexão PDO com Singleton Pattern.
     *
     * @return PDO Singleton Pattern
     */
    private static function theConn()
    {
        try {

            if (self::$Connection == null) {

                /** Configuration */
                $dsn = "mysql:dbname=" . DBNAME . ";host=" . HOST;
                $options = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"];

                /** Connection */
                self::$Connection = new PDO($dsn, USER, PASS, $options);

                /** Error Handling */
                self::$Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        } catch (PDOException $e) {
            echo "
                <div style='color: #fcb8b8; background: #d12121; border:1px solid #7C1515; padding: 10px; font-family: Calibri, sans-serif; border-radius: 5px;'>
                    <strong style='color: #ffffff'>Erro:</strong> {$e->getMessage()}<br>
                    <strong style='color: #ffffff'>Arquivo:</strong> {$e->getFile()}<br>
                    <strong style='color: #ffffff'>Linha:</strong> {$e->getLine()}<br>
                    <strong style='color: #ffffff'>Código:</strong> {$e->getCode()}
                </div>    
            ";
            die;
        }

        return self::$Connection;
    }

    /**
     * Método que retorna o Metodo theConn - conexão PDO Singlton Pattern
     *
     * @return theConn
     */
    public static function getConn()
    {
        return self::theConn();
    }
}
