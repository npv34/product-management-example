<?php

namespace Database;

use PDO;

class DBConnect
{
    private $conn;
    private $username;
    private $password;
    private $dsn;

    public function __construct($dsn, $username, $password)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect()
    {
        try {
            $this->conn = new PDO($this->dsn, $this->username, $this->password);
            return $this->conn;
        } catch (\PDOException $exception) {
             echo $exception->getMessage();
             die();
        }
    }
}