<?php include("components/header.php") ?>

  <div class="main-container">
      <a href="index.php" class="btn btn-primary">Back</a>
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
                        <input type="text" class="form-control" id="sku" name="sku" 
                        placeholder="enter sku" required>
                    </div>
                    <div class="d-flex flex-row">
                        <label for="name" class="">Name</label>
                        <input type="text" class="form-control" id="name" name="name" 
                        placeholder="enter name" required>
                    </div>
                    <div class="d-flex flex-row">
                        <label for="price" class="">Price</label>
                        <input type="text" class="form-control" id="price" name="price" 
                        placeholder="enter price" required>
                    </div>
                    <div class="d-flex flex-row">
                        <label for="type" class="">Type switcher</label>
                        <select  class="form-control" id="type" name="type">
                        <option value="DVD">DVD</option>
                        <option value="book">Book</option>
                        <option value="furniture">Furniture</option>
                        </select>
                    </div>
                    <div class="d-flex flex-row">
                        <label for="size" class="">Size (MB)</label>
                        <input type="text" class="form-control" id="size" name="size">
                    </div>
                    <br>
                    <div>
                    <div class="d-flex flex-row">
                        <label for="height" class="">Height (CM)</label>
                        <input type="text" class="form-control" id="height" name="height">
                    </div>
                    <div class="d-flex flex-row">
                        <label for="width" class="">Width (CM)</label>
                        <input type="text" class="form-control" id="width" name="width">
                    </div>
                    <div class="d-flex flex-row">
                        <label for="length" class="">Length (CM)</label>
                        <input type="text" class="form-control" id="length" name="length">
                    </div>
                    </div>
                    <br>
                    <div class="d-flex flex-row">
                        <label for="weight" class="">Weight (KG)</label>
                        <input type="text" class="form-control" id="weight" name="weight">
                    </div>

                </div>
                <button type="submit" class="btn btn-success">Submit</button>
              </form>
          </div>
      </div>
  </div>

<?php include("components/footer.php") ?>