<h2><?php echo $post['title'];?></h2>
<br>
<div class="post-body">
    <?php echo $post['body']; ?>
    
    <br>
    <br>
  <small class="post-date">Posted on: <?php echo $post['created_at']; ?></small>  
    
<hr><?php echo form_open('/posts/delete/'.$post['id']); ?>
<input type="submit" value="delete" class="btn btn-danger"> 
<a class="btn btn-info" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>   
</div>