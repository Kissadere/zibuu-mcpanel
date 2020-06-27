<?php
$title = "Hola mundo";
$lowcase = strtolower($title);
$date = date("Hims") * 1000;
$final = "$lowcase $date";
$url = str_replace(' ', '-', $final);

echo "$url";
echo "<br/>";
echo "$date";

?>
