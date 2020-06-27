<?php
require "../includes/database.php";

$formname    = $_POST['form_name'];
$action      = $_POST['action'];
$formhandler = array("$formname" => "true");
$status      = 'processing';
$data_error  = '../achievements';
$success     = '../achievements';
$msg_type    = '';
$msg_title   = '';
$msg_body    = '';

if(isset($formhandler['ufid_achievements'])) {
  if($action == "new") {

    $type                   = $_REQUEST['type'];
    $materialtype           = $_REQUEST['material_type'];
    $entitytype             = $_REQUEST['entity_type'];
    $title                  = $_REQUEST['title'];
    $description            = $_REQUEST['description'];
    $code                   = $_REQUEST['code'];
    $rewardtype             = $_REQUEST['reward_type'];
    $reward                 = $_REQUEST['reward'];
    $goal                   = $_REQUEST['goal'];

    $status                 = 'received';

}

  switch ($status) {

    case 'processing':
      header('Location: '.$data_error);
      $msg_type     = 'error';
      $msg_title    = 'Whoops!';
      $msg_body     = 'An unexpected error ocurred while trying to save your translation';
      break;


      case 'received':
      $sql    = "INSERT INTO core_badges(`type`, `material_type`, `entity_type`, `title`, `description`, `code`, `reward_type`, `reward`, `goal`)
      VALUES(\"$type\", \"$materialtype\", \"$entitytype\", \"$title\", \"$description\", \"$code\", \"$rewardtype\", \"$reward\", \"$goal\")";


      $result = mysqli_query($db, $sql);
      mysqli_close($db);


      $msg_type     = 'success';
      $msg_title    = 'Done!';
      $msg_body     = 'Translation has been added succesfully';
      header('Location: '.$success);
      break;
    }


    if($action == "edit") {
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
