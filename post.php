<?php
include 'header.php';
include 'database.php';


$inhalt = $myDB->query("select post from posts where id = {$_GET["id"]}");
$inhalt->fetch();

$post = fetch_posts($_GET["id"]);


echo "<h1>".$post["title"]."</h1>";
echo $post["post"];

include 'footer.php';
?>