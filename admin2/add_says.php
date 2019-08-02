<?php
define("PAGE_ID",3);
include("vendor.php");

include("includes/header.php");

?>

<br>
</br>
<div class="container">
	<div class="row">
<div class="col-md-1"></div>
	<div class="col-md-8">
	<div class="panel panel-primary">
  <div class="panel-heading" style="background-color:#009cff;">
    <h2 class="panel-title" style="color:white;">Testimonial</h2>
  </div>
  <div class="panel-body">
	
<form method="post" enctype="multipart/form-data" action="insert_says.php">
    <fieldset>
    <legend>ADD </legend>
    <div class="form-group">
      <label>Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    
    <div class="form-group">
      <label>Content</label>
             <textarea class="form-control" name="content" rows="3"></textarea>
    </div>
    
  
    
    <div class="form-group">
      <label>Position</label>
        <input type="text" name="position" class="form-control" >
    </div>
    
    <div class="form-group">
      <label >Image</label>
      <input type="file" name="image">
    </div>
    
    
    
    
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</fieldset>
</form>
</div>
</div></div>
</div>
</div>

<?php

include("includes/footer.php");

?>