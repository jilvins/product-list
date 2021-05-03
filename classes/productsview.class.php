<?php
require("products.class.php");


class ProductsView extends Products {
    
    public function showProductsDvd($type='DVD'){
        $results = $this->getProducts($type);
        foreach($results as $sel) {
        echo '<div class="card" style="width: 18rem">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $sel['sku'] . '</h5>';
        echo '<h6 class="card-subtitle mb-2 text-muted">'. $sel['name'].'</h6>';
        echo '<p class="card-text">'. $sel['price'].'</p>';
        echo '<p class="card-text">Size: '. $sel['size'] . ' mb'.'</p>';
        echo '<input type="checkbox" name="deleteid[]" id="deleteid" value="' .$sel['id'] . '">';
        echo '</div>';
        echo '</div>';
        }
    }
    public function showProductsBook($type='book'){
        $results = $this->getProducts($type);
        foreach($results as $sel) {
        echo '<div class="card" style="width: 18rem">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $sel['sku'] . '</h5>';
        echo '<h6 class="card-subtitle mb-2 text-muted">'. $sel['name'].'</h6>';
        echo '<p class="card-text">'. $sel['price'].'</p>';
        echo '<p class="card-text">Weight: '. $sel['weight'] . ' kg'.'</p>';
        echo '<input type="checkbox" name="deleteid[]" id="deleteid" value="' .$sel['id'] . '">';
        echo '</div>';
        echo '</div>';
        }
    }
    public function showProductsFurn($type='furniture'){
        $results = $this->getProducts($type);
        foreach($results as $sel) {
        echo '<div class="card" style="width: 18rem">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $sel['sku'] . '</h5>';
        echo '<h6 class="card-subtitle mb-2 text-muted">'. $sel['name'].'</h6>';
        echo '<p class="card-text">'. $sel['price'].'</p>';
        echo '<p class="card-text">Dimension: '. $sel['length'].'x'.$sel['width'].'x'.$sel['height'] . ' cm'.'</p>';
        echo '<input type="checkbox" name="deleteid[]" id="deleteid" value="' .$sel['id'] . '">';
        echo '</div>';
        echo '</div>';
        }
    }
}

?>