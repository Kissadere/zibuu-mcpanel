<?php
/* ZIBUU ENTERTAINMENT, (C) 2015 - 2020.
 ________   ______   ____     __  __  __  __
/\_____  \ /\__  _\ /\  _`\  /\ \/\ \/\ \/\ \
\/____//'/'\/_/\ \/ \ \ \L\ \\ \ \ \ \ \ \ \ \
     //'/'    \ \ \  \ \  _ <'\ \ \ \ \ \ \ \ \
    //'/'___   \_\ \__\ \ \L\ \\ \ \_\ \ \ \_\ \
    /\_______\ /\_____\\ \____/ \ \_____\ \_____\
    \/_______/ \/_____/ \/___/   \/_____/\/_____/

*/
require "../includes/database.php";

$mysql_database = 'admin_zibuu';
mysqli_select_db($db, $mysql_database) or die('<h1>An unexpected error ocurred while trying to select the database</h1><br>'.mysqli_error($db));
mysqli_set_charset($db, 'utf8');
$mysql_table = 'triton_translations';

$sql = "SELECT * FROM $mysql_table";
$result = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($result);
if ($data = mysqli_fetch_assoc($result)) {

  $id          = $data['id'];
  $langtype        = $data['type'];
  $langkey         = $data['variable'];
  $prefix      = $data['has_prefix'];
  $langenglish = $data['english'];
  $langspanish = $data['spanish'];

}

  // Reading our raw input data
  $raw_us = $langenglish;
  $raw_es = $langspanish;
  // Setting up our prefixes for each language
  $prefix_us = '&c&l[ALERT]&r&7 ';
  $prefix_es = '&c&l[AVISO]&r&7 ';
  // Formatting our output data
  $english = "$prefix_us$raw_us";
  $spanish = "$prefix_es$raw_es";


  // Converting variable texts to JSON
  class GeneralData {
      public $type;
      public $key;
      public $languages = array();

      function  __construct(){
        $this->type = $langtype;
        $this->key = $langkey;
          for ( $i=1; $i-->0;){
              array_push($this->languages, new Messages);
          }
      }
  }


  // Converting translations texts to JSON
  if($prefix == 0) {
  class Messages {
      public $en_US;
      public $es_MX;
      // If no prefix was selected, return a raw translation message
      function __construct() {
        $this->en_US = $raw_us;
        $this->es_MX = $raw_es;
      }
    }
  }


  // If a prefix was selected, return a formatted translation message
  else {
    class Messages {
      public $en_US;
      public $es_MX;
      function __construct() {
        $this->en_US = $GLOBALS['english'];
        $this->es_MX = $GLOBALS['spanish'];
      }
    }
  }


  // Detecting if any data was received and writing it to our JSON file
  if(isset($_POST['form_name'])) {
    $data = json_encode(new GeneralData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    $document = fopen('../documents/translations.json', 'a');
    fwrite($document, "$data,\n");
    fclose($document);
  }
