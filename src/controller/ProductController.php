<?php

namespace Controller;
use Database\DBConnect;
use Model\ProductDB;

class ProductController
{
    private $productDB;
    public function __construct()
    {
        $database = new DBConnect("mysql:host=localhost;dbname=demo-shopping-cart", "root", "123456@Abc");
        $this->productDB = new ProductDB($database->connect());
    }

    public function index()
    {
        $products = $this->productDB->getAll();
        include "src/view/list.php";
    }

    public function add(){}

    public function edit(){}

    public function delete(){}

}