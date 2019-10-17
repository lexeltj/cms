<?php
$dsn = 'mysql:dbname=blog;host=127.0.0.1';
$user = 'root';
$password = '';

$myDB = new PDO($dsn,$user,$password);

$myDB->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);





?>