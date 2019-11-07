<?php include __DIR__ . "/../layout/header.php";?>

<div class="col-sm-8 text-left">


      <h1><?php echo $post['title'];?></h1>
      <p><?php echo nl2br($post['post']);?></p>
      <hr>


    <ul class="list-group">
    	<?php  foreach($comments AS $comment): ?>
    	<li class="list-group-item">
    	<?php echo $comment->content;?>
    		<?php //var_dump($comment); ?>
    	</li>
    <?php endforeach;?>
    </ul>
    </div>
    
    

    
    <?php include __DIR__ . "/../layout/footer.php";?>
    