<?php
require "../includes/database.php";

$formname    = $_POST['form_name'];
$action      = $_REQUEST['action'];
$formhandler = array("$formname" => "true");
$status      = 'processing';
$data_error  = '../announcements';
$success     = '../announcements';
$msg_type    = '';
$msg_title   = '';
$msg_body    = '';

if(isset($formhandler['ufid_announcement'])) {
  if($action == "new") {

    $title                  = $_REQUEST['title'];
    $description            = $_REQUEST['description'];
    $category               = $_REQUEST['category'];
    $banner                 = $_REQUEST['banner'];
    $content                = $_REQUEST['content'];
    $date                   = date("Y-m-d");
    $creator                = $_REQUEST['creator'];
    $lowcase                = strtolower($title);
    $unix                   = date("Hims");
    $final                  = "$lowcase $unix";
    $url                    = str_replace(' ', '-', $final);

    $status                 = 'received';

}

  switch ($status) {

    case 'processing':
      header('Location: '.$data_error);
      $msg_type     = 'error';
      $msg_title    = 'Whoops!';
      $msg_body     = 'An unexpected error ocurred while trying to save your announcement';
      break;


      case 'received':
      $sql    = "INSERT INTO core_web_announcements (`title`, `description`, `content`, `cattegory`, `creator`, `date`, `banner`, `url`)
      VALUES(\"$title\", \"$description\", \"$content\", \"$category\", \"$creator\", \"$date\", \"$banner\", \"$url\")";


      $result = mysqli_query($db, $sql);
      mysqli_close($db);


      $msg_type     = 'success';
      $msg_title    = 'Done!';
      $msg_body     = 'Announcement has been added succesfully';
      header('Location: '.$success);
      break;
    }
}
?>
