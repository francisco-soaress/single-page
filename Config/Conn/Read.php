<?php

namespace Config\Conn;

use PDO;
use PDOException;
use PDOStatement;

class Read
{

    /** Atributos privados */
    private $querySelect;
    private $result;

    /** @var PDOStatement */
    private $Read;

    /** @var PDO */
    private $Conn;

    /**** PUBLIC METHODS ****/

    public function __construct()
    {
        $this->Conn = Conn::getConn();
    }

    public function allRead($table, $terms = null)
    {
        $this->querySelect = "SELECT * FROM {$table} {$terms}";
        $this->Run();
    }

    public function getResult()
    {
        return $this->result;
    }

    public function getRowCount()
    {
        $this->Read->rowCount();
    }

    /**** PRIVATE METHODS ****/

    private function Connection()
    {
        $this->Read = $this->Conn->prepare($this->querySelect);
        $this->Read->setFetchMode(PDO::FETCH_ASSOC);
    }

    private function Run()
    {
        $this->Connection();

        try {
            $this->Read->execute();
            $this->result = $this->Read->fetchAll();
        } catch (PDOException $e) {
            $this->result = null;
            echo "
                <div style='color: #FEEAEA; background: #d12121; border:1px solid #7C1515; padding: 10px; font-family: Calibri, sans-serif; border-radius: 5px;'>
                    <strong>Erro:</strong> {$e->getMessage()} |
                    <strong>Arquivo:</strong> {$e->getFile()} |
                    <strong>Linha:</strong> {$e->getLine()} |
                    <strong>Código:</strong> {$e->getCode()}
                </div>    
            ";
        }
    }
}
