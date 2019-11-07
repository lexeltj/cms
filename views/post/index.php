<?php include __DIR__ . "/../layout/header.php";?>
    <div class="col-sm-8 text-left"> 
<ul>
<?php foreach ($posts as $pos) :?>
    <li><a href=post?id=<?php echo e($pos->id);?>>
    	<?php echo e($pos->title);?></a></li>
    <?php endforeach;?>

</ul>
  </div>
<?php include __DIR__ . "/../layout/footer.php";?>