<?php include __DIR__ . "/../layout/header.php";?>

<div class="col-sm-8 text-left">


      <h1><?php echo $post['title'];?></h1>
      <p><?php echo nl2br($post['post']);?></p>
      <hr>

    </div>
    
    <?php include __DIR__ . "/../layout/footer.php";?>