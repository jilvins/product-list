<?php
require("db.php");

class Products extends Db {
    protected function getBaseProducts(){
        $sql = "SELECT id, sku, name, price FROM products";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }
   
    protected function getProduct($baseprop1, $baseprop2, $baseprop3, $baseprop4, $property, $type){
        $sql = "SELECT $baseprop1, $baseprop2, $baseprop3, $baseprop4, $property FROM products WHERE type ='$type' ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function getProperties($prop){
        $sql = "SELECT $prop FROM products";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }
  
    protected function setDvd($sku, $name, $price, $type, $size){
        $sql = "INSERT products(sku, name, price, type, size) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $Execute = $stmt->execute([$sku, $name, $price, $type, $size]);
        return $Execute;
    }

    protected function setBook($sku, $name, $price, $type, $weight){
        $sql = "INSERT products(sku, name, price, type, weight) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $Execute = $stmt->execute([$sku, $name, $price, $type, $weight]);
        return $Execute;
    }

    protected function setFurniture($sku, $name, $price, $type, $height, $width, $length){
        $sql = "INSERT products(sku, name, price, type, height, width, length) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $Execute = $stmt->execute([$sku, $name, $price, $type, $height, $width, $length,]);
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