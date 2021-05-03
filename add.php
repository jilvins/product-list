<?php include("components/header.php")?>
<?php
require("classes/productscontr.class.php");



?>
<a href="index.php" class="btn btn-primary">Back</a>
  <button type="submit" class="btn btn-success">Submit</button>
  <div class="main-container">
  
      <?php if (isset($_GET['status']) && $_GET['status'] === "created") : ?>
      <p>"Product has been added"</p>
      <?php endif ?>
      <?php if (isset($_GET['status']) && $_GET['status'] === "fail_create") : ?>
      <p>"Product was not added"</p>
      <?php endif ?>
      <div class="product-form border-danger">
          <div class="form-header">
              <strong><i class="fa fa-plus"></i>Add new Product</strong>
          </div>
          <div class="form-body">
              <form action="newproduct.php" method="post">
                <div class="">
                    <div class="d-flex flex-row">
                        <label for="sku" class="">SKU</label>
                        <input type="text" class="" id="sku" name="sku" 
                        placeholder="enter sku" required>
                    </div>
                    <div class="d-flex flex-row">
                        <label for="name" class="">Name</label>
                        <input type="text" class="" id="name" name="name" 
                        placeholder="enter name" required>
                    </div>
                    <div class="d-flex flex-row">
                        <label for="price" class="">Price</label>
                        <input type="text" class="" id="price" name="price" 
                        placeholder="enter price" required>
                    </div>
                    <div class="d-flex flex-row">
                        <label for="type" class="">Type switcher</label>
                        <select  class="" id="type" name="type">
                        <option value="">Choose type</option>
                        <option value="DVD">DVD</option>
                        <option value="book">Book</option>
                        <option value="furniture">Furniture</option>
                        </select>
                    </div>
                    <div class="DVD form-control" id="DVD">
                    <div class="switchable">
                        <label for="size" class="">Size (MB)</label>
                        <input type="text" class="DVD form-control" id="size" name="size">
                    </div>
                    </div>
                    <br>
                    <div class="furniture form-control" id="furniture">
                    <div class="switchable">
                        <label for="height" class="">Height (CM)</label>
                        <input type="text" class="furniture form-control" id="height" name="height">
                    </div>
                    <div class="switchable">
                        <label for="width" class="">Width (CM)</label>
                        <input type="text" class="furniture form-control" id="width" name="width">
                    </div>
                    <div class="switchable">
                        <label for="length" class="">Length (CM)</label>
                        <input type="text" class="furniture form-control" id="length" name="length">
                    </div>
                    </div>
                    <br>
                    <div class="book form-control" id="book">
                    <div class="switchable">
                        <label for="weight" class="">Weight (KG)</label>
                        <input type="text" class="book form-control" id="weight" name="weight">
                    </div>
                    </div>

                </div>
                
              </form>
          </div>
      </div>
  </div>

<?php include("components/footer.php") ?>