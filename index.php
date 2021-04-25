<?php session_start(); ?>
<?php require("components/db.php") ;

try{
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

}catch(Exception $e){
    echo "Error " . $e->getMessage();
    exit();
}
?>

<?php include("components/header.php") ?>
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
    <?php if ($result->rowCount()>0) : ?>
        <?php foreach ($result as $product) : ?>
  <div class="card" style="width: 18rem">
  <div class="card-body">
    <h5 class="card-title"><?= $product['sku'] ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $product['name'] ?></h6>
    <p class="card-text"><?= $product['price'] ?></p>
    <p class="card-text"><?= $product['type'] ?></p>
    <input type="checkbox" name="deleteid[]" id="deleteid" value="<?= $product['id']; ?>">
  </div>
  
</div>

   <?php endforeach ?>
<?php endif ?>
</form>
</div>

<?php include("components/footer.php") ?>

    