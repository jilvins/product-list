<?php 
session_start();
$con = mysqli_connect("localhost", "root", "", "productlist");
require("components/db.php");

if(isset($_POST['mass_delete'])){
    $all_id = $_POST["deleteid"];
    $extract_id = implode(',' , $all_id);

    $query = "DELETE FROM products WHERE id IN($extract_id)";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['status'] = "Data deleted";
        header('location: index.php');
    }else{
        $_SESSION['status'] = "not deleted";
        header('location: index.php');
    }
    }



?>