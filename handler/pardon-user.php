<?php
require "../includes/database.php";

$formname    = $_POST['form_name'];
$action      = $_POST['action'];
$formhandler = array("$formname" => "true");
$status      = 'processing';
$data_error  = '../ban-list';
$success     = '../ban-list';
$msg_type    = '';
$msg_title   = '';
$msg_body    = '';

if(isset($formhandler['ufid_pardonuser'])) {
  if($action == "erase") {

    $id                 = $_REQUEST['id'];
    $status             = 'received';

}

  switch ($status) {

    case 'processing':
      header('Location: '.$data_error);
      $msg_type     = 'error';
      $msg_title    = 'Whoops!';
      $msg_body     = 'An unexpected error ocurred while trying to pardon this user';
      break;


      case 'received':
      $sql    = "DELETE FROM `suncore_bans_bans` WHERE `id` = $id";

      $result = mysqli_query($db, $sql);
      mysqli_close($db);


      $msg_type     = 'success';
      $msg_title    = 'Done!';
      $msg_body     = 'Username has been removed from the blacklist';
      header('Location: '.$success);
      break;
    }
}
?>
