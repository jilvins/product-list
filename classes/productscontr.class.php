<?php
require("products.class.php");

class ProductsContr extends Products {
    
    public function createProduct($sku, $name, $price, $type, $size, $height, $width, $length, $weight){
        global $Execute;
        $this->setProduct($sku, $name, $price, $type, $size, $height, $width, $length, $weight);
    }
    
}

?>