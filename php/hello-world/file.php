<?php
$filename = "array.php";
$file = fopen($filename, "r");
$buf = fread($file, filesize($filename));
echo $buf;
fclose($file);
