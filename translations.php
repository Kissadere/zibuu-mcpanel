<?php
require "includes/core.php";
?>

<!-- Translations -->
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>Translations</h1>
                </div>
                <div class="col-md-6 col-sm-12 text-right hidden-xs">
                    <a href="javascript:void(0);" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ufid_translation" title="">Add New</a>
                    <a href="javascript:void(0);" class="btn btn-sm btn-info" data-toggle="modal" data-target="#ufid_writetranslation" title="">Write file</a>
                    <a href="javascript:void(0);" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#ufid_regentranslation" title="">Regenerate file</a>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                      <h2>Current translations</h2>
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
                                        <th>Variable</th>
                                        <th>Prefix</th>
                                        <th>English</th>
                                        <th>Spanish</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?
                                  include "dependencies/translations-list.php";
                                  while($data = mysqli_fetch_assoc($result)) {

                                    // Requesting specific data
                                    $transid  = $data['id'];
                                    $variable = $data['variable'];
                                    $english  = $data['english'];
                                    $spanish  = $data['spanish'];
                                    $prefix   = $data['has_prefix'];

                                    switch ($prefix) {
                                      case '0':
                                        $prefix = "<span class='badge badge-danger'>NO</span>";
                                        break;

                                      case '1':
                                        $prefix = "<span class='badge badge-success'>YES</span>";
                                        break;
                                    }

                                    switch ($variable) {
                                      case 'test.var':
                                        $variable = "<span class='badge badge-warning'>NONE</span>";
                                        break;
                                    }
                                  ?>
                                    <tr>
                                        <!-- Translations -->
                                        <td><? echo $transid; ?></td>
                                        <td><? echo $variable; ?></td>
                                        <td><? echo $prefix; ?></td>
                                        <td><? echo $english; ?></td>
                                        <td><? echo $spanish; ?></td>
                                        <!-- Actions -->
                                        <td align="right">
                                          <form action="update-translation.php" method=post>
                                          <div class="btn-group mb-3">
                                              <div class="btn-group" role="group">
                                                <button name="action" value="edit" type="submit" class="btn btn-info mb-2" title="Edit"><span class="sr-only">Edit</span> <i class="fa fa-edit"></i></button>
                                                <input type="hidden" name="id" value="<? echo $transid; ?>">
                                          </form>
                                          <form action="handler/erase-translation.php" method=post>
                                                <button name="action" value="erase" type="submit" class="btn btn-danger mb-2" title="Erase"><span class="sr-only">Erase</span> <i class="fa fa-trash-o"></i></button>
                                                <input type="hidden" name="id" value="<? echo $transid; ?>">
                                          </form>
                                        </div>
                                      </div>
                                        </td>
                                    </tr>
                                  <?php } ?>
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

<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>
</body>
</html>
