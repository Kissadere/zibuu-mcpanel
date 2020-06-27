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

if(isset($formhandler['ufid_suspenduser'])) {
  if($action == "new") {

    $id                 = $_REQUEST['id'];
    $username           = $_REQUEST['username'];
    $admin              = $_REQUEST['admin'];
    $created            = $_REQUEST['created'];
    $reason             = $_REQUEST['reason'];
    $duration           = $_REQUEST['duration'];

    $durationunix       = strtotime("$duration")*1000;

    $status             = 'received';

}

  switch ($status) {

    case 'processing':
      header('Location: '.$data_error);
      $msg_type     = 'error';
      $msg_title    = 'Whoops!';
      $msg_body     = 'An unexpected error ocurred while trying to save your translation';
      break;


      case 'received':
      $sql    = "INSERT INTO suncore_bans_bans(`user`, `reason`, `admin`, `created`, `expired`)
      VALUES(\"$username\", \"$reason\", \"$admin\", \"$created\", \"$durationunix\")";


      $result = mysqli_query($db, $sql);
      mysqli_close($db);


      $msg_type     = 'success';
      $msg_title    = 'Done!';
      $msg_body     = 'Translation has been added succesfully';
      header('Location: '.$success);
      break;
    }
}
?>
