<?php session_start(); 
//require("classes/productsview.php");
require("classes/scndProdView.php");
include("components/header.php");
?>


  <div class="">
<form method="POST" action="delete.php">
  <div class="header">
  <h2 class="grid-item1">Product Listing page</h2>
  <button type="submit" name="mass_delete" id="mass-delete" class="btn btn-warning grid-item2">Mass delete</button>
  <a class="btn btn-primary grid-item3" href="add.php">Add</a>
  </div>
  
  <?php    
  if(isset($_SESSION['status'])){
    echo "<h4>".$_SESSION['status']."</h4>";
    unset($_SESSION['status']);
  }
  ?>
 
  </div>
<div class="main-container-prod">
<?php

$dvd = new ProductDvd();
$dvd->showProduct();
$book = new ProductBook();
$book->showProduct();
$furniture = new ProductFurniture();
$furniture->showProduct();
?>
</div>
</form>

<?php include("components/footer.php") ?>