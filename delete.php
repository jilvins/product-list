<?php 
session_start();
require("classes/productscontr.php");

if(isset($_POST['mass_delete'])){
    $all_id = $_POST["deleteid"];
    $extract_id = implode(',' , $all_id);

    $deleteProduct = new ProductsContr();
    $deleteProduct -> deleteProduct($extract_id);

    if($deleteProduct){
        $_SESSION['status'] = "Data deleted";
        header('location: index.php');
    }else{
        $_SESSION['status'] = "not deleted";
        header('location: index.php');
    }
    }



?>