<?php
include '../init.php';


$postController = $container->make("postsController");
$postController->show($_GET["id"]);

?>