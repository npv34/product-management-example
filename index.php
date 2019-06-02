<?php
require "src/database/DBConnect.php";
require "src/model/Product.php";
require "src/model/ProductDB.php";
require "src/controller/ProductController.php";

use Controller\ProductController;

$controller = new ProductController();

$controller->index();
