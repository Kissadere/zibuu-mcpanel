<?php
require "includes/core.php";
?>

<!-- User list -->
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>Catalogue</h1>
                </div>
                <div class="col-md-6 col-sm-12 text-right hidden-xs">
                    <a href="javascript:void(0);" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ufid_products" title="">New item</a>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                      <br/>
                        <ul class="header-dropdown dropdown">
                            <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom spacing5">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Displayed</th>
                                        <th>Type</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?
                                  $sql        = "SELECT * FROM core_web_shop ORDER BY id DESC";
                                  $result     = mysqli_query($db, $sql);
                                  while($data = mysqli_fetch_assoc($result)) {

                                    // Requesting specific data
                                    $id         = $data['id'];
                                    $category   = $data['type'];
                                    $name       = $data['name'];
                                    $price      = $data['price'];
                                    $displayed  = $data['displayed'];
                                    $type       = $data['permission'];

                                    switch ($displayed) {
                                      case '1':
                                        $displayed_badge = 'success';
                                        $displayed = 'YES';
                                        break;
                                      case '0':
                                        $displayed_badge = 'warning';
                                        $displayed = 'NO';
                                        break;
                                    }

                                    switch ($type) {
                                      case '1':
                                        $type_badge = 'success';
                                        $type = 'PREMIUM';
                                        break;
                                      case '0':
                                        $type_badge = 'info';
                                        $type = 'GLOBAL';
                                        break;
                                    }

                                  ?>
                                    <tr>
                                        <!-- Announcement data -->
                                        <th><? echo $id; ?></th>
                                        <td><? echo strtoupper($category); ?></td>
                                        <td><? echo $name; ?></td>
                                        <td>$ <? echo $price; ?></td>
                                        <td><span class='badge badge-<? echo $displayed_badge; ?>'><? echo $displayed; ?></span></td>
                                        <td><span class='badge badge-<? echo $type_badge; ?>'><? echo $type; ?></span></td>
                                        <!-- Actions -->
                                        <td align="right">
                                          <div class="btn-group mb-3">
                                              <div class="btn-group" role="group">
                                              <form method="post" name="ufid_catalogue" id="ufid_catalogue" action="update-product.php">
                                                <input type="hidden" name="form_name" value="ufid_catalogue">
                                                <input type="hidden" name="action" value="edit">
                                                <input type="hidden" name="id" value="<? echo $id; ?>">
                                                <button type="submit" class="btn btn-info mb-2" title="Edit"><span class="sr-only">Edit</span> <i class="fa fa-pencil"></i></button>
                                              </form>

                                              <form method="post" name="ufid_catalogue" id="ufid_catalogue" action="handler/new-product.php">
                                                <input type="hidden" name="form_name" value="ufid_catalogue">
                                                <input type="hidden" name="action" value="erase">
                                                <input type="hidden" name="id" value="<? echo $id; ?>">
                                                <button type="submit" class="btn btn-warning mb-2" title="Delete"><span class="sr-only">Delete</span> <i class="fa fa-times"></i></button>
                                              </form>
                                              </div>
                                          </div>
                                        </td>
                                    </tr>
                                  <? } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "templates/modals.php";
include "templates/dialogs.php";
?>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
<script src="assets/vendor/sweetalert/sweetalert.min.js"></script><!-- SweetAlert Plugin Js -->
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/tables/jquery-datatable.js"></script>
</body>
</html>
