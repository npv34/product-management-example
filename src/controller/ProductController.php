<?php

namespace Controller;
use Database\DBConnect;
use Model\ProductDB;

class ProductController
{
    private $productDB;
    public function __construct()
    {
        $database = new DBConnect("mysql:host=localhost;dbname=product_manangerment", "root", "123456@Abc");
        $this->productDB = new ProductDB($database->connect());
    }

    public function index()
    {
    }

}