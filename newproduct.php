<?php
require("classes/productscontr.class.php");


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
    
        $addProduct = new ProductsContr();
        $addProduct -> createProduct($sku, $name, $price, $type, $size, $height, $width, $length, $weight);
        
        if($testnum=1){
            header("Location:index.php");
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