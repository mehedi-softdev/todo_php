<?php 

declare(strict_types = 1); // active strict mode


$view_folder = 'views' . DIRECTORY_SEPARATOR;

define('VIEW_PATH', $view_folder);

$header = null;
$footer = null;
$title = null;

if(is_dir(VIEW_PATH)) {
    $header = VIEW_PATH . 'inc' . DIRECTORY_SEPARATOR . 'header.php';
    $footer = VIEW_PATH . 'inc' . DIRECTORY_SEPARATOR . 'footer.php';
}
else {
    echo "<p class='alert alert-danger'> Your Header and footer directory is missing";
}




# include header file
if(isset($header)) {
    $title = "Home";
    include $header;
}


include VIEW_PATH . 'home.php';

# footer include
if(isset($footer)) {
    include $footer;
}