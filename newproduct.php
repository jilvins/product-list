<?php
require("classes/productscontr.php");
session_start();


if ($_SESSION['session-data']){
    
    $sku = trim($_SESSION['session-data']['sku']);
    $name = trim($_SESSION['session-data']['name']);
    $price = (float) $_SESSION['session-data']['price'];
    $type= trim($_SESSION['session-data']['type']);
    $size = (float) $_SESSION['session-data']['size'];
    $height = (float) $_SESSION['session-data']['height'];
    $width = (float) $_SESSION['session-data']['width'];
    $length = (float) $_SESSION['session-data']['length'];
    $weight = (float) $_SESSION['session-data']['weight'];
      
    try {
    
        $addProduct = new ProductsContr();
        $addProduct -> createProduct($sku, $name, $price, $type, $size, $height, $width, $length, $weight);
        
        if($addProduct){
            header("Location:index.php");
            exit();
        } else {
            header("Location: add.php?status=add_error");
            exit();
        }
    } catch (Exception $e) {
        echo "Error " . $e->getMessage();
        exit();
    }
}else{
    header("Location: add.php?status=no_post");
    exit();
}


?>