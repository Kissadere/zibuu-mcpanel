<?php
require "includes/core.php";
?>

<!-- User list -->
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>Banned users</h1>
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
                                        <th>Username</th>
                                        <th>Issued by</th>
                                        <th>Ban date</th>
                                        <th>Expiration</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?
                                  $sql        = "SELECT * FROM suncore_bans_bans ORDER BY id DESC";
                                  $result     = mysqli_query($db, $sql);
                                  while($data = mysqli_fetch_assoc($result)) {

                                    // Requesting specific data
                                    $id           = $data['id'];
                                    $username     = $data['user'];
                                    $admin        = $data['admin'];
                                    $bandate      = $data['created'];
                                    $bandate      = $bandate / 1000;
                                    $expiration   = $data['expired'];
                                    $expiration   = $expiration / 1000;

                                    switch ($admin) {
                                      case 'CONSOLE':
                                        $admin = "<span class='badge badge-info'>CONSOLE</span>";
                                        break;
                                    }

                                    switch ($expiration) {
                                      case '-0.001':
                                        $expiration = '2147385600';
                                        break;
                                    }
                                  ?>
                                    <tr>
                                        <!-- User data -->
                                        <th><? echo $id; ?></th>
                                        <td><? echo $username; ?></td>
                                        <td><? echo $admin; ?></td>
                                        <td><? echo gmdate("Y-m-d (l)", $bandate); ?></td>
                                        <td>
                                        <?
                                        switch ($expiration) {
                                          case '2147385600':
                                            echo "<span class='badge badge-warning'>Never</span>";
                                            break;
                                          default:
                                            echo gmdate("Y-m-d (l)", $expiration);
                                            break;
                                        }
                                        ?>
                                        </td>
                                        <!-- Actions -->
                                        <td align="right">
                                          <div class="btn-group mb-3">
                                              <div class="btn-group" role="group">
                                              <form method="post" action="handler/pardon-user.php">
                                                <input type="hidden" name="form_name" value="ufid_pardonuser">
                                                <input type="hidden" name="action" value="erase">
                                                <input type="hidden" name="id" value="<? echo $id; ?>">
                                                <button type="submit" class="btn btn-success mb-2" title="Pardon"><span class="sr-only">Pardon</span> <i class="fa fa-check"></i></button>
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
