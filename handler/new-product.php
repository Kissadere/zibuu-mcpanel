<?php
require "../includes/database.php";

$formname    = $_POST['form_name'];
$action      = $_REQUEST['action'];
$formhandler = array("$formname" => "true");
$status      = 'processing';
$data_error  = '../catalogue';
$success     = '../catalogue';
$msg_type    = '';
$msg_title   = '';
$msg_body    = '';

if(isset($formhandler['ufid_catalogue'])) {
  if($action == "new") {

    $id                     = $_REQUEST['id'];
    $name                   = $_REQUEST['name'];
    $description            = $_REQUEST['description'];
    $type                   = $_REQUEST['type'];
    $price                  = $_REQUEST['price'];
    $command                = $_REQUEST['command'];
    $displaypic             = $_REQUEST['displaypic'];
    $permission             = $_REQUEST['permission'];
    $displayed              = $_REQUEST['displayed'];

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
      $sql    = "INSERT INTO core_web_shop (`name`, `description`, `type`, `price`, `command`, `displaypic`, `permission`)
      VALUES(\"$name\", \"$description\", \"$type\", \"$price\", \"$command\", \"$displaypic\", \"$permission\")";


      $result = mysqli_query($db, $sql);
      mysqli_close($db);


      $msg_type     = 'success';
      $msg_title    = 'Done!';
      $msg_body     = 'Item has been added succesfully';
      header('Location: '.$success);
      break;
    }


    if($action == "edit") {

      $id                     = $_REQUEST['id'];
      $name                   = $_REQUEST['name'];
      $description            = $_REQUEST['description'];
      $type                   = $_REQUEST['type'];
      $price                  = $_REQUEST['price'];
      $command                = $_REQUEST['command'];
      $displaypic             = $_REQUEST['displaypic'];
      $permission             = $_REQUEST['permission'];
      $displayed              = $_REQUEST['displayed'];

      $status                 = 'received';

      switch ($status) {

        case 'processing':
          header('Location: '.$data_error);
          $msg_type     = 'error';
          $msg_title    = 'Whoops!';
          $msg_body     = 'An unexpected error ocurred while trying to save your translation';
          break;


          case 'received':
          $sql    = "UPDATE core_web_shop SET `name` = \"$name\", `description` = \"$description\", `type` = \"$type\", `price` = \"$price\", `command` = \"$command\", `displaypic` = \"$displaypic\",
           `permission` = \"$permission\", `displayed` = \"$displayed\" WHERE `id` = $id";
          $result = mysqli_query($db, $sql);
          mysqli_close($db);

          $msg_type     = 'success';
          $msg_title    = 'Done!';
          $msg_body     = 'Item has been updated succesfully';
          echo $sql;
          //header('Location: '.$success);
          break;
        }

  }

  if($action == "hide") {

    $id         = $_REQUEST['id'];
    $displayed  = $_REQUEST['displayed'];

    switch ($displayed) {
      case 'YES':
        $display = '0';
        break;
      case 'NO':
        $display = '1';
        break;
    }

    $status     = 'received';

    switch ($status) {

      case 'processing':
        header('Location: '.$data_error);
        $msg_type     = 'error';
        $msg_title    = 'Whoops!';
        $msg_body     = 'An unexpected error ocurred while trying to save your translation';
        break;


        case 'received':
        $sql    = "UPDATE core_web_shop SET(`displayed` = \"$display\") WHERE id = $id";
        $result = mysqli_query($db, $sql);
        mysqli_close($db);

        $msg_type     = 'success';
        $msg_title    = 'Done!';
        $msg_body     = 'Item has been updated succesfully';
        header('Location: '.$success);
        break;
      }

    }

    if($action == "erase") {

      $id      = $_REQUEST['id'];
      $status  = 'received';

      switch ($status) {

        case 'processing':
          header('Location: '.$data_error);
          $msg_type     = 'error';
          $msg_title    = 'Whoops!';
          $msg_body     = 'An unexpected error ocurred while trying to save your translation';
          break;


          case 'received':
          $sql    = "DELETE FROM core_web_shop WHERE id = $id";
          $result = mysqli_query($db, $sql);
          mysqli_close($db);

          $msg_type     = 'success';
          $msg_title    = 'Done!';
          $msg_body     = 'Item has been deleted';
          header('Location: '.$success);
          break;
        }

      }
}
?>
