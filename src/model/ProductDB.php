<?php
namespace Model;

use Database\DBConnect;
use PDO;

class ProductDB
{
    private $conn;
    public function __construct($connection)
    {
        $this->conn = $connection;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products ORDER BY id DESC ";
        $stmt = $this->conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $result = $stmt->fetchAll();

        $arr = [];

        foreach ($result as $item) {
            $product = new Product($item['name'], $item['image'], $item['price'], $item['price_old']);
            array_push($arr, $product);
        }

        return $arr;

    }

    public function findById($id)
    {
        $sql = "SELECT * FROM products WHERE id = :id";
        $statement = $this->conn->prepare($sql);
        $statement->execute([':id' => $id]);
        return $statement->fetch(\PDO::FETCH_ASSOC);
    }
}