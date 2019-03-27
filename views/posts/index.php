<h2><?= $title ?> <?php echo ":"?></h2><br>
<div class="wrapper"> <div class="container"><?php foreach($posts as $post) : ?>
<h3>
<br>   
  
   
    <?php 
    echo "<h3'>";
    echo $post['title']; 
    echo "</h3>";
    ?>


<br>
<?php echo $post['body']; ?>
<br>
<a class="btn btn-info" href="<?php echo site_url('posts/' .$post['slug']);?>">Read More</a>
<br><br><br>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br><br>
<?php endforeach ;?>
    