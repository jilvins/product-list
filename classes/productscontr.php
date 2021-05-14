<?php
require("products.php");

class ProductsContr extends Products {
  /*  private $sku;
    private $name;
    private $price;
    private $type;
    private $size;
    private $height;
    private $width;
    private $length;
    private $weight;

    public function __construct($sku, $name, $price, $type, $size, $height, $width, $length, $weight){
    $this->sku = $sku;
    $this->name = $name;
    $this->price = $price;
    $this->type = $type;
    $this->size = $size;
    $this->height = $height;
    $this->width = $width;
    $this->length = $length;
    $this->weight = $weight;
        
    }

    public function __set($property1, $value1, $property2, $value2){
        if(property_exists($this, $property1))
        $this->property1 = $value1;
    
    
}
    */
    public function createProduct($sku, $name, $price, $type, $size, $height, $width, $length, $weight){
        $this->setProduct($sku, $name, $price, $type, $size, $height, $width, $length, $weight);
    }
    public function deleteProduct($id){
        $this->setDelete($id);
    }
    
}

?>