<?php include 'header.php';?>

<div class="row">
    
   <div class="col-md-9 col-sm-6">
        <?php
	include 'templates/modules/manage_modules.php';
	?>
   </div>
   
   <div class="col-md-3 col-sm-3">
        <?php
	include 'templates/modules/status_update.php';
	?>
   </div>
   <div class="col-md-3 col-sm-3">
        <?php
	include 'templates/modules/manage_modules.php';
	include 'templates/modules/status_update.php';
	?>
   </div>
   <div class="col-md-3 col-sm-3">
        <?php
	include 'templates/modules/manage_modules.php';
	include 'templates/modules/status_update.php';
	?>
   </div>

</div><!--/row-->
  
<?php include 'footer.php';?>