<?php 
require("classes/prodView.php");
include("components/header.php");
?>


  <div class="">
<form method="POST" action="./prodControl/delete.php">
  <div class="header">
  <h2 class="grid-item1">Product Listing page</h2>
  <button type="submit" name="mass_delete" id="mass-delete" class="btn btn-warning grid-item2">Mass delete</button>
  <a class="btn btn-primary grid-item3" href="add.php">Add</a>
  </div>
  </div>
<div class="main-container-prod">
<?php


$dvd = new ProductDvd();
$proddvd=$dvd->showProduct();
$book = new ProductBook();
$prodbook=$book->showProduct();
$furniture = new ProductFurniture();
$prodfurn=$furniture->showProduct();
$all = [$proddvd, $prodbook, $prodfurn];


foreach($all as $nested) :
  foreach($nested as $product) : ?>
    <div class="card-body" 
    <h6 class="card-text item2"><?php echo  $product["sku"] ?> </h6>
    <h5 class="card-text item3"><?php echo $product["name"] ?></h5>
    <p class="card-text item4"><?php echo $product["price"] . ' $'?></p>
    <p class="card-text item5"><?php if(isset($product["size"])) { echo 'Size: '. $product["size"] . ' mb';}?></p>
    <p class="card-text item5"><?php if(isset($product["weight"])) { echo 'Weight: '. $product["weight"] . ' kg'; } ?></p>
    <p class="card-text item5"><?php if(isset($product["length"])) { echo 'Dimension: '. $product["length"].'x'.$product["width"].'x'.$product["height"] . ' cm';}?></p>

    <input type="checkbox" class="item1" name="deleteid[]" id="deleteid" value="<?php echo $product["id"] ?>">
    </div> 
    <?php endforeach; ?>  
    <?php endforeach; ?> 

 


</div>
</form>

<?php include("components/footer.php") ?>