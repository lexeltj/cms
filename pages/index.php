<?php
?>


<?php 
include '../init.php';
include 'elements/header.php';
// autoload start

/*
include '../database.php';

function autoload($classname) {
    include $classname . ".php";
}

$classname = spl_autoload_register("autoload");


// Inhalt im Blog

*/


$postRepository = new App\Posts\PostsRepository($myDB);



$inhalt = $postRepository->fetchPost();



?>


  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
    
    <ul>
    <?php foreach ($inhalt as $pos) :?>
    <li><a href=post.php?id=<?php echo $pos["id"];?>><?php echo $pos["title"];?></a></li>
    <?php endforeach;?>

</ul>
      <h1>Welcome</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      <h3>Test</h3>
      <p>Lorem ipsum...</p>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>
<?php

include 'elements/footer.php'; ?>