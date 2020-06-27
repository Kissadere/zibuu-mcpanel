<?php
require "includes/core.php";
?>

<!-- User list -->
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>Registered users</h1>
                </div>
                <div class="col-md-6 col-sm-12 text-right hidden-xs">
                    <a href="javascript:void(0);" class="btn btn-sm btn-success" title="">New Account</a>
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
                                        <th></th>
                                        <th>Username</th>
                                        <th>Reg. Date</th>
                                        <th>Last login</th>
                                        <th>Email</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?
                                  include "dependencies/user-list.php";
                                  while($data = mysqli_fetch_assoc($result)) {

                                    // Requesting specific data
                                    $id           = $data['id'];
                                    $username     = $data['username'];
                                    $loginstatus  = $data['loginstatus'];
                                    $regdate      = $data['regdate'];
                                    $regdate      = $regdate / 1000;
                                    $lastlogin    = $data['lastlogin'];
                                    $lastlogin    = $lastlogin / 1000;
                                    $email        = $data['email'];

                                    switch ($loginstatus) {
                                      case '0':
                                        $loginstatus = "<span class='badge badge-danger'>OFFLINE</span>";
                                        break;

                                      case '1':
                                        $loginstatus = "<span class='badge badge-success'>ONLINE</span>";
                                        break;
                                    }

                                    switch ($lastlogin) {
                                      case '':
                                        $lastlogin = "<span class='badge badge-warning'>Never</span>";
                                        break;
                                    }

                                    switch ($email) {
                                      case '':
                                        $email = '<span class="badge badge-warning">No email</span>';
                                        break;
                                    }
                                  ?>
                                    <tr>
                                        <!-- User data -->
                                        <th><? echo $loginstatus; ?></th>
                                        <td>
                                        <? echo $username; ?><br/>
                                        </td>
                                        <td><? echo gmdate("D M d @ H:i", $regdate); ?></td>
                                        <td><? echo gmdate("D M d @ H:i", $lastlogin); ?></td>
                                        <td><? echo $email ?></td>
                                        <!-- Actions -->
                                        <td align="right">
                                          <div class="btn-group mb-3">
                                              <div class="btn-group" role="group">
                                                <form action="" method="post">
                                                <input type="hidden" name="action" value="password">
                                                <input type="hidden" name="form_name" value="ufid_resetuserpassword">
                                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                                <button type="submit" class="btn btn-info mb-2" title="Reset password"><span class="sr-only">Reset password</span> <i class="fa fa-pencil"></i></button>
                                                </form>

                                                <form action="ban-hammer.php" method="post">
                                                <input type="hidden" name="action" value="suspend">
                                                <input type="hidden" name="form_name" value="ufid_suspenduser">
                                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                <button type="submit" class="btn btn-warning mb-2" title="Suspend"><span class="sr-only">Suspend</span> <i class="fa fa-lock"></i></button>
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
