<head>
<style>
   
    
    #wrapper{
        background-color:#007BFF;
    }
   
    
</style>    
    
    
</head><h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<div id="wrapper">
    <div class="container">
   <?php echo form_open('posts/create');?> 
  <div class="form-group">
    <label for="Title"><h4>Title:</h4></label>
    <input type="title" class="form-control" name="title" aria-describedby="emailHelp" placeholder="">
   
  </div>
  <div class="form-group">
    <label for=""><h4>Post:</h4></label>
    <textarea class="form-control" name="body"></textarea>
  </div>
 
<input type="submit" class="btn btn-success" value="Submit"><br><br>
        </form></div>
    
    
    
    
</div>

