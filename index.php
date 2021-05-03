<?php session_start(); ?>
<?php
require("classes/productsview.class.php");


?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Product listing page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
  <div class="row align-items-center">
<form method="POST" action="delete.php">
  <h1 class="col-8">Product Listing page</h1>
  <?php    
  if(isset($_SESSION['status'])){
    echo "<h4>".$_SESSION['status']."</h4>";
    unset($_SESSION['status']);
  }
  ?>
  <div class="col-4">
  <button type="submit" name="mass_delete" id="mass-delete" class="btn btn-warning">Mass delete</button>
    <a class="btn btn-primary" href="add.php">Add</a>
    
  </div>
  </div>
  <hr>
<div class="main-container d-flex flex-wrap">
<?php

$productList = new ProductsView();
$productList -> showProductsDvd();
$productList -> showProductsBook();
$productList -> showProductsFurn();


?>
</form>
</div>



  </body>
</html>