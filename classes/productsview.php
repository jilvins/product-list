<?php
require("products.php");


class ProductsView extends Products {
    
    public function showProductsDvd($type='DVD'){
        $results = $this->getProducts($type);
        foreach($results as $sel) {
        echo '<div class="card-body" ';
        echo '<h6 class="card-text item2">' . $sel['sku'] . '</h6>';
        echo '<h5 class="card-text item3">'. $sel['name'].'</h5>';
        echo '<p class="card-text" item4>'. $sel['price']. ' $'.'</p>';
        echo '<p class="card-text item5">Size: '. $sel['size'] . ' mb'.'</p>';
        echo '<input type="checkbox" class="item1" name="deleteid[]" id="deleteid" value="' .$sel['id'] . '">';
        echo '</div>';
        }
    }
    public function showProductsBook($type='book'){
        $results = $this->getProducts($type);
        foreach($results as $sel) {
        echo '<div class="card-body " ';
        echo '<h6 class="card-text item2">' . $sel['sku'] . '</h6>';
        echo '<h5 class="card-text item3">'. $sel['name'].'</h5>';
        echo '<p class="card-text item4">'. $sel['price']. ' $'.'</p>';
        echo '<p class="card-text item5">Weight: '. $sel['weight'] . ' kg'.'</p>';
        echo '<input type="checkbox" class="item1" name="deleteid[]" id="deleteid" value="' .$sel['id'] . '">';
        echo '</div>';
        }
    }
    public function showProductsFurn($type='furniture'){
        $results = $this->getProducts($type);
        foreach($results as $sel) {
        echo '<div class="card-body" ';
        echo '<h6 class="card-text item2">' . $sel['sku'] . '</h6>';
        echo '<h5 class="card-text item3">'. $sel['name'].'</h5>';
        echo '<p class="card-text item4">'. $sel['price']. ' $'.'</p>';
        echo '<p class="card-text item5">Dimension: '. $sel['length'].'x'.$sel['width'].'x'.$sel['height'] . ' cm'.'</p>';
        echo '<input type="checkbox" class="item1" name="deleteid[]" id="deleteid" value="' .$sel['id'] . '">';
        echo '</div>';
        }
    }
}

?>