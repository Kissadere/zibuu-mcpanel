<?php
require "../includes/database.php";

$formname    = $_POST['form_name'];
$formhandler = array("$formname" => "true");
$status      = 'processing';
$data_error  = '../achievements';
$success     = '../achievements';
$msg_type    = '';
$msg_title   = '';
$msg_body    = '';

if(isset($formhandler['ufid_updateachievement'])) {

  $id             = $_REQUEST['id'];
  $type           = $_REQUEST['type'];
  $materialtype   = $_REQUEST['material_type'];
  $entitytype     = $_REQUEST['entity_type'];
  $title          = $_REQUEST['title'];
  $description    = $_REQUEST['description'];
  $code           = $_REQUEST['code'];
  $reward_type    = $_REQUEST['reward_type'];
  $reward         = $_REQUEST['reward'];
  $goal           = $_REQUEST['goal'];

  $status         = 'received';

}

  switch ($status) {
    case 'processing':

      header('Location: '.$data_error);
      $msg_type     = 'error';
      $msg_title    = 'Whoops!';
      $msg_body     = 'An unexpected error ocurred while trying to save your achievement';
      break;

      case 'received':

      $sql    = "UPDATE core_badges SET `type` = \"$type\", `material_type` = \"$materialtype\", `entity_type` = \"$entitytype\", `title` = \"$title\", `description` = \"$description\", `code` = \"$code\",
      `reward_type` = \"$reward_type\", `reward` = \"reward\", `goal` = \"$goal\" WHERE `id` = $id";
      $result = mysqli_query($db, $sql);
      mysqli_close($db);

      $msg_type     = 'success';
      $msg_title    = 'Done!';
      $msg_body     = 'Achievement updated succesfully';
      echo $sql;
      header('Location: '.$success);
      break;
    }
?>
