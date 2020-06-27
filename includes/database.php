<?php

  // Setting up our database connection
  $mysql_server = 'localhost';
  $mysql_username = 'admin_zibuu';
  $mysql_password = '88m8hhUKQ8GguP3EEGhQX5RQ9Dsnc2';
  $mysql_database = 'admin_minecraft';
  // Should be left like this unless we've got a different port configured (DEFAULT: 3306)
  $mysql_port = '3306';

  // Checking our database connection
  $db = mysqli_connect($mysql_server, $mysql_username, $mysql_password);
  if (!$db) {
    die('<h1>An unexpected error ocurred while trying to connect to the server</h1><br>'.mysqli_error($db));
    }

  // Selecting our database and preparing it
  mysqli_select_db($db, $mysql_database) or die('<h1>An unexpected error ocurred while trying to select the database</h1><br>'.mysqli_error($db));
  mysqli_set_charset($db, 'utf8');

?>
