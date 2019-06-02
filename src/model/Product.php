<?php
namespace Model;

class Product
{
    private $id;
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}