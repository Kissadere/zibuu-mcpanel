<?php
require "includes/core.php";
?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Data editor</h2>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card planned_task">
                    <div class="header">
                        <h2>Editing </h2>
                    </div>
                    <div class="body">
                      <?php
                      $mysql_database = 'admin_zibuu';
                      mysqli_select_db($db, $mysql_database) or die('<h1>An unexpected error ocurred while trying to select the database</h1><br>'.mysqli_error($db));
                      mysqli_set_charset($db, 'utf8');

                        if(isset($_POST['action'])) {
                          $identification = $_POST['id'];
                          $sql = "SELECT * FROM `triton_translations` WHERE `id` = $identification";
                          $result = mysqli_query($db, $sql);
                          $data = mysqli_fetch_assoc($result);

                            $type = $data['type'];
                            $prefix = $data['has_prefix'];
                          switch ($type) {
                            case 'text':
                              $type = "TEXT";
                              break;
                          }
                          switch ($prefix) {
                            case '1':
                              $prefix = "ACTIVATED";
                              break;
                            case '0':
                              $prefix = "DISABLED";
                              break;
                          }
                        }
                      ?>
                      <form method="post" name="ufid_translation" id="ufid_translation" action="handler/update-translation.php" enctype="utf-8" autocomplete="off">
                        <!-- Form identification -->
                        <input type="hidden" name="form_name" id="form_name" value="ufid_updatetranslation">
                        <input type="hidden" name="id" value="<?php echo $identification ?>">
                        <div class="body">
                                <div class="form-group">
                                  <label>Message type</label><span class='badge badge-info'><?php echo $type ?></span>
                                  <br />
                                  <label class="fancy-radio">
                                      <input type="radio" name="type" value="text" checked>
                                      <span><i></i>Text</span>
                                  </label>
                                  <label class="fancy-radio">
                                      <input type="radio" name="type" value="sign">
                                      <span><i></i>Sign</span>
                                  </label>
                                </div>
                                <div class="form-group">
                                    <label>Unique key</label>
                                    <input name="key" type="text" class="form-control" value="<? echo $data['variable']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>English</label>
                                    <textarea name="english" class="form-control" rows="5" cols="30" required><? echo $data['english']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Spanish</label>
                                    <textarea name="spanish" class="form-control" rows="5" cols="30" required><? echo $data['spanish']; ?></textarea>
                                </div>
                                <div class="body">
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12">
                                            <label>Translation prefix</label><span class='badge badge-info'><?php echo $prefix ?></span>
                                            <br />
                                            <label class="fancy-radio">
                                                <input type="radio" name="prefix" value="1">
                                                <span><i></i>Yes</span>
                                            </label>
                                            <label class="fancy-radio">
                                                <input type="radio" name="prefix" value="0" checked>
                                                <span><i></i>No</span>
                                            </label>
                                            <br/>
                                            <br/>
                                            <br/>
                                            <div class="btn-group mr-2">
                                            <button type="submit" class="btn btn-success">Update translation</button>
                                            <button type="reset" class="btn btn-warning">Clear form</button>
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
