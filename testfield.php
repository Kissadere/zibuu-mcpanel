<?php
require_once("includes/rcon.php");

$host = 'furrycraft.zibuu.net';
$port = 25575;
$password = '137970d4d8991fb5d149c87ea05e3ae84b6deb5678503875834d08e37d3398248caf05c86eaa5197403574095c3da7a1f936279c2cf093000cf8704ef43d76ac';

use Thedudeguy\Rcon;
$rcon = new Rcon($host, $port, $password, $timeout);
if ($rcon->connect()) {
  $rcon->sendCommand("eco take Kissadere 100");
  echo "Succes";
}
else {
  echo "Failed";
}
?>
