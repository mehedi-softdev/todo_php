<?php 

declare(strict_types=1);
display_errors(1);


$task_name = $_POST['task_name'];
$task_desc = $_POST['task_desc'];


$fileName = '/data/data.txt';
$file = fopen($fileName, 'r');

if( $file == false ) {
	echo "Error in opening file";

	$file = fopen($fileName, 'w');
	echo "file created!";
	exit();
}

fclose($file);