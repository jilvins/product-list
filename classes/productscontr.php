<?php
require("products.php");

class ProductsContr extends Products {
    
  
    protected function createDvd($sku, $name, $price, $type, $size){
        $this->setDvd($sku, $name, $price, $type, $size);
    }
    protected function createBook($sku, $name, $price, $type, $weight){
        $this->setBook($sku, $name, $price, $type, $weight);
    }
    protected function createFurniture($sku, $name, $price, $type, $height, $width, $length){
        $this->setFurniture($sku, $name, $price, $type, $height, $width, $length);
    }
    
    protected function deleteProduct($id){
        $this->setDelete($id);
    }
    
}

?>