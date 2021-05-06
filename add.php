<?php
require("classes/productscontr.class.php");
require("./productvalidator.php");
include("components/header.php");
?>


<?php 

if(isset($_POST["Submit"])){
    $validators = [
        'DVD' => 'DVDValidator',
        'book' => 'BookValidator',
        'furniture' => 'FurnitureValidator',
        '' => 'NoneValidator'
    ];
    $type = filter_input(INPUT_POST, 'type');
    $validatorClass = $validators[$type];
    $validator = new $validatorClass($_POST);
    $errors = $validator->validateForm();
    }
    ?>
<form action="" method="post">
    <div class="header">
<h2>Product Add</h2>
<a href="index.php" class="btn btn-warning">Cancel</a>
  <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
  </div>
  <div class="main-container">
      <div class="product-form border-danger">
          <div class="form-body">
              
                <div class="">
                    <div class="form-group ">
                        <label for="sku" class="">SKU</label>
                        <input type="text" class="form-control" id="sku" name="sku" 
                        placeholder="enter sku" value="<?php echo $_POST['sku'] ?? ''?>">
                        <span><?php echo $errors['sku'] ?? '' ?></span>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="">Name</label>
                        <input type="text" class="form-control" id="name" name="name" 
                        placeholder="enter name" value="<?php echo $_POST['name'] ?? ''?>">
                        <span><?php echo $errors['name'] ?? '' ?></span>
                    </div>
                    <div class="form-group ">
                        <label for="price" class="">Price</label>
                        <input type="text" class="form-control" id="price" name="price" 
                        placeholder="enter price" value="<?php echo $_POST['price'] ?? ''?>">
                        <span><?php echo $errors['price'] ?? '' ?></span>
                    </div>
                    <div class="form-group">
                        <label for="type" class="">Type switcher</label>
                        <select  class="" id="type" name="type">
                        <option value="">Choose type</option>
                        <option value="DVD">DVD</option>
                        <option value="book">Book</option>
                        <option value="furniture">Furniture</option>
                        </select>
                        <span><?php echo $errors['type'] ?? '' ?></span>
                        <span><?php echo $errors['size'] ?? '' ?></span>
                        <span><?php echo $errors['height'] ?? '' ?></span>
                        <span><?php echo $errors['width'] ?? '' ?></span>
                        <span><?php echo $errors['length'] ?? '' ?></span>
                        <span><?php echo $errors['weight'] ?? '' ?></span>
                    </div>
                    <div class="switchable" id="DVD">
                        <label for="size" class="">Size (MB)</label>
                        <input type="text" class="" id="size" name="size">
                        <p>Please, provide size</p>
                        
                    </div>
                   
                    <div class="switchable" id="furniture">
                    
                        <label for="height" class="">Height (CM)</label>
                        <input type="text" class="" id="height" name="height">
                 
                        <label for="width" class="">Width (CM)</label>
                        <input type="text" class="" id="width" name="width">
                  
                        <label for="length" class="">Length (CM)</label>
                        <input type="text" class="" id="length" name="length">
                        <p>Please, provide dimensions</p>
                   
                    </div>
                   
                    <div class="switchable" id="book">
                
                        <label for="weight" class="">Weight (KG)</label>
                        <input type="text" class="" id="weight" name="weight">
                        <p>Please, provide weight</p>
                 
                    </div>

                </div>
                
              </form>
          </div>
      </div>
  </div>



<?php include("components/footer.php") ?>