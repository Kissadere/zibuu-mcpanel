<?php
include "../includes/database.php";

if(isset($_POST['action'])) {
  $identification = $_POST['id'];
  $action         = $_POST['action'];
  $success        = '../achievements';
  $action = $_POST['action'];
    if($action = 'erase') {
      $sql = "DELETE FROM `core_badges` WHERE `id` = $identification";
      $result = mysqli_query($db, $sql);
      header('Location: '.$success);
  }
}
?>
