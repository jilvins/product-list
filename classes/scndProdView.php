<?php
require("products.php");


abstract class ProductsView extends Products {
    function cardBeginning ($sku, $name, $price) {
    return  '<div class="card-body" 
    <h6 class="card-text item2">' . $sku . '</h6>
    <h5 class="card-text item3">'. $name .'</h5>
    <p class="card-text" item4>'. $price . ' $'.'</p>'; }
    function cardEnding($id){
    return '<input type="checkbox" class="item1" name="deleteid[]" id="deleteid" value="' . $id . '">
    </div>'; }
    //abstract function createProductCard($sku, $name, $price, $size, $id);
    abstract function showProduct($type);
}

class ProductDvd extends ProductsView{
    public function createProductCard($sku, $name, $price, $size, $id){
        $card = $this ->cardBeginning ($sku, $name, $price);
        $card .= '<p class="card-text item5">Size: '. $size . ' mb'.'</p>';
        $card .= $this->cardEnding($id);
        echo $card;
    }
    function showProduct($type="DVD"){
        $results = $this->getProducts($type);
        foreach($results as $cat) {$this-> 
        createProductCard($cat['sku'], $cat['name'], $cat['price'], 
        $cat['size'], $cat['id'] ); }
    }
}

class ProductBook extends ProductsView{
    public function createProductCard($sku, $name, $price, $weight, $id){
        $card = $this ->cardBeginning ($sku, $name, $price);
        $card .= '<p class="card-text item5">Weight: '. $weight . ' kg'.'</p>';
        $card .= $this->cardEnding($id);
        echo $card;
    }
    function showProduct($type="book") {
        $results = $this->getProducts($type);
        foreach($results as $cat) {$this-> 
            createProductCard($cat['sku'], $cat['name'], 
            $cat['price'], $cat['weight'], $cat['id'] ); }
        }
    }


class ProductFurniture extends ProductsView{
    public function createProductCard($sku, $name, $price, $length, $width, $height, $id){
        $card = $this ->cardBeginning ($sku, $name, $price);
        $card .= '<p class="card-text item5">Dimension: '. $length.'x'.$width.'x'.$height . ' cm'.'</p>';
        $card .= $this->cardEnding($id);
        echo $card;
    }
    function showProduct($type="furniture") {
        $results = $this->getProducts($type);
        foreach($results as $cat) {$this-> 
            createProductCard($cat['sku'], $cat['name'], 
            $cat['price'], $cat['length'], $cat['width'], $cat['height'], $cat['id'] ); }
        }
    }
