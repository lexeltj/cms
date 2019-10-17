<?php
include '../init.php';
include 'elements/header.php';

$postRepository = $container->getPostsRepository();

$post = $postRepository->fetchPosts($_GET["id"]);


?>
<div class="container-fluid text-center">
<div class="row content">
<div class="col-sm-2 sidenav">
<p><a href="#">Link</a></p>
<p><a href="#">Link</a></p>
<p><a href="#">Link</a></p>
</div>
<div class="col-sm-8 text-left">

      <h1><?php //echo $post["title"];?></h1>
      <p><?php //echo nl2br($post["post"]);?></p>
      
      <h1><?php //echo $post->title;?></h1>
      <h1><?php echo $post['title'];?></h1>
      <p><?php //echo nl2br($post->post);?></p>
      <p><?php echo nl2br($post['post']);?></p>
      <hr>

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
include 'elements/footer.php';
?>