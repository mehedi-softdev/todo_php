<?php
declare(strict_types=1);
error_reporting(E_ALL);

$file = fopen('/data.txt', 'w');

// $string = "Hello World.\n";
// fwrite($file, $string);
fclose($file);
