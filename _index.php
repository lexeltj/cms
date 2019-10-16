<?php 
// autoload start


include 'database.php';

function autoload($classname) {
    include $classname . ".php";
}

$classname = spl_autoload_register("autoload");


// Inhalt im Blog


$inhalt = fetch_post();
$title = fetch_posts("title");

?>

<ul>
    <?php foreach ($inhalt as $pos) :?>
    <li><a href=post.php?id=<?php echo $pos["id"];?>><?php echo $pos["title"];?></a></li>
    <?php endforeach;?>

</ul>


