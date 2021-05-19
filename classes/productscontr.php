<?php
require("products.php");

class ProductsContr extends Products {
  
    protected function createProduct($sku, $name, $price, $type, $size, $height, $width, $length, $weight){
        $this->setProduct($sku, $name, $price, $type, $size, $height, $width, $length, $weight);
    }
    protected function deleteProduct($id){
        $this->setDelete($id);
    }
    
}

?>