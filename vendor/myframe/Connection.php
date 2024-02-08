<?php

namespace vendor\myframe;

use PDO;

class Connection
{
    private $conn;

    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $name = 'magazin';

    // The db connection is established in the private constructor.
    public function __construct()
    {
        $this->conn = new PDO("mysql:host={$this->host};
    dbname={$this->name}", $this->user,$this->pass,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }
    public function getConnection()
    {
        return $this->conn;
    }
}
