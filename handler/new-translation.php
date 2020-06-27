<?php
require "../includes/database.php";
$mysql_database = 'admin_zibuu';
mysqli_select_db($db, $mysql_database) or die('<h1>An unexpected error ocurred while trying to select the database</h1><br>'.mysqli_error($db));
mysqli_set_charset($db, 'utf8');

$formname    = $_POST['form_name'];
$action      = $_POST['action'];
$formhandler = array("$formname" => "true");
$status      = 'processing';
$data_error  = '../translations';
$success     = '../translations';
$msg_type    = '';
$msg_title   = '';
$msg_body    = '';

if(isset($formhandler['ufid_translation'])) {
  if($action = "new") {

  $type           = $_REQUEST['type'];
  $ukey           = $_REQUEST['key'];
  $prefix         = $_REQUEST['prefix'];
  $trans_english  = $_REQUEST['english'];
  $trans_spanish  = $_REQUEST['spanish'];

  $status         = 'received';

}

  switch ($status) {
    case 'processing':

      header('Location: '.$data_error);
      $msg_type    = 'error';
      $msg_title = 'Whoops!';
      $msg_body  = 'An unexpected error ocurred while trying to save your translation';
      break;

      case 'received':

      $sql = "INSERT INTO triton_translations(`type`, `variable`, `english`, `spanish`, `has_prefix`)
      VALUES(\"$type\", \"$ukey\", \"$trans_english\", \"$trans_spanish\", \"$prefix\")";

      $result    = mysqli_query($db, $sql);
      mysqli_close($db);

      $msg_type    = 'success';
      $msg_title = 'Done!';
      $msg_body  = 'Translation has been added succesfully';
      header('Location: '.$success);
      break;
    }

    if($action = "edit") {
      switch ($status) {
        case 'processing':

          header('Location: '.$data_error);
          $msg_type     = 'error';
          $msg_title    = 'Whoops!';
          $msg_body     = 'An unexpected error ocurred while trying to save your translation';
          break;

          case 'received':

          $sql    = "UPDATE triton_translations SET(`type` = \"$type\", `variable` = \"$ukey\", `english` = \"$trans_english\", `spanish` = \"$trans_spanish\", has_prefix = \"$prefix\")";
          $result = mysqli_query($db, $sql);
          mysqli_close($db);

          $msg_type     = 'success';
          $msg_title    = 'Done!';
          $msg_body     = 'Translation has been updated succesfully';
          header('Location: '.$success);
          break;
        }

  }
}
?>
