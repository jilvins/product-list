<?php session_start(); ?>
<?php require("components/db.php") ;?>

<?php

class Product{
  
   
    function ShowBook(){
        $DSN = 'mysql:host=localhost;dbname=productlist';
        $ConnectingDB = new PDO($DSN, 'root', '');
        $sql = "SELECT * FROM products  WHERE type='book'";
        $result = $ConnectingDB->query($sql);
        
         
         foreach($result as $product){
            $prod1['id']= $product['id'] . PHP_EOL;
            $prod1['sku']= $product['sku'] . PHP_EOL;
            $prod1['name']= $product['name'] . PHP_EOL;
            $prod1['price']= $product['price']  . PHP_EOL;
            $prod1['weight']= $product['weight']  . PHP_EOL;
            return $prod1;
    }}
    function ShowDvd(){
      
      $DSN = 'mysql:host=localhost;dbname=productlist';
      $ConnectingDB = new PDO($DSN, 'root', '');
        $sql = "SELECT * FROM products  WHERE type='dvd'";
        $result = $ConnectingDB->prepare($sql);
        $result->execute();
        $fresult = $result->fetchAll();


         foreach($fresult as $product=>$value){
            $prod2['id']= $fresult[$product]['id'] . PHP_EOL;
            $prod2['sku']= $fresult[$product]['sku'] . PHP_EOL;
            $prod2['name']= $fresult[$product]['name'] . PHP_EOL;
            $prod2['price']= $fresult[$product]['price']  . PHP_EOL;
            $prod2['size']= $fresult[$product]['size']  . PHP_EOL;
            return $prod2;
    }}
    function ShowFurn(){
        $DSN = 'mysql:host=localhost;dbname=productlist';
        $ConnectingDB = new PDO($DSN, 'root', '');
        $sql = "SELECT * FROM products  WHERE type='furniture'";
        $result = $ConnectingDB->query($sql);
        
         foreach($result as $product){
            $prod3['id']= $product['id'] . PHP_EOL;
            $prod3['sku']= $product['sku'] . PHP_EOL;
            $prod3['name']= $product['name'] . PHP_EOL;
            $prod3['price']= $product['price']  . PHP_EOL;
            $prod3['width']= $product['width']  . PHP_EOL;
            $prod3['height']= $product['height']  . PHP_EOL;
            $prod3['length']= $product['length']  . PHP_EOL;
            return $prod3;
    }}
    
    
}


//$product1 = new Product();

print_r($product1->ShowDvd()); 

$recBook['book']=$product1->ShowBook();
$recBook['dvd']=$product1->ShowDvd();
$recBook['furniture']=$product1->ShowFurn();



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

        <?php foreach ($recBook as $product) : ?>
  <div class="card" style="width: 18rem">
  <div class="card-body">
    <h5 class="card-title"><?= ("Product SKU number: " .  $product['sku'] )?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= "Product name: " .  $product['name'] ?></h6>
    <p class="card-text"><?= "Price in dollars: " . $product['price'] ?></p>
    <p class="card-text"><?= isset($product['weight']) ?("Weight in kg: " .  $product['weight'] ): null ?></p>
    <p class="card-text"><?= isset($product['size']) ?("Size in mb: " .   $product['size'] ): null ?></p>
    <p class="card-text"><?= isset($product['width']) ?("Width in cm: " .   $product['width'] ): null ?></p>
    <p class="card-text"><?= isset($product['length']) ?("Length in cm: " .   $product['length'] ): null ?></p>
    <p class="card-text"><?= isset($product['height']) ?("Height in cm: " .   $product['height'] ): null ?></p>
    <input type="checkbox" name="deleteid[]" id="deleteid" value="<?= $product['id']; ?>">
  
  </div>
  
</div>

   <?php endforeach ?>
 
   </form>
</div>

<?php include("components/footer.php") ?>


