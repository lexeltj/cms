<?php include __DIR__ . "/../layout/header.php";?>

<div class="col-sm-8 text-left">


      <h1><?php echo e($post['title']);?></h1>
      <p><?php echo nl2br(e($post['post']));?></p>
      <hr>


    <ul class="list-group">
    	<?php  foreach($comments AS $comment): ?>
    	<li class="list-group-item">
    	<?php echo e($comment->content);?>
    		<?php //var_dump($comment); ?>
    	</li>
    <?php endforeach;?>
    </ul>
    
    <form method="post" action="post?id=<?php echo e($post['id']);?>">
    
    	<textarea name="content" class="form-control"></textarea>
    	<br>
    	<input type="submit" value="Kommentar hinzufügen" class="btn btn-primary" />
    
    
    </form>
    
    
    </div>
    
    <br>
    <br>
    <br>

    
    <?php include __DIR__ . "/../layout/footer.php";?>
    