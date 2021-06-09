<?php
require("products.php");


abstract class ProductsView extends Products {
   
    public $baseprop1 = 'id';
    public $baseprop2 = 'sku';
    public $baseprop3 = 'name';
    public $baseprop4 = 'price';
   
    abstract function showProduct();
}

class ProductDvd extends ProductsView{
        
    function showProduct(){
        $property = 'size';   
        $type = 'DVD';
        $results = $this->getProduct($this->baseprop1, $this->baseprop2, $this->baseprop3, $this->baseprop4, $property, $type);
        return $results;
    }
}

class ProductBook extends ProductsView{
   
    function showProduct() {
        $property = 'weight';
        $type = 'book';
        $results = $this->getProduct($this->baseprop1, $this->baseprop2, $this->baseprop3, $this->baseprop4, $property, $type);
        return $results;
    }
}

class ProductFurniture extends ProductsView{
    
    function showProduct() {
        $property = 'height, width, length';
        $type = 'furniture';
        $results = $this->getProduct($this->baseprop1, $this->baseprop2, $this->baseprop3, $this->baseprop4, $property, $type);
        return $results;
    }
}