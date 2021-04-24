<?php
require("components/db.php");

if($_POST){
    $sku = trim($_POST['sku']);
    $name = trim($_POST['name']);
    $price = (float) $_POST['price'];
    $type= trim($_POST['type']);
    $size = (float) $_POST['size'];
    $height = (float) $_POST['height'];
    $width = (float) $_POST['width'];
    $length = (float) $_POST['length'];
    $weight = (float) $_POST['weight'];

    try {
        $sql= "INSERT INTO products(sku, name, price, type, size, height, width, length, weight)
        VALUES(:sku, :name, :price, :type, :size, :height, :width, :length, :weight)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":sku", $sku);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":type", $type);
        $stmt->bindParam(":size", $size);
        $stmt->bindParam(":height", $height);
        $stmt->bindParam(":width", $width);
        $stmt->bindParam(":length", $length);
        $stmt->bindParam(":weight", $weight);
        

        $stmt->execute();
        if($stmt->rowCount()){
            header("Location: add.php?status=created");
            exit();
        }header("Location: add.php?status=fail_create");
        exit();
    } catch (Exception $e) {
        echo "Error " . $e->getMessage();
        exit();
    }
}else{
    header("Location: add.php?status=fail_create");
    exit();
}


?>