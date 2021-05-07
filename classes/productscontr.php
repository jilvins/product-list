<?php
require("products.php");

class ProductsContr extends Products {
    
    public function createProduct($sku, $name, $price, $type, $size, $height, $width, $length, $weight){
        $this->setProduct($sku, $name, $price, $type, $size, $height, $width, $length, $weight);
    }
    public function deleteProduct($id){
        $this->setDelete($id);
    }
    
}

?>