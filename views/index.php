<?php include('bnav.php')?>
<?php foreach ($posts as $post): ?>
    <h2><a href="<?php $this->route('/article/'.$post['_id']);?>"> 1 </a><?php echo $post['title'];?> 2-<?=$post['todate']; ?>-3</h2>
<?php endforeach; ?>
<?php include('bfooter.php')?>
