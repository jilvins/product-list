<?php
/*
abstract class Product {
    public $sku;
    public $name;
    public $price;
    public $type;

    public function __construct($sku, $name, $price, $type){
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;  
    }
    abstract public function showProduct($results);
}
class ProductDvd extends Product {
    public $size;
    public function __construct($sku, $name, $price, $type, $size){
        parent::__construct($sku, $name, $price, $type);
        $this->size = $size;
    }
    public function showProduct($results){
        return $results;
    }
}
class ProductBook extends Product {
    public $weight;
    public function __construct($sku, $name, $price, $type, $weight){
        parent::__construct($sku, $name, $price, $type);
        $this->weight = $weight;
    }
    public function showProduct($results){
        return $results;
    }
}
class ProductFurniture extends Product {
    public $width;
    public $height;
    public $length;
    public function __construct($sku, $name, $price, $type, $width, $height, $length){
        parent::__construct($sku, $name, $price, $type);
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
    }
    public function showProduct($results){
        return $results;
    }
}
*/