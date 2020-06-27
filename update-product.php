<?php
require "includes/core.php";
?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Product editor</h2>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card planned_task">
                    <div class="body">
                      <?php
                        if(isset($_POST['action'])) {
                          $identification = $_POST['id'];
                          $sql = "SELECT * FROM `core_web_shop` WHERE `id` = $identification";
                          $result = mysqli_query($db, $sql);

                          $data = mysqli_fetch_assoc($result);

                          $name         = $data['name'];
                          $description  = $data['description'];
                          $type         = $data['type'];
                          $price        = $data['price'];
                          $command      = $data['command'];
                          $displaypic   = $data['displaypic'];
                          $permission   = $data['permission'];
                          $displayed    = $data['displayed'];

                        }
                      ?>
                      <form method="post" name="ufid_catalogue" id="ufid_catalogue" action="handler/new-product.php" autocomplete="off">
                        <!-- Form identification -->
                        <input type="hidden" name="form_name" id="form_name" value="ufid_catalogue">
                        <input type="hidden" name="action" value="edit">
                        <input type="hidden" name="id" value="<?php echo $identification ?>">
                        <div class="body">

                            <div class="form-group">
                              <label>Product</label>
                              <input class="form-control" type="text" name="name" value="<? echo $name; ?>" placeholder="Tatsumaki roll" maxlength="50">
                            </div>
                            <div class="form-group">
                              <label>Description</label>
                              <textarea class="form-control" name="description"><? echo $description; ?></textarea>
                            </div>
                            <div class="form-group">
                              <label>Category</label>
                              <select class="form-control" name="type">
                                <optgroup label="Currently selected">
                                  <option value="<? echo $type ?>"><? echo ucfirst($type); ?></option>
                                </optgroup>
                                <optgroup label="Available options">
                                  <option value="clothing">Clothing</option>
                                  <option value="food">Food</option>
                                  <option value="beverages">Beverages</option>
                                  <option value="seeds">Seeds</option>
                                  <option value="blocks">Blocks</option>
                                  <option value="seasonal">Seasonal</option>
                                  <option value="limited">Limited edition</option>
                                  <option value="bilderberg">Club Bilderberg</option>
                                </optgroup>
                              </select>
                            <div class="form-group">
                              <label>Price</label>
                              <input class="form-control" type="number" name="price" value="<? echo $price; ?>" placeholder="100" maxlength="10">
                            </div>
                            <div class="form-group">
                              <label>Send command</label>
                              <input class="form-control" type="text" name="command" value="<? echo $command; ?>" placeholder="" maxlength="120">
                            </div>
                            <div class="form-group">
                              <label>Picture</label>
                              <div class="form-group">
                                <input class="form-control" type="text" name="displaypic" value="<? echo $displaypic; ?>" placeholder="" maxlength="120">
                              </div>
                            </div>
                            <div class="form-group">
                              <label>Type</label>
                              <select class="form-control" name="permission">
                                <?
                                switch ($permission) {
                                  case '0':
                                    $permission_text = 'Everyona can get it';
                                    break;
                                  case '1':
                                    $permission_text = 'Premium only';
                                    break;
                                }
                                ?>
                                <optgroup label="Currently selected">
                                  <option value="<? echo $permission ?>"><? echo $permission_text; ?></option>
                                </optgroup>
                                <optgroup label="Available options">
                                  <option value="0">Everyona can get it</option>
                                  <option value="1">Premium only</option>
                                </optgroup>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Displayed</label>
                              <select class="form-control" name="displayed">
                                <?
                                switch ($displayed) {
                                  case '0':
                                    $displayed_text = 'Hidden';
                                    break;
                                  case '1':
                                    $displayed_text = 'Displayed';
                                    break;
                                }
                                ?>
                                <optgroup label="Currently selected">
                                  <option value="<? echo $displayed ?>"><? echo $displayed_text; ?></option>
                                </optgroup>
                                <optgroup label="Available options">
                                  <option value="0">Hidden</option>
                                  <option value="1">Displayed</option>
                                </optgroup>
                              </select>
                            </div>
                            <div class="btn-group">
                              <button class="btn btn-success" type="submit" name="submit">Update</button>
                              <button class="btn btn-warning" type="reset" name="submit">Reset</button>
                            </div>
                          </div>

                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                      </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>
</body>
</html>
