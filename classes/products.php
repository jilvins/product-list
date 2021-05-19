<?php
require("db.php");

class Products extends Db {
    protected function getProducts($type){
        $sql = "SELECT * FROM products WHERE type = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$type]);

        $results = $stmt->fetchAll();
        return $results;
    }
    
    protected function setProduct($sku, $name, $price, $type, $size, $height, $width, $length, $weight){
        $sql = "INSERT INTO products(sku, name, price, type, size, height, width, length, weight) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $Execute = $stmt->execute([$sku, $name, $price, $type, $size, $height, $width, $length, $weight]);
        return $Execute;
    }

    protected function setDelete($id){
        $sql = "DELETE FROM products WHERE id IN($id)";
        $stmt = $this->connect()->prepare($sql);
        $Execute = $stmt->execute([$id]);
        return $Execute;
    }
}

?>