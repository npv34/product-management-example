<?php
namespace Model;

class Product
{
    public $id;
    public $name;
    public $image;
    public $price;
    public $priceOld;

    public function __construct($name, $image, $price, $priceOld)
    {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->priceOld = $priceOld;
    }
}