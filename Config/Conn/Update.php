<?php

namespace Config\Conn;

use PDO;
use PDOException;
use PDOStatement;

class Update
{

    /** Atributos da classe */
    private $Table;
    private $Data;
    private $Terms;
    private $Places;
    private $Result;

    /** @var PDOStatement */
    private $Update;

    /** @var PDO */
    private $Conn;

    /**** PUBLIC METHODS ****/

    public function __construct()
    {
        $this->Conn = Conn::getConn();
    }

    public function goUpdate($Table, array $Data, $Terms, $Places)
    {
        $this->Table = (string) $Table;
        $this->Data = $Data;
        $this->Terms = (string) $Terms;
        parse_str($Places, $this->Places);

        $this->getSyntax();
        $this->Run();
    }

    public function getResult()
    {
        return $this->Result;
    }

    public function getRowCount()
    {
        return $this->Update->rowCount();
    }

    /**** PRIVATE METHODS ****/

    private function getSyntax()
    {
        foreach ($this->Data as $Key => $Values) {
            $Places[] = $Key . " = :" . $Key;
        }

        $Places = implode(", ", $Places);
        $this->Update = "UPDATE {$this->Table} SET {$Places} {$this->Terms}";
    }

    private function Connection()
    {
        $this->Update = $this->Conn->prepare($this->Update);
    }

    private function Run()
    {
        $this->Connection();
        try {
            $this->Update->execute(array_merge($this->Data, $this->Places));
            $this->Result = true;

        } catch (PDOException $e) {
            $this->Result = null;
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
