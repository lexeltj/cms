<?php
require __DIR__ .'/autoload.php';
require __DIR__ .'/database.php';

setlocale(LC_ALL, "de_DE");

function e($str)
{
    return htmlentities($str, ENT_QUOTES, 'UTF-8');
}


$container = new App\Core\Container();

?>