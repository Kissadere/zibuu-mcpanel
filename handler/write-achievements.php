<?php
include "../includes/database.php";


$sql    = "SELECT * FROM core_badges";
$result = mysqli_query($db, $sql);
$counter = 0;
while($cat = mysqli_fetch_assoc($result)) {
  $counter++;
  $type                   = $cat['type'];
  $materialtype           = $cat['material_type'];
  $entitytype             = $cat['entity_type'];
  $title                  = $cat['title'];
  $description            = $cat['description'];
  $code                   = $cat['code'];
  $rewardtype             = $cat['reward_type'];
  $reward                 = $cat['reward'];
  $goal                   = $cat['goal'];
  $variable               = '';

  switch ($materialtype) {
    case 'false':
      $variable = $entitytype;
      break;
    default:
      $variable = $materialtype;
      break;
  }
  switch ($entitytype) {
    case 'false':
      $variable = $materialtype;
      break;
    default:
      $variable = $entitytype;
      break;
  }

  switch ($variable) {
    case 'false':
      $variable = '';
      break;
  }

if(!empty($variable)) {

  if ($rewardtype !== "false") {
    $body = array(

      "$type" => array(
        "$variable" => array(


          "$goal" => array(
            'Message' => "$description",
            'Name' => "$code",
            'DisplayName' => "$title",

            'Reward' => array(
              "$rewardtype" => "$reward",
              )
          )
        )
      )
    );
  }
  else {

    $body = array(

      "$type" => array(
        "$variable" => array(


          "$goal" => array(
            'Message' => "$description",
            'Name' => "$code",
            'DisplayName' => "$title",
          )
        )
      )
    );
  }

}
else {

  if ($rewardtype !== "false") {
    $body = array(

      "$type" => array(

          "$goal" => array(
            'Message' => "$description",
            'Name' => "$code",
            'DisplayName' => "$title",

            'Reward' => array(
              "$rewardtype" => "$reward",
              )
          )
      )
    );
  }
  else {

    $body = array(

      "$type" => array(

          "$goal" => array(
            'Message' => "$description",
            'Name' => "$code",
            'DisplayName' => "$title",
          )
      )
    );
  }

}

  $writer = yaml_emit($body, YAML_UTF8_ENCODING, YAML_CRLN_BREAK);
  $document = fopen("../documents/achievements.yml", 'a');
  fwrite ($document, "$writer\n");
  fclose($document);

}
?>
